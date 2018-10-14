<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">

    <title>Quan - @yield('title', 'Home')</title>
  </head>
  <body>
      <div class="container-fluid bg-primary text-white">
        <div class="row wrap p-2">
            <div class="col-sm-12">
            <h3>Quan</h3>
            </div>
                     <div class="col-sm-12 text-match-bg">
            Ask questions and get answers!
             </div>
        </div>
      </div>
      <div class="container-fluid bg-primary">
        <div class="row bg-nav wrap p-2">
            <div class="col-sm">
                <nav>
                    <a href="/">home</a>
                <a href="{{ route('question.create') }}">ask</a>
                    <a href="#">categories</a>
                </nav>
            </div>
            <div class="col-sm text-sm-right">
                             <nav>
                                 @auth 
                    <a href="#">account ({{ auth()->user()->name }})</a>
                             <a href="{{ route('auth.sign_out') }}">sign out</a>
                    @endauth

                    @guest 
                        <a href="/sign-in">sign in</a>
                        <a href="/sign-up">sign up</a>
                    @endguest
                </nav>
            </div>
        </div>
      </div>
      <div class="container bg-white rounded shadow-sm site-container">
          <div class="row">
            <div class="col-sm-12">
                @include('partials.messages')
                @include('partials.errors')
            </div>
          </div>
          <div class="row">
              <div class="col-sm-8 p-4">
                @yield('main_content')
              </div>
              <div class="col-sm-4 p-3">

              </div>
          </div>
      </div>
      <footer class="container mt-2">
        <div class="row">
            <div class="col-sm-12 small text-muted">
                Powered by Quan (&copy;) 2018 | Developed by <a href="https://github.com/damianbal">damianbal</a>
            </div>
        </div>
      </footer>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>