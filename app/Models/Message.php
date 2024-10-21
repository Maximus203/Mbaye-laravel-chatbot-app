<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables.
     *
     * @var array
     */
    protected $fillable = ['content', 'sender', 'user_id', 'conversation_id'];


    /**
     * Obtenir la conversation associée à un message.
     */
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    /**
     * Obtenir l'utilisateur associé à un message.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
