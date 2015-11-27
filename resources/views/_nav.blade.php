<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">SIDIK Ma'had As Sunnah</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Table Lookup <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/ta">Tahun Ajaran</a></li>
                        <li><a href="/bagian">Bagian</a></li>
                        <li><a href="/tingkat">Tingkat</a></li>
                        <li><a href="/kelas">Kelas</a></li>
                        <li><a href="/mapel">Mata Pelajaran</a></li>
                    </ul>
                </li>

                <li><a href="/siswa">Buku Induk Siswa</a></li>
                <li><a href="/karyawan">Guru & Karyawan</a></li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Invetaris <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/ta">Tanah</a></li>
                        <li><a href="/bagian">Gedung</a></li>
                        <li><a href="/tingkat">Peralatan Mesin</a></li>
                        <li><a href="/kelas">Asset Tetap Lainnya</a></li>
                        <li><a href="/mapel">Jalan - Irigasi - Jaringan</a></li>
                        <li><a href="/mapel">Barang</a></li>
                        <li><a href="/mapel">Ruangan</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/user/{{ Auth::user()->id }}">Profile ({{ Auth::user()->name }})</a></li>
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>