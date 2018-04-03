<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CdnJS</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
      <div class="container">

        <div class="row">
          <div class="col-md-6" style="margin-top: 30%">
            <a class="btn btn-primary btn-lg" href="{{ route('search.quick') }}">Quick Search</a>
          </div>

          <div class="col-md-6" style="margin-top: 30%">
            <button class="btn btn-primary btn-lg" href="#">Advanced Search</button>
          </div>

        </div>
      </div>
    </body>
</html>
