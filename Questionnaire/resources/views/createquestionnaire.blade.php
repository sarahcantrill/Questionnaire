<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Researcher - create question</title>
      <!-- <link rel="stylesheet" href="/css/app.css" /> -->
  </head>
  <body>
  <div class="container">
      <header class="row">
         <!-- <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                  <ul class="nav navbar-nav">
                      <a class="navbar-brand" href="#">Admin</a>
                      <li class="active"><a href="/">skills</a></li>
                  </ul>
              </div>
          </nav>-->
      </header>
      <article class="row">
          <h1>Create a new questionnaire:</h1>



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

            <div class="form-group">
                {!! Form::submit('Add Questionnaire !', ['class' => 'btn btn-primary form-control']) !!}
            </div

          {!! Form::close() !!}


      </article>
    <!--  
  </div><close container -->

  </body>
  </html>