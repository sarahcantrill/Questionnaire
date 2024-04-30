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
      <h1>Responses for Questionnaire : {{ $id ?? '' }}</h1>

          @foreach( $responses as $response)
                <a href="{{ route('questions', ['id' => $questionnaire->id]) }}">
                <p> ID:{{ $question->id }}</p>
                <p>{{ $responses->{'response-text'} }}</p>
                
            @endforeach

            

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>