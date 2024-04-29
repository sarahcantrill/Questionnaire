<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['text', 'questionnaire_id'];

    public function questionnaire() {
        return $this->belongsTo(Questionnaire::class);
    }
}
