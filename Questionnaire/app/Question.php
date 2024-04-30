<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question-text'];

    public function questionnaire() {
        return $this->belongsTo(Questionnaire::class, 'questionnaire_id');
    }
}
