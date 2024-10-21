<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotResponse extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables.
     *
     * @var array
     */
    protected $fillable = ['trigger_keyword', 'response_text'];


    /**
     * Obtenir la conversation associée à la réponse du bot.
     */
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
