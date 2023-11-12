<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logins</title>

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
    </style>
</head>

<body style="background-color: #f1f1f1 !important;">

    <div class="container">
        <div class="row" style="min-height: 100vh;">

            <div class="col-lg-10 col-10 my-auto mx-auto p-5 shadow-lg" style="background-color: white; border-radius:10px;">
                <div class="row my-auto">
                    <div class="col-lg-6 my-auto text-center d-none d-lg-flex">
                        
                    </div>
                    <div class="col-lg-5 col-12 mx-auto my-auto py-5 text-center">
                    <h5 class="font-weight-bold pb-4">Selamat Datang</h5>
                        <form method="post" action="<?= site_url('login') ?>">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            <br>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <br>
                            <input class="input" type="submit" value="Masuk">
                        </form>
                    </div>
                </div>
            </div>

            <?php if (isset($error)) : ?>
                <div class="alert alert-danger alert-dismissible fade show position-fixed" style="bottom: 20px; right:0px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> <?php echo $error; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>

</body>

</html>