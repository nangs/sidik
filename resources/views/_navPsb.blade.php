<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">PSB MIAS {{App\Ta::active()->first()->periode}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <li><a href="/home"><span class="fa fa-home"></span> Beranda</a></li>
                @if (Auth::check())

                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li><a href="/psb/daftar"><span class="fa fa-user-plus"></span> Daftarkan Calon Siswa Baru</a></li>
                <li><a href="/psb/admin">Calon Santri</a></li>
                    @if (Auth::user()->role == 'admin')
                        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Admin <strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li><a href="/tahun-ajaran">Tahun Ajaran</a></li>
                                <li><a href="/rekening">Daftar Rekening</a></li>
                                <li><a href="/form-wawancara-calon-santri">Form Wawancara Calon Santri</a></li>
                                <li><a href="/form-wawancara-orangtua">Form Wawancara Orang Tua Calon Santri</a></li>
                                <li><a href="/user">User</a></li>
                            </ul>
                        </li>
                    @endif
                <li><a href="/auth/logout"><span class="fa fa-sign-out"></span> Logout - {{Auth::user()->name}} ({{Auth::user()->role}})</a></li>
                @endif

                @if (!Auth::check())

                {!! Form::open(['class' => 'navbar-form navbar-left', 'url' => '/auth/login', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email/Username" class="form-control">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success"><span class="fa fa-sign-in"></span> Login</button>
                {!! Form::close() !!}

                @endif
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
