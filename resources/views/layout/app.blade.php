<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('test.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="head">
            <h1>Gestionnaire clients - factures</h1>
        </div>
    </header>
    <body>
        @yield('content')
    </body>
</body>
</html>
