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
          <h1>Create a new questionnaire:</h1>



          <!-- form goes here -->
          @section('content')
                <h1>Welcome to Select Questionnaires</h1>

                @if ($questionnaires->isEmpty())
                    <p>No select questionnaires found.</p>
                @else
                    <ul>
                       <!-- @foreach ($questionnaires as $questionnaire)
                            <li>
                                <a href="{{ route('select.questionnaires.show', $questionnaire->id) }}">
                                    {{ $questionnaire->title }}
                                </a>
                                <form action="{{ route('select.questionnaires.take', $questionnaire->id) }}" method="POST">
                                    @csrf
                                    <button type="submit">Take Questionnaire</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endsection-->
            @foreach($questionnaires as $questionnaire)
                <div>
                    <h3>{{ $questionnaire->title }}</h3>
                    <p>{{ $questionnaire->description }}</p>
                    <a href="{{ route('questionnaires.show', ['questionnaire' => $questionnaire->id]) }}">Select Questionnaire</a>
                </div>
            @endforeach

      </article>
    <!--  
  </div><close container -->

  </body>
  </html>