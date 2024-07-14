<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id', 'recipient_id', 'subject', 'recipient_email', 'body', 'type', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function recipient() 
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
