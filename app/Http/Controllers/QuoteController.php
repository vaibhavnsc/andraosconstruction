<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminQuoteMail;
use App\Mail\UserQuoteMail;

class QuoteController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'company'     => 'nullable|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'nullable|string|max:20',
            'scope'       => 'nullable|string|max:255',
            'approx_size' => 'nullable|string|max:255',
            'message'     => 'nullable|string',
        ]);

        $quote = Quote::create($request->all());

        try {
            Mail::to(config('mail.from.address'))
                ->send(new AdminQuoteMail($quote));

            Mail::to($quote->email)
                ->send(new UserQuoteMail($quote));
        } catch (\Throwable $e) {
            \Log::error('Quote mail delivery failed: '.$e->getMessage(), [
                'quote_id' => $quote->id,
                'trace' => $e->getTraceAsString(),
            ]);

            return response()->json([
                'status' => false,
                'message' => 'Quote request saved, but email delivery failed. Please contact us directly.',
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Quote request submitted successfully.'
        ]);
    }
}