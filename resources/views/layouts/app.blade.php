<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body {background-color:#e6ebef;}
        </style>
        
        <title>ATG Internship</title>
    </head>
    <body background="images.jpg">
        <div class="container">
            @yield('content')
            @include('inc.messages')
            <br/>
            <footer>
                <p>Posted by: Devdatta Pande</p>
                <p>Contact information: <a href="dmpande99@gmail.com">
                dmpande99@gmail.com</a>.</p>
            </footer>
        </div>
    </body>
</html>