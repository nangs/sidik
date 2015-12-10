<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/psb/">PSB MIAS {{App\Ta::active()->first()->periode}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            
            {!! Form::open(['class' => 'navbar-form navbar-left', 'url' => '/psb/cari', 'method' => 'GET']) !!}
                <div class="form-group">
                    <input type="text" name="nisn" placeholder="Cari NISN" class="form-control" style="width:300px;">
                </div>
                <button type="submit" class="btn btn-success">Cari</button>
            {!! Form::close() !!}

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/psb/step1">Daftar</a></li>
                <li><a href="/psb/syarat">Persyaratan</a></li>
                <li><a href="/psb/jurnal">Jurnal</a></li>
                @if (Auth::check())
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Admin <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/psb/admin">Calon Siswa</a></li>
                        <li><a href="/ta">Tahun Ajaran</a></li>
                        <li><a href="/rekening">Daftar Rekening</a></li>
                    </ul>
                </li>
                <!-- <li><a href="/user/{{ Auth::user()->id }}"><span class="fa fa-user"></span></a></li> -->
                <li><a href="/auth/logout"><span class="fa fa-sign-out"></span></a></li>
                @endif
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>