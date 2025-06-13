<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('adriannicholaslumowa@gmail.com')
                ->subject('New Contact Message from ' . $data['name'])
                ->replyTo($data['email']);
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
