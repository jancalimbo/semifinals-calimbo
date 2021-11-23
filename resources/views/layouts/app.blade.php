<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">

    </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">


                <div class="container">
                    <a class="text-warning nav-link h3" href="{{ url('/') }}">Video</a>
                </div>

                <div class="container d-flex align-items-center justify-content-end">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="{{ url('create-video') }}">Add Video</a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ url('video-list-show') }}">Video List</a>
                      </li>


                    </ul>
                </div>

              </nav>


          @yield('content')
    </body>
</html>
