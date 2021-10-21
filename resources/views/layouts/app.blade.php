<html>

<head>
    <title>Mike. The Engineer. - @yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
    <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        <menu class="main-menu">
            <li><a href="/">About</a></li>
            <li><a href="/references">References</a></li>
            <li><a href="/career">Career</a></li>
            <li><a href="/contacts">Contacts</a></li>
        </menu>
        @yield('content')
    </div>
    <div class="text-center footer">

        <i>&copy; Mike. The Engineer.</i>

    </div>
</body>

</html>
