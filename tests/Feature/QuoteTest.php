<?php

namespace Tests\Feature;

use App\Models\Quote;
use App\Mail\AdminQuoteMail;
use App\Mail\UserQuoteMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class QuoteTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_saves_quote_and_sends_email(): void
    {
        Mail::fake();

        $data = [
            'full_name'   => 'Jane Doe',
            'company'     => 'Acme Corp',
            'email'       => 'jane@example.com',
            'phone'       => '555-0199',
            'scope'       => 'Commercial Concrete',
            'approx_size' => '10,000 SF',
            'message'     => 'Need a quote for our parking lot.',
        ];

        $response = $this->post(route('quote.submit'), $data);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'Quote request submitted successfully.'
        ]);

        $this->assertDatabaseHas('quotes', [
            'full_name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        Mail::assertSent(AdminQuoteMail::class, function ($mail) {
            return $mail->quote->full_name === 'Jane Doe';
        });

        Mail::assertSent(UserQuoteMail::class, function ($mail) {
            return $mail->hasTo('jane@example.com') &&
                   $mail->quote->full_name === 'Jane Doe';
        });
    }

    public function test_contact_form_validation(): void
    {
        $response = $this->postJson(route('quote.submit'), []);
        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['full_name', 'email']);
    }
}
