<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Sistem Informasi Pendidikan Ma'had As Sunnah Tasikmalaya</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                
                @if (Auth::check())

                <li><a href="/user/{{ Auth::user()->id }}">Profile ({{ Auth::user()->name }})</a></li>
                <li><a href="/auth/logout">Logout</a></li>

                @else

                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>

                @endif

            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>