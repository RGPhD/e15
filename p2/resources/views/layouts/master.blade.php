<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'P2')</title>
    <meta charset='utf-8'>

    <link href='/css/p2.css' rel='stylesheet'>

    @yield('head')
</head>

<body>

    <header>
        <a href='/'><img src='/images/hes-logo.png' id='logo' alt='Harvard Extension Logo'></a>
    </header>

    <section>
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

</body>

</html>