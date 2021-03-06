<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'Coronavirus Websites')</title>
    <meta charset='utf-8'>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='/css/pages/coronavirus.css' rel='stylesheet'>

    @yield('head')
</head>

<body>

@if(session('flash-alert'))
    <div class='flash-alert'>
         {{ session('flash-alert') }}
    </div>
@endif

    <header>
        <h1>Coronavirus Websites</h1>
        <a href='/'><img src='/images/free.cdc.covid19.jpg' class='image' alt='CDC Covid-19 Image'></a> <!--changed from id so I can use it more than once-->
        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/websites'>All Websites</a></li>
                <li><a href='/contact'>Contact Us</a></li>

                @if(Auth::user())
                <li><a href='/review-websites'>Review Websites</a></li>
                @endif
        
                <li>
            @if(!Auth::user())
                <a href='/login' dusk='login'>Member Login</a>
            @else
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
            @endif
               </li>
            </ul>
        </nav>
    </header>

    <section id='main'>
        @yield('content')
    </section>

    <footer>
      
      <strong><a href="https://hesweb.dev/e15" target="_blank" title="Click to visit Harvard University Extension School: CSCI E-15 Web Server Frameworks with Laravel/PHP">Harvard University Extension: E-15 Web Server Frameworks with Laravel/PHP
        </a></strong>
      <br>
      &copy;Coronavirus Websites {{ date('Y') }}
    </footer>

</body>

</html>