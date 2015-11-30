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
                
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Akademik <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/ta">Tahun Ajaran</a></li>
                        <li><a href="/tingkat">Tingkat</a></li>
                        <li><a href="/kelas">Kelas</a></li>
                        <li><a href="/mapel">Mata Pelajaran</a></li>
                        <li><a href="/jenisUjian">Jenis Ujian</a></li>
                        <li><a href="/jadwalPelajaran">Jadwal Pelajaran</a></li>
                        <li><a href="/jadwalUjian">Jadwal Ujian</a></li>
                        <li><a href="/kalenderAkademik">Kalander Akademik</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Kesiswaan <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/siswa">Buku Induk Siswa</a></li>
                        <li><a href="/psb">Pendaftaran Online</a></li>
                        <li><a href="/nilai">Nilai</a></li>
                        <li><a href="/absensi">Absensi</a></li>
                        <li><a href="/pelanggaran">Pelanggaran</a></li>
                        <li><a href="/prestasi">Prestasi</a></li>
                        <li><a href="/beasiswa">Beasiswa</a></li>
                        <li><a href="/wali">Orang Tua/Wali</a></li>
                        <li><a href="/siswa/rekap">Rekapitulasi</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Kepegawaian <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/bagian">Bagian</a></li>
                        <li><a href="/jabatan">Jabatan</a></li>
                        <li><a href="/karyawan">Guru & Karyawan</a></li>
                        <li><a href="/absensi">Absensi</a></li>
                        <li><a href="/karyawan/rekap">Rekapitulasi</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Keuangan <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/tagihan">Tagihan</a></li>
                        <li><a href="/tagihan/rekap">Rekapitulasi</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Invetaris <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/jenisInventaris">Jenis</a></li>
                        <li><a href="/invTanah">Tanah</a></li>
                        <li><a href="/invBangunan">Bangunan/Gedung</a></li>
                        <!-- TODO : GET FROM DB -->
                        <li><a href="/invBarang?jenis=PM">Peralatan Mesin</a></li>
                        <li><a href="/invBarang?jenis=PM">Jalan - Irigasi - Jaringan</a></li>
                        <li><a href="/invBarang?jenis=PM">Ruangan</a></li>
                        <li><a href="/invBarang?jenis=PM">Barang</a></li>
                        <li><a href="/invBarang?jenis=PM">Asset Tetap Lainnya (BUKU)</a></li>
                        <li><a href="/invBarang?jenis=PM">ATK</a></li>
                        <li><a href="/invBarang?jenis=PM">Habis Pakai</a></li>
                        <li><a href="/invBarang?jenis=PM">Penggunaan Inventaris</a></li>
                        <li><a href="/invBarang?jenis=PM">Rekapitulasi</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Perpustakaan <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/rak">Rak</a></li>
                        <li><a href="/kategoriBuku">Kategori Buku</a></li>
                        <li><a href="/tagsBuku">Tags Buku</a></li>
                        <li><a href="/buku">Management Buku</a></li>
                        <li><a href="/kunjunganPerpus">Kunjungan</a></li>
                        <li><a href="/peminjamanBuku">Peminjaman</a></li>
                        <li><a href="/kunjunganPerpus">Rekapitulasi Kunjungan</a></li>
                        <li><a href="/peminjamanBuku">Rekapitulasi Peminjaman</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">KBM <strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="/kbmBab">Bab</a></li>
                        <li><a href="/kbmSubBab">Sub Bab</a></li>
                        <li><a href="/modulBelajar">Modul Pembelajaran</a></li>
                        <li><a href="/forum">Forum</a></li>
                        <li><a href="/kuis">Kuis Online</a></li>
                        <li><a href="/tugas">Tugas Online</a></li>
                        <li><a href="/ulangan">Ulangan Online</a></li>
                        <li><a href="/ujian">Ujian Online</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/user/{{ Auth::user()->id }}"><span class="fa fa-user"></span></a></li>
                <li><a href="/auth/logout"><span class="fa fa-sign-out"></span></a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>