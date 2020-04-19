<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'Coronavirus Website Resources')</title>
    <meta charset='utf-8'>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='/css/pages/coronavirus.css' rel='stylesheet'>

    @yield('head')
</head>

<body>

    <header>
        <h1>Coronavirus Website Resources</h1>
        <a href='/'><img src='/images/free.cdc.covid19.image.tif' id='image' alt='CDC Covid-19 Image'></a>

        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/websites'>All Websites</a></li>
                <li><a href='/review'>Review Websites</a></li>
                <li><a href='/contact'>Contact</a></li>
            <!--'/contact' not showing up as a link on welcome page-->
            </ul>
        </nav>
    </header>

    <section id='main'>
        @yield('content')
    </section>

    <br>
    <footer>
        &copy;Coronavirus Website Resources
        
    </footer>

</body>

</html>