<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || <?= session('user.role') ?? 'Guru' ?></title>
    <!-- Memuat jQuery dan Bootstrap dari CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

    <!-- ... -->

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <!-- Load jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Load Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

    <!-- Load Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Load DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Roboto+Condensed&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
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

        .table-all {
            max-height: 250px !important;
            overflow-x: auto !important;
        }

        .siswa-table {
            max-height: 400px !important;
            overflow-x: auto !important;
        }
    </style>
</head>

<body style="background-color: #f1f1f1 !important;">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-lg-2 p-0 col-sm-2 bg-dark shadow-sm text-white">

                <?= $this->include('backend\partials\navbar') ?>

            </div>

            <hr>

            <div class="col-lg-10 col-sm-10 main-content p-0">
                <div class="col-12 bg-white shadow-sm d-flex align-items-right  py-3">
                    <a class="ml-auto font-weight-bold" style="font-size: 12px; color:#42424280;" href="/logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
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