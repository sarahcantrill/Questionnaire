<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select a Questionnaire</title>
    <!-- <link rel="stylesheet" href="/css/app.css" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
      <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
            }

            .row {
                margin-bottom: 50px;
            }

            

            .home-btn {
                margin-left: 0px;
                color: black;
                text-transform: uppercase;
                border: 1px black;
                padding-top: 10px;
                padding-left: 10px;
            }

            .question-box {
                
                margin-left: 30%;
                color: black;
                margin-right: 10px;
                margin-bottom: 20px;
                padding: 20px; /* Add padding around the ID */
                border: 1px solid #ccc; /* Add border around the ID */
                border-radius: 4px; /* Optional: Add rounded corners */
                background-color: lightgray;
                width: 500px;
            }

            .title{
                text-align: center;
            }

            .btn-primary {
                padding: 15px 30px; /* Increase padding for larger size */
                font-size: 18px; /* Increase font size */
                color: black;
                border-radius: 6px;
                margin-bottom: 100px;
                margin-top: 30px;
                margin-left: 45%;
            }
      </style>
</head>
<body>
<div class="container">
      <header class="home-btn">
      <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
      </header>

      <div class='title'>
      <h1>Answer the Questionnaire!</h1>
    </div>


    <article class="row">
        
        <form method="POST" action="{{ route('responses.store') }}">
            @csrf
            @foreach($questions as $question)
            <div class="question-box">
                <p>{{ $question->id }}.</p>
                <p>{{ $question->{'question-text'} }}</p> <!-- Assuming the property is question_text and not {'question-text'} -->
 
                @if($question->question_type === 'text')
                    <input type="text" name="answers[{{ $question->id }}]" class="question-input" placeholder="Your answer here...">
                @elseif($question->question_type === 'checkbox')
                    <input type="checkbox" name="answers[{{ $question->id }}][]" value="option1"> Yes<br>
                    <input type="checkbox" name="answers[{{ $question->id }}][]" value="option2"> No<br>
                @elseif($question->question_type === 'dropdown')
                    <select name="answers[{{ $question->id }}]" class="question-input">
                        @for ($i = 1; $i <= 15; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                @elseif($question->question_type === 'likert')
                <label><input type="radio" name="answers[{{ $question->id }}]" value="strongly_agree"> Very Good</label><br>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="agree"> Good</label><br>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="neutral"> Neutral</label><br>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="disagree"> Bad</label><br>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="strongly_disagree"> Very Bad</label><br>
                @endif
                <br>
                </div>
            @endforeach
 
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </form>
    </article>
</div>
</body>
</html>