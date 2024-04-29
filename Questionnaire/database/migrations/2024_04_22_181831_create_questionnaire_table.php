<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('questionnaire', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('questionnaire_id'); // Foreign key to relate to questionnaires table
                $table->string('text');
                $table->timestamps();
    
                $table->foreign('questionnaire_id')->references('id')->on('questionnaires')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaire');
    }
}
