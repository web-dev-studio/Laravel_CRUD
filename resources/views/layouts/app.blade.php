<html>

<head>
    <title>Mike Gordievsky - @yield('title')</title>

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
        body {
            background-color:  #EDF7EF
        }
    </style>

</head>

<body>
    @section('sidebar')

    @show
    <menu class="main-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Career</a></li>
        <li><a href="/contacts">Contacts</a></li>
    </menu>
    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <i>&copy; Mike Gordievsky</i>

    </div>
</body>

</html>
