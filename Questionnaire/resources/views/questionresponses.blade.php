<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Responses for Question ID: {{ $id }}</title>
    <!-- <link rel="stylesheet" href="/css/app.css" /> -->
</head>
<body>
<div class="container">
    <header class="row">
    </header>
    <article class="row">
        <h1>Responses for Question ID: {{ $id }}</h1>

        @foreach($responses as $response)
            <p>Response: {{ $response->{'response-text'} }}</p>
            <!-- Add more fields as needed -->
        @endforeach

    </article>
</div>
</body>
</html>