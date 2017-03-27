<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="" rel="stylesheet" type="text/css">

        <style>
            input[type="file"]{
                margin-left : auto;
            }
        </style>
    </head>
    <body class="gray-bg">
        <div class="middle-box text-center loginscreen">
    	@yield('body')
        </div>
    </body>
</html>
