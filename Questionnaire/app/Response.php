<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['question_id', 'response_text', 'response'];
    
    // Define the relationship to the Question model
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
