<h5 class="navbar-brand font-weight-bold m-0 mt-4 text-center">E-learning</h5><br>
<small class="text-capitalize text-center"><?= session('user.role') ?></small>
<br>
<br>

<ul class="nav flex-column text-white">
    <li class="nav-item">
        <a class="nav-link p-1" href="#">Dashboard</a>
        <hr>
    </li>
    <li class="nav-item">
        <a class="nav-link p-1" href="#">Data Siswa</a>
        <hr>
    </li>
    <li class="nav-item">
        <a class="nav-link p-1" href="#">Data Guru</a>
        <hr>
    </li>
    <li class="nav-item">
        <a class="nav-link p-1" href="#">Data Nilai</a>
        <hr>
    </li>
    <li class="nav-item">
        <a class="nav-link p-1" href="<?= site_url('all-data') ?>">All Data</a>
        <hr>
    </li>
</ul>