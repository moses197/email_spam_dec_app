<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $spamWords = [
        'free', 'win', 'winner', 'cash', 'prize', // Add your spam words here
    ];

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'recipient_email' => 'required|email',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Find the user by email
        $recipient = User::where('email', $validated['recipient_email'])->first();

        // Check if the recipient exists
        if (!$recipient) {
            return redirect()->back()->withErrors(['recipient_email' => 'Recipient not found']);
        }

        $sender = auth()->user();

        // Determine if the message is spam
        $type = $this->isSpam($validated['subject'], $validated['body']) ? 'spam' : 'sent';

        // Create the message with the recipient's user ID and type
        Message::create([
            'sender_id' => $sender->id,
            'recipient_id' => $recipient->id,
            'recipient_email' => $validated['recipient_email'],
            'subject' => $validated['subject'],
            'body' => $validated['body'],
            'type' => $type,
        ]);

        return redirect()->route('index')->with('success', 'Message sent successfully');
    }

    private function isSpam($subject, $body)
    {
        foreach ($this->spamWords as $spamWord) {
            if (stripos($subject, $spamWord) !== false || stripos($body, $spamWord) !== false) {
                return true;
            }
        }
        return false;
    }
}
