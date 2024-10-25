<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Mengirim email
        Mail::raw("Name: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\nMessage:\n{$data['message']}", function ($message) {
            $message->to('samole.example@gmail.com')->subject('Contact Form Submission');
        });

        // Redirect kembali ke halaman utama
        return redirect('/')->with('success', 'Email sent successfully!');
    }
}
