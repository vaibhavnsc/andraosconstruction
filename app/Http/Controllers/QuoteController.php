<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

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

        Quote::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Quote request submitted successfully.'
        ]);
    }
}