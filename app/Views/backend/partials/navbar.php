<?php
$session = session();
$guru = session('guru');
$admin = session('user');
?>
<h5 class="navbar-brand font-weight-bold m-0 mt-4 text-center">E-learning</h5><br>
<small class="text-capitalize text-center"><?= session('user.role') ?? session('guru.nama_depan') . session('guru.nama_belakang') ?></small>
<br>
<br>

<?php if (!$guru) : ?>
    <ul class="nav flex-column text-white">
        <li class="nav-item">
            <a class="nav-link p-1" href="#">Dashboard</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/siswaPage') ?>">Data Siswa</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/guruPage') ?>">Data Guru</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/nilaiPage') ?>">Data Nilai</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('all-data') ?>">All Data</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/kegiatanPage') ?>">Kegiatan</a>
        </li>
    </ul>
<?php else : ?>
    <ul class="nav flex-column text-white">
        <li class="nav-item">
            <a class="nav-link p-1" href="#">Dashboard</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/siswaPage') ?>">Data Siswa</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/nilaiPage') ?>">Data Nilai</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1" href="<?= site_url('/kegiatanPage') ?>">Kegiatan</a>
        </li>
    </ul>
<?php endif ?>