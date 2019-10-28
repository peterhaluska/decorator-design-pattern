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
                        Our application is currently displaying the Post with ID #333. Our PostRepository implementation is not connected to any DB, it is using a predefined PostCollection
                        (populated in the AppServiceProvider) as it's source data.
                    </p>
                    <p>
                        The application is using a dummy CachePool, where we can cache items (through a unique key) and retrieve them from cache (by their unique key). As our aim is
                        not to implement a bulletproof caching mechanism, we won't deal with expiration dates in our CachePool.
                    </p>
                    <p>
                        The CachePool is already prepared for us with an already cached item, under key <strong>"posts.333"</strong>.
                    </p>

                    <h3>
                        The Task
                    </h3>
                    <p>
                        We need to decorate our PostRepository, so it will also be using the CachePool when retrieving data. We should first check whether the Post exists in our
                        CachePool, and if not add it to the CachePool and return the Post afterwards.
                    </p>
                    <p>
                        After successfully implementing the Decorator pattern, the title of the Post should change to <br>
                        <strong>"POST IS CACHED: We will be decorating..."</strong>.
                    </p>
                    <p>
                        Laravel's Service Container already has some predefined interface for dealing with Decorators:
                        <a href="https://laravel.com/docs/6.x/container#extending-bindings" target="_blank">
                            https://laravel.com/docs/6.x/container#extending-bindings
                        </a>
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
