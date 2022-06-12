<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet"
          href="{{ mix('css/app.css') }}">
</head>

<body class="text-white bg-black antialiased font-sans">
    <div id="app">
        <app></app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
