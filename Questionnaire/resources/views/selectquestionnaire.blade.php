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
          <h1>Select a Questionnaire:</h1>

            @foreach($questionnaires as $questionnaire)
                <p> ID: {{ $questionnaire->id }}</p>
                <p> {{ $questionnaire->title }}</p>
                
            @endforeach

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>