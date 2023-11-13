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
    $editMode = isset($_GET['edit']) && $_GET['edit'] == 'true';

    // Include the appropriate form data file
    if ($editMode) {
        include_once(__DIR__ . '/../FormData/nilai/nilaiDataEdit.php');
   
    } else {
        include_once(__DIR__ . '/../FormData/nilai/nilaiData.php');
    }

    ?>


</div>

<?= $this->endSection() ?>