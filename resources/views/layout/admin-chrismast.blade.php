<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <h1>This is my layout</h1>
        <h2>
            @yield('header')
        </h2>
    </div>
    <div>
        <div><h2>@yield('content')</h2></div>
    </div>
    <div><h2>Footer</h2></div>
    @yield('script')
</body>
</html>