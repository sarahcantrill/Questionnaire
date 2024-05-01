<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Select a Questionnaire !</title>
      <!-- <link rel="stylesheet" href="/css/app.css" /> -->
      <style>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
      </style>
  </head>
  <body>
  <div class="container">
      <header class="row">
      <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
      </header>
      <article class="row">
          <h1>Select a Questionnaire:</h1>

            @foreach($questionnaires as $questionnaire)
                <a href="{{ route('questions', ['id' => $questionnaire->id]) }}">
                <p> ID:{{ $questionnaire->id }}</p>
                <p> {{ $questionnaire->title }}</p>
                
            @endforeach

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>