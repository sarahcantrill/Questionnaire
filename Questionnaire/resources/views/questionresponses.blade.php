<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Responses for Question ID: {{ $id }}</title>
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
                width: 100px;
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

            .row {
                margin-left: 42%;
                color: black;
                padding-left: 100px;
                padding: 20px; /* Add padding around the ID */
                border: 1px solid #ccc; /* Add border around the ID */
                border-radius: 4px; /* Optional: Add rounded corners */
                background-color: lightgray;
                width: 200px;
            }
      </style>
</head>
<body>
<div class="container">
<header class="home-btn">
      <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
      </header>
    <div class="title">
            <h1>Responses for Question ID {{ $id }}:</h1>
        </div>

    <article class="row">
        

        @foreach($responses as $response)
            <p>Response: {{ $response->{'response-text'} }}</p>
            <p>{{ $response->question_type }}</p>
        @endforeach

    </article>
</div>
</body>
</html>