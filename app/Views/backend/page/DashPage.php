<?= $this->extend('backend/dashboard') ?>

<?= $this->section('content') ?>

<div class="row pt-5">

    <div class="col-8 m-auto d-flex justify-content-around align-items-center" style="height: 300px; background-color:white !important; border-radius:10px;">
        <h4 class="m-0 font-weight-bold">Selamat Datang <?= session('user.role') ?? 'Guru' ?></h4><br>
        <i class="m-0 p-0">Web ini sedang dalam masa pengembangan!!!</i>
        
    </div>
</div>

<?= $this->endSection() ?>