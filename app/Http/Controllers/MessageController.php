<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    protected $spamWords = [
        'free', 'win', 'winner', 'cash', 'prize',
    ];

    public function index() 
    {
        $user = Auth::user();
        // dd($user);
        $messages = Message::latest()->where('recipient_id', $user->id)->get();
        // dd($messages);
        return view('index', [
            'messages' => $messages,
        ]);
    }

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

        // Determine if the message is spam or not o
        $type = $this->isSpam($validated['subject'], $validated['body']) ? 'spam' : 'valid';

        // Create the message with the recipient's user ID and type(spam or valid msg)
        Message::create([
            'sender_id' => $sender->id,
            'recipient_id' => $recipient->id,
            'recipient_email' => $validated['recipient_email'],
            'subject' => $validated['subject'],
            'body' => $validated['body'],
            'type' => $type,
        ]);

        // return redirect()->route('index')->with('success', 'Message sent successfully');
        return back();
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

    public function list_email()
    {
        $user = User::get();
        $sender = Auth::user();
        // dd($sender);

        $messages = Message::latest()->where('recipient_id', $user[0]->id)->get();

        // $myMessages = Message::latest()->where('sender_id', $user->id)->get();
        $myMessages = Message::latest()->where('sender_id', $sender->id)->get();
        // dd($messages);

        return view('app-mail', [
            'messages' => $messages,
            'myMessages' => $myMessages,
        ]);
    }
}

