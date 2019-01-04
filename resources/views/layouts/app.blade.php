<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cyber Security Resource Center</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <!-- Fonts -->   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
    </head>
    <body>
            <div id="main" class="main_section">
            @include('inc.navbar')
          
            @yield('content')
            </div>


    </body>
</html>