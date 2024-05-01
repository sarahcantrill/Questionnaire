<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Select a Questionnaire !</title>
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

            .p-inline {
                display: inline-block;
                margin-right: 10px;
                padding: 20px;
            }

            .home-btn {
                margin-left: 0px;
                color: black;
                text-transform: uppercase;
                border: 1px black;
            }

            .row {
                
                text-align: center;
            }

            .title{
                text-align: center;
            }

            .p-inline {
            display: inline-block;
            color: black;
            margin-right: 10px;
            padding: 20px; /* Add padding around the ID */
            border: 1px solid #ccc; /* Add border around the ID */
            border-radius: 4px; /* Optional: Add rounded corners */
            background-color: lightgray;
        }


      </style>
  </head>
  <body>
  <div class="container">
      <header class="home-btn">
      <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
      </header>
            <div class="title">
            <h1>Select a Questionnaire:</h1>
            </div>


      <article class="row">

            @foreach($questionnaires as $questionnaire)
                <section class="box">
                <a href="{{ route('questions', ['id' => $questionnaire->id]) }}">
                <p class="p-inline">{{ $questionnaire->id }} </p> 
                <p class="p-inline"> {{ $questionnaire->title }}</p>
                <br>
                </a>
                </section>
                
                
            @endforeach

      </article>
   

  </body>
  </html>