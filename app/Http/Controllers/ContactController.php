<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        Message::where('status', 'unseen')->update(['status' => 'seen']);

        $unreadCount = Message::where('status', '!=', 'read')->count();

        return view('admin.messages', compact('messages', 'unreadCount'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);

        $message->update(['status' => 'read']);

        return view('admin.message-view', compact('message'));
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20', // Validate phone number
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the message to the database
        $message = Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'], // Save phone number
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'status' => 'unseen',
        ]);

        // Prepare email data
        $emailData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'], // Include phone number
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'siteName' => 'Multi Fish Lanka',
        ];

        // Send email to the site owner
        \Mail::to('hasinthalahiru331@gmail.com')->send(new \App\Mail\Emailer($emailData, true));

        // Send email to the customer
        \Mail::to($validated['email'])->send(new \App\Mail\Emailer($emailData, false));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

}
