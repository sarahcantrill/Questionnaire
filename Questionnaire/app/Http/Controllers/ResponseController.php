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

        //$responses = DB::table('responses')->get();
        // pass in list of all questionnaires
        //return view('responses', ['responses' => $responses]);

        // Retrieve all responses using the Response model
        $responses = Response::all();

        // Pass the responses to the view
        return view('responses', compact('responses'));

    }



    public function store(Request $request)
    {
        // Validate and process the form data
        $data = $request->validate([
            'answers' => 'required|array',
            // Add specific validation rules based on your form fields
        ]);

        // Process and store each response
        foreach ($data['answers'] as $questionId => $answer) {
            // Create a new Response model instance
            $response = new Response();
            $response->question_id = $questionId;
            $response->response_text = $answer; // Assuming response_text is the field name
            $response->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('Responses submitted successfully!');
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
                //$responses = Response::where('questionnaire_id', $id)->get();

                // Pass responses to the view along with the questionnaire ID
                //return view('questionnaireresponses', compact('id'));


             //   return view('questionnaireresponses');//, ['questionnaires' => $questionnaires]);
             $responses = Response::where('question_id', $id)->get();

             // Pass responses and question ID to the view
             return view('questionresponses', compact('responses', 'id'));
    }

}
