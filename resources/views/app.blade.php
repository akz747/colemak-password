<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colemak.xyz -- @yield('title')</title>
    {!!Html::style('css/app.css')!!}
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

</body>

{!!Html::script('js/app.js ')!!}
@include('analytics')

</html>
