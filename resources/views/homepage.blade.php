<!DOCTYPE html>
<html lang="lv-LV">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet"
          href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased text-white bg-black font-geometria-narrow">
    <div id="app">
        <app></app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
