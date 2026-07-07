<?php

namespace Tests\Feature;

use App\Mail\AdminQuoteMail;
use App\Mail\UserQuoteMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class QuoteMailTest extends TestCase
{
    use RefreshDatabase;

    public function test_quote_submission_sends_admin_and_user_emails(): void
    {
        Mail::fake();

        $response = $this->postJson('/quote-submit', [
            'full_name' => 'Jane Doe',
            'company' => 'Acme Construction',
            'email' => 'jane@example.com',
            'phone' => '3030000000',
            'scope' => 'Commercial Concrete',
            'approx_size' => '10000 sq ft',
            'message' => 'Need a quote for a new parking lot.',
        ]);

        $response->assertOk()
            ->assertJsonPath('status', true);

        $this->assertDatabaseHas('quotes', [
            'email' => 'jane@example.com',
        ]);

        Mail::assertSent(AdminQuoteMail::class, 1);
        Mail::assertSent(UserQuoteMail::class, 1);
    }
}
