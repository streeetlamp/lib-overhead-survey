<html>

<head>
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//branding.vcu.edu/bar/academic/latest.js"></script>


</head>

<body class="mb-4">
    @section('sidebar')

    @show

    <div class="container-fluid col-xs-12 col-sm-12 col-md-12 mb-3" style="width:1240px;">
        @yield('content')
    </div>
</body>

</html>
