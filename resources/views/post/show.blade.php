<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Decorator Pattern - Workshop</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="position-ref full-height">
        <div class="">
            <h2>
                {{ $title }}
            </h2>
            {!! $body !!}
        </div>
        <div class="form-wrapper">
            <a href="/">
                &laquo; Go back
            </a>
        </div>
    </div>
</div>
</body>
</html>
