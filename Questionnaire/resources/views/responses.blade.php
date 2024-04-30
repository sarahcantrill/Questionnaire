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
          <h1>Responses:</h1>
          
 
            @foreach( $responses->unique('question_id')  as $response)
                <a href="{{ route('responses.show', ['id' => $response->question->id]) }}">
                <p>ID: {{ $response->question->id }}</p>
                <p>{{ $response->question->question_text }}</p>

            @endforeach

            

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>