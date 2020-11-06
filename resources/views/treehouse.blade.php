<!doctype html>
<html lang="en">

<!-- START head.blade.php -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel Basics</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
</head>
<!-- END head.blade.php -->

<!-- START body -->
<body style="background-color: #edeff0 !important">

    <!-- START nav.blade.php -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height: 70px !important">
        <a class="navbar-brand" href="#" style="border-right:2px; border-color: white">
            <img src="{{asset('images/logo-icon.png')}}" width="30" height="30" class="d-inline-block" alt="">
            <b>Home</b>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{env('app_url')}}/tracks"><b>Tracks</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{env('app_url')}}/"><b>Library</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{env('app_url')}}/community"><b>Community</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{env('app_url')}}/support"><b>Support</b></a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item">
                    <a class="nav-link" href="#"><b>My Org</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b>Workspaces</b></a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- END nav.blade.php -->

    <!-- START library.blade.php -->
    <main role="main" class="container">
        <!-- @yield('body') -->
    </main>
    <!-- END library.blade.php -->

    <!-- END footer.blade.php -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- END footer.blade.php -->

</body> <!-- END Body -->
</html>
