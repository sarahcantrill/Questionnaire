<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Researcher - create question</title>
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

            .form-group{
                margin-bottom: 50px;
                margin-left: 30%;
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
      </style>
  </head>
  <body>
  <div class="container">
      <header class="home-btn">
          <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
      </header>

      <div class='title'>
      <h1>Create a new questionnaire:</h1>
    </div>

      <article class="row">
          



          <!-- form goes here -->
          {!! Form::open() !!}

            <div class="form-group">
                {!! Form::label('question1', 'Question 1:') !!} <br>
                {!! Form::text('question1', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question2', 'Question 2:') !!}<br>
                {!! Form::text('question2', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question3', 'Question 3:') !!}<br>
                {!! Form::text('question3', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question4', 'Question 4:') !!}<br>
                {!! Form::text('question4', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question5', 'Question 5:') !!}<br>
                {!! Form::text('question5', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('rating', 'Difficulty Rating:') !!}
                {!! Form::select('stars', array('1' => 'Very Easy', '2' => 'Easy', '3' => 'Neutral', '4' => 'Difficult', '5' => 'Very Difficult'), null,['placeholder' => 'Select...']) !!}
            </div>

            <div class="btn-primary">
                {!! Form::submit('Add Questionnaire !', ['class' => 'btn btn-primary form-control']) !!}
            </div>

          {!! Form::close() !!}


      </article>
    <!--  
  </div><close container -->

  </body>
  </html>