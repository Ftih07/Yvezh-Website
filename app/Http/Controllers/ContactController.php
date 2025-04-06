<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'user_whatsapp' => 'nullable|string',
            'user_project' => 'required|string',
        ]);

        // Simpan ke database
        Contact::create([
            'name' => $validated['user_name'],
            'email' => $validated['user_email'],
            'whatsapp_number' => $validated['user_whatsapp'],
            'message' => $validated['user_project'],
        ]);

        // Kirim email ke kamu
        Mail::raw("Message from: {$validated['user_name']} ({$validated['user_email']})\nWhatsApp Number: {$validated['user_whatsapp']}\n\n{$validated['user_project']}", function ($message) {
            $message->to('naufalfathi37@gmail.com')
                ->subject('New Message From Website Yvezh');
        });

        return back()->with('success', 'Message delivered successfully!');
    }
}
