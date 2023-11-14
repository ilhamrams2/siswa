<?php
$session = session();
$guru = session('guru');
$admin = session('user');
?>
<div class="col-12 py-3 text-white">
    <a class="ml-auto font-weight-bold text-white" style="font-size: 12px;" href="/logout">
        E-Learning
    </a>
</div>
<div class="col-12 bg-w py-4">
    <h6 class="m-0 mb-2 font-weight-bold">
        <?= session('user.nama_depan') ?> <?= session('user.nama_belakang') ?? session('guru.nama_depan') . ' ' . session('guru.nama_belakang') ?>
    </h6>
    <small class="text-capitalize" style="color: #ffffff80;"><?= session('user.role') ?? ' Guru ' ?></small>
</div>
<div class="col-12">
    <small style="font-size: 9px;color: #ffffff80;">Menu</small>
    <?php if (!$guru) : ?>
        <ul class="nav flex-column text-white">
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/dashboard') ?>">Dashboard</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/siswaPage') ?>">Data Siswa</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/guruPage') ?>">Data Guru</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/nilaiPage') ?>">Data Nilai</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/kegiatanPage') ?>">Data Kegiatan</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('all-data') ?>">All Data</a>
            </li>
        </ul>
    <?php else : ?>
        <ul class="nav flex-column text-white">
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/dashboard') ?>">Dashboard</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/nilaiPage') ?>">Data Nilai</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/kegiatanPage') ?>">Data Kegiatan</a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link p-1" href="<?= site_url('/guruPage') ?>">Profile</a>
            </li>
        </ul>
    <?php endif ?>
</div>