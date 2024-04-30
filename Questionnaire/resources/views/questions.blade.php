<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Select a Questionnaire !</title>
      <!-- <link rel="stylesheet" href="/css/app.css" /> -->
  </head>
  <body>
  <div class="container">
      <header class="row">
      </header>
      <article class="row">
          <h1>Answer the Questionnaire!</h1>
          <form method="POST" action="{{ route('submit-responses) }}">
            @csrf
            @foreach($questions as $question)


                <p> {{ $question->id }}</p>
                <p>{{ $question->{'question-text'} }}</p>


                @if($question->question_type === 'text')
                        <input type="text" name="answers[{{ $question->id }}]"
                               class="question-input" placeholder="your answer here...">
                    @elseif($question->question_type === 'checkbox')
                        <!-- Example checkbox options (modify as needed) -->
                        <input type="checkbox" name="answers[{{ $question->id }}][]" value="option1"> Yes<br>
                        <input type="checkbox" name="answers[{{ $question->id }}][]" value="option2"> No<br>
                    @elseif($question->question_type === 'dropdown')
                        <!-- Example dropdown of numbers -->
                        <select name="answers[{{ $question->id }}]" class="question-input">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="1">6</option>
                            <option value="2">7</option>
                            <option value="3">8</option>
                            <option value="4">9</option>
                            <option value="5">10</option>
                            <option value="1">11</option>
                            <option value="2">12</option>
                            <option value="3">13</option>
                            <option value="4">14</option>
                            <option value="5">15</option>
                            <!-- Add more options as needed -->
                        </select>
                    @elseif($question->question_type === 'likert')
                        <!-- Example Likert scale (modify as needed) -->
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="strongly_disagree"> Very Good</label><br>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="disagree"> Good</label><br>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="neutral"> Neutral</label><br>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="agree"> Bad</label><br>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="strongly_agree"> Very Bad</label><br>
                    @endif
                
            @endforeach

            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
            </div>

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>