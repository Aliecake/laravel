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