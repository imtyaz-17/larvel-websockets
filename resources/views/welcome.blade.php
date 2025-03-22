<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <h3>Trade: <span id="trade-data"></span></h3>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        console.log('sockets initialized');

        // Enable Pusher logging for debugging
        Pusher.logToConsole = true;

        Echo.channel('trades').listen('.NewTrade', (data) => {
            console.log('NewTrade event received:', data);
        });

    </script>
    </body>

</html>
