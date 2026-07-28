<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\AdminQuoteMail;
use App\Mail\UserQuoteMail;

class QuoteController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'company'     => 'nullable|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'nullable|string|max:20',
            'scope'       => 'nullable|string|max:255',
            'approx_size' => 'nullable|string|max:255',
            'message'     => 'nullable|string|max:5000',
        ]);

        $quote = Quote::create($request->all());

        $adminEmail = config('mail.to.address', env('MAIL_TO_ADDRESS', 'Estimating@andraosconstruction.com'));
        $ccEmail = env('MAIL_CC_ADDRESS', 'beth@androsconstruction.com');

        $mailSent = true;
        try {
            $adminMail = Mail::to($adminEmail);
            if ($ccEmail) {
                $ccList = array_map('trim', explode(',', $ccEmail));
                $adminMail->cc($ccList);
            }
            $adminMail->send(new AdminQuoteMail($quote));

            Mail::to($quote->email)
                ->send(new UserQuoteMail($quote));
        } catch (\Throwable $e) {
            $mailSent = false;
            Log::error('Quote mail delivery failed: '.$e->getMessage(), [
                'quote_id' => $quote->id,
                'customer_email' => $quote->email,
                'trace' => $e->getTraceAsString(),
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Quote request submitted successfully.',
            'mail_sent' => $mailSent,
        ]);
    }
}