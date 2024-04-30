<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;


class ResponseController extends Controller
{   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // pass in list of all questionnaires
        return view('responses');
    }



    public function store(Request $request)
    {
        foreach ($request->responses as $question_id => $responses) {
            // Create a new response instance
            $responses = new Response();
            $responses->question_id = $question_id;
            $responses->answer = $answer;
            $responses->save();
        }

        return redirect()->back()->with('Questionnaire submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                // get all the responses 
                //$selectresponses = Response::all(); // where id = the questionnaire id
                // Retrieve all responses for the specified questionnaire ID
                $responses = Response::where('questionnaire_id', $id)->get();

                // Pass responses to the view along with the questionnaire ID
                return view('questionnaireresponses', compact('id'));


             //   return view('questionnaireresponses');//, ['questionnaires' => $questionnaires]);
    }

}
