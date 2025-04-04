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
            'user_project' => 'required|string',
        ]);

        // Simpan ke database
        Contact::create([
            'name' => $validated['user_name'],
            'email' => $validated['user_email'],
            'message' => $validated['user_project'],
        ]);

        // Kirim email ke kamu
        Mail::raw("Pesan dari: {$validated['user_name']} ({$validated['user_email']})\n\n{$validated['user_project']}", function ($message) {
            $message->to('naufalfathi37@gmail.com')
                ->subject('Pesan Baru dari Website');
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
