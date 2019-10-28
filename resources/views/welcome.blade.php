<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Decorator Pattern - Workshop</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        <small>
                            The Decorator Pattern - Workshop
                        </small>
                    </div>
                </div>
                <div>
                    <h3>Application</h3>
                    <p>
                        Our application is our application.
                    </p>


                    <h3>
                        The Task
                    </h3>
                    <p>
                        The task it the task.
                    </p>
                    <p>Good luck!</p>
                </div>
                <div>
                    <p class="center">
                        <a class="btn" href="{{ route('post.show', 333) }}">
                            Go to the Application
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
