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
                {!! Form::label('question1', 'Question 1:') !!}
                {!! Form::text('question1', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question2', 'Question 2:') !!}
                {!! Form::text('question2', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question3', 'Question 3:') !!}
                {!! Form::text('question3', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question4', 'Question 4:') !!}
                {!! Form::text('question4', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('question5', 'Question 5:') !!}
                {!! Form::text('question5', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('stars', 'Star rating:') !!}
                {!! Form::select('stars', array('1' => '*', '2' => '**', '3' => '***', '4' => '****', '5' => '*****'), null,['placeholder' => 'Select...']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Questionnaire', ['class' => 'btn btn-primary form-control']) !!}
            </div

          {!! Form::close() !!}


      </article>
    <!--  
  </div><close container -->

  </body>
  </html>