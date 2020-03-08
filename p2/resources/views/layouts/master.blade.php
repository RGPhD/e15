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
        <h1>E-15: P2 App - Beyond BMI</h1>

    </header>

    <section>
        @yield('content')
    </section>

    <footer>
    <br>
      <strong><a href="https://hesweb.dev/e15" target="_blank" title="Click to visit Harvard University Extension School: CSCI E-15 Web Server Frameworks with Laravel/PHP">Harvard University Extension: E-15 Web Server Frameworks with Laravel/PHP &copy; {{ date('Y') }}
        </a></strong>
      <br>

    </footer>
    <br>
</body>

</html>