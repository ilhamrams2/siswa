<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || <?= session('user.role') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        label {
            font-size: 12px;
        }

        .input {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 12px;
            width: 100%;
        }

        .content {
            min-height: 100vh;
        }

        .content .nav-link {
            font-size: 12px !important;
            color: white;
        }

        table tr {
            font-size: 14px !important;
        }

        table td {
            font-size: 12px !important;
        }

        .table-data {
            overflow-x: auto !important;
            max-height: 500px !important;
        }

        .table-responsive {
            max-height: 250px !important;
            overflow-x: auto !important;
        }
    </style>
</head>

<body style="background-color: #f1f1f1 !important;">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-lg-2 col-sm-2 bg-dark shadow-sm text-white">
                 
            <?= $this->include('backend\partials\navbar') ?>

            </div>

            <hr>

            <div class="col-lg-10 col-sm-10 main-content p-0">
                <div class="col-12 bg-white shadow-sm">
                    <br>
                    <br>
                </div>
                <div class="container">

                    <?php

                        $this->renderSection('content');

                    ?>

                </div>

            </div>

        </div>
    </div>


</body>

</html>