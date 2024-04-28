<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectQuestionnaire extends Model {
    
    protected $fillable = [
        'questionnaire_name', 'questionnaire_description', 'questionnaire_difficulty'
    ];

    public function selectquestionnaires() {
        return $this->belongsToMany('App/Select');
    }
}