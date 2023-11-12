<?= $this->extend('backend/dashboard') ?>

<?= $this->section('content') ?>
<div class="row mt-5 px-5">

    <?php
    // Di halaman tujuan, misalnya di file view
    $session = session();
    $message = $session->getFlashdata('msg');

    if ($message) {
        echo "<script>alert('$message');</script>";
    }
    ?>

    <?php

        include_once(__DIR__ . '/../FormData/kelasData.php');
        include_once(__DIR__ . '/../FormData/jurusanData.php');
        include_once(__DIR__ . '/../FormData/mapelData.php');

    ?>

    
</div>

<?= $this->endSection() ?>

