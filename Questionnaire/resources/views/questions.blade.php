<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select a Questionnaire</title>
    <!-- <link rel="stylesheet" href="/css/app.css" /> -->
</head>
<body>
<div class="container">
    <header class="row">
    </header>
    <article class="row">
        <h1>Answer the Questionnaire!</h1>
        <form method="POST" action="{{ route('responses.store') }}">
            @csrf
            @foreach($questions as $question)
                <p>{{ $question->id }}</p>
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
            @endforeach
 
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </form>
    </article>
</div>
</body>
</html>