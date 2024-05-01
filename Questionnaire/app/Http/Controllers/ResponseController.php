<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Response;
use Illuminate\Support\Facades\DB;



class ResponseController extends Controller
{   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {


        // Retrieve all responses using the Response model
        $responses = Response::all();

        // Pass the responses to the view
        return view('responses', compact('responses'));

    }



    public function store(Request $request)
    {
        // Validate and process the form data
        $data = $request->validate([
            'answers' => 'required|array', // Ensure answers is an array
            'answers.*.question_id' => 'required|integer', // Each answer should have a valid question_id (integer)
            'answers.*.response_text' => 'required',  
        ]);

        // Process and store each response
        foreach ($data['answers'] as $questionId => $answer) {
            // Create a new Response model instance
            $response = new Response();
            $response->question_id = $questionId;
            $response->setAttribute('response-text', $answer); // Assuming response_text is the field name
            $response->save();
        }

        // Redirect back with a success message
        return redirect()->route('welcome')->with('success', 'Responses submitted successfully!');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

             //   return view('questionnaireresponses');//, ['questionnaires' => $questionnaires]);
             $responses = Response::where('question_id', $id)->get();

             // Pass responses and question ID to the view
             return view('questionresponses', compact('responses', 'id'));
    }

}
