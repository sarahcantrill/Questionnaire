<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
      <title>Select a Questionnaire !</title>
      <!-- <link rel="stylesheet" href="/css/app.css" /> -->
  </head>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
      <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
            }

            .form{
                text-align: center;
                margin-bottom: 50px;
                margin-left: 42%;
                color: black;
                margin-right: 10px;
                margin-bottom: 20px;
                padding: 20px; /* Add padding around the ID */
                border: 1px solid #ccc; /* Add border around the ID */
                border-radius: 4px; /* Optional: Add rounded corners */
                background-color: lightgray;
                width: 200px;
            }

            

            .home-btn {
                margin-left: 0px;
                color: black;
                text-transform: uppercase;
                border: 1px black;
                padding-top: 10px;
                padding-left: 10px;
            }

            

            .title{
                text-align: center;
            }

            .btn-primary {
                padding: 15px 30px; /* Increase padding for larger size */
                font-size: 18px; /* Increase font size */
                color: black;
                border: none;
                border-radius: 6px;
                margin-bottom: 100px;
                margin-top: 30px;
                margin-left: 22%;
            }

            .btn-secondary {
                margin-left: 0px;
                color: black;
                text-transform: uppercase;
                border: 1px black;
                padding-top: 10px;
                padding-left: 10px;
                text-transform: uppercase;
            }
      </style>
  <body>
  <div class="container">
      <header class="row">
      </header>
            <div class="title">
            <h1>Responses:</h1>
        </div>

      <article class="row">
          
 
            @foreach( $responses->unique('question_id')  as $response)
                <div class="form">
                <a href="{{ route('responses.show', ['id' => $response->question->id]) }}">
                <p>ID: {{ $response->question->id }}</p>
                <p>{{ $response->question->question_text }}</p>
                </div>
            @endforeach

            

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>