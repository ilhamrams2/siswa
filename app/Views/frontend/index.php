<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-capitalize">Siswa || <?= session('siswa.nama_depan') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</head>

<body style="background-color: #f1f1f1 !important;">
    <div class="wrapper">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark py-2">
            <div class="container d-flex justify-content-between">

                <!-- Brand -->
                <a class="navbar-brand" href="#">E-Learning</a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container m-auto">
            <div class="row px-3">

                <div class="col-lg-4 p-0 content">

                    <div class="col-12 mb-3 article shadow-sm" style="background-color: white; border-radius:10px; padding: 20px 20px !important;">
                        <div class="font-weight-bold">Selamat Datang</div>
                    </div>

                    <div class="col-12 py-3 shadow-sm mt-3 nilai" style="background-color: white; border-radius:10px;">

                        <div class="col-12 p-0 d-flex justify-content-between align-items-center">
                            <div class="name">
                                <h5 class="text-capitalize font-weight-bold m-0" style="font-size: 16px;"><?= $SiswaData['nama_depan'] ?> <?= $SiswaData['nama_belakang'] ?></h5>
                                <h6 class="text-capitalize m-0 mt-2" style="font-size: 10px;">
                                    <?= $SiswaData['kelas'] ?><?= $SiswaData['nama_jurusan'] ?>
                                </h6>
                            </div>
                        </div>

                        <hr>
                        <?php if ($NilaiData) : ?>
                            <?php foreach ($NilaiData as $nilai) : ?>
                                <div class="col-12 p-0 py-2 d-flex justify-content-between align-items-center">
                                    <h6 class="text-capitalize font-weight-bold m-0" style="font-size: 12px;">
                                        <?= $nilai['nama_mapel'] ?>
                                    </h6>
                                    <h6 class="text-capitalize m-0" style="font-size: 12px;">
                                        <?= $nilai['nilai'] ?>
                                    </h6>
                                </div>
                                <hr>
                                <div class="col-12 p-0 py-2 d-flex justify-content-between align-items-center">
                                    <h6 class="text-capitalize font-weight-bold m-0" style="font-size: 12px;">
                                        Rata-rata
                                    </h6>
                                    <h6 class="text-capitalize m-0" style="font-size: 12px;">
                                        <?= number_format($rataRataNilai, 1) ?>
                                    </h6>
                                </div>
                            <?php endforeach ?>
                        <?php else : ?>
                            <div class="col-12 p-0 my-auto">
                               <h6 style="font-size: 12px;">Data Nilai Anda Masih Kosong</h6> 
                            </div>
                        <?php endif ?>

                    </div>

                    <div class="col-12 mt-3 shadow-sm alamat py-3" style="background-color: white; border-radius:10px;">


                        <?php if (!empty($SiswaData['tmpt_lahir'])) : ?>
                            <div  class="col-12 p-0 d-flex justify-content-between align-items-center">
                                <h6 class="text-capitalize m-0 p-0 font-weight-bold">
                                    Biodata Siswa
                                </h6>
                                <center> <button type="button" class="btn btn-outline-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#myModale">
                                        <i class="fas fa-edit mr-2"></i>
                                        <div class="h6 m-0 py-2 text-capitalize" style="font-size: 13px;">Edit Biodata</div>
                                    </button>
                                </center>
                            </div>
                            <hr>
                            <div class="col-12 p-0">
                                <h6 class="text-capitalize font-weight-bold" style="font-size: 12px;">
                                    NIS
                                </h6>
                                <h6 class="text-capitalize" style="font-size: 10px;">
                                    <?= $SiswaData['nis'] ?>
                                </h6>
                            </div>
                            <hr>
                            <div class="col-12 p-0">
                                <h6 class="text-capitalize font-weight-bold" style="font-size: 12px;">
                                    Tempat & Tanggal Lahir
                                </h6>
                                <h6 class="text-capitalize" style="font-size: 10px;">
                                    <?= $SiswaData['tmpt_lahir'] ?> <?= $SiswaData['tgl_lahir'] ?>
                                </h6>
                            </div>
                            <hr>
                            <div class="col-12 p-0">
                                <h6 class="text-capitalize font-weight-bold" style="font-size: 12px;">
                                    Alamat
                                </h6>
                                <h6 class="text-capitalize" style="font-size: 10px;">
                                    <?= $SiswaData['alamat'] ?>
                                </h6>
                            </div>
                            <hr>
                            <div class="col-12 p-0">
                                <h6 class="text-capitalize font-weight-bold" style="font-size: 12px;">
                                    Agama
                                </h6>
                                <h6 class="text-capitalize" style="font-size: 10px;">
                                    <?= $SiswaData['agama'] ?>
                                </h6>
                            </div>
                            <hr>
                            <div class="col-12 p-0">
                                <h6 class="text-capitalize font-weight-bold" style="font-size: 12px;">
                                    Kelas
                                </h6>
                                <h6 class="text-capitalize" style="font-size: 10px;">
                                    <?= $SiswaData['kelas'] ?><?= $SiswaData['nama_jurusan'] ?>
                                </h6>
                            </div>
                        <?php else : ?>
                            <div class="col-12">
                                <h6 class="text-capitalize m-0 p-0">
                                    <button type="button" class="btn btn-outline-primary d-flex justify-content-between align-items-center" style="width: 100% !important;" data-toggle="modal" data-target="#myModal">
                                        <i class="fas fa-edit" style="flex-grow:1;"></i>
                                        <div class="h6 m-0 py-2 text-capitalize" style="font-size: 13px; flex-grow:1;">Silahkan isi biodata terlebih dahulu</div>

                                    </button>
                                </h6>
                            </div>
                        <?php endif; ?>

                    </div>


                </div>


                <!-- Desktop -->
                <div class="col-lg-8 w-kegiatan pt-0 d-none d-lg-flex content">
                    <div class="col-12 px-5 kegiatan" style="border-radius: 10px;">
                        <div class="row">

                            <div class="col-12 mb-3 article shadow-sm">
                                <div class="font-weight-bold">Kegiatan Sekolah</div>
                            </div>

                            <div class="col-12 mb-3 article shadow-sm">
                                <img src="<?= base_url('images/gm.jpg') ?>" alt="" class="img-fluid">
                                <div class="h6 mt-3">Kegiatan Acara Hari Guru</div>
                                <div class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius adipisci modi, repellendus totam aperiam ullam, quas quam ex nulla illum. Quidem esse ea recusandae aut sequi saepe consectetur similique provident sit.
                                </div>
                            </div>

                            <div class="col-12 mb-3 article shadow-sm">
                                <img src="<?= base_url('images/gm.jpg') ?>" alt="" class="img-fluid">
                                <div class="h6 mt-3">Kegiatan Acara Hari Guru</div>
                                <div class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius adipisci modi, repellendus totam aperiam ullam, quas quam ex nulla illum. Quidem esse ea recusandae aut sequi saepe consectetur similique provident sit.
                                </div>
                            </div>

                            <div class="col-12 mb-3 article">
                                <img src="<?= base_url('images/gm.jpg') ?>" alt="" class="img-fluid">
                                <div class="h6 mt-3">Kegiatan Acara Hari Guru</div>
                                <div class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius adipisci modi, repellendus totam aperiam ullam, quas quam ex nulla illum. Quidem esse ea recusandae aut sequi saepe consectetur similique provident sit.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Desktop -->


                <!-- mobile -->
                <div class="col-12 mt-3 w-kegiatan pt-0 d-lg-none p-0 ">
                    <div class="col-12 px-5 kegiatan p-0">
                        <div class="row">

                            <div class="col-12 mb-3 article shadow-sm p-0">
                                <div class="font-weight-bold">Kegiatan Sekolah Mobile</div>
                            </div>

                            <div class="col-12 mb-3 article shadow-sm">
                                <img src="<?= base_url('images/gm.jpg') ?>" alt="" class="img-fluid">
                                <div class="h6 mt-3">Kegiatan Acara Hari Guru</div>
                                <div class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius adipisci modi, repellendus totam aperiam ullam, quas quam ex nulla illum. Quidem esse ea recusandae aut sequi saepe consectetur similique provident sit.
                                </div>
                            </div>

                            <div class="col-12 mb-3 article shadow-sm">
                                <img src="<?= base_url('images/gm.jpg') ?>" alt="" class="img-fluid">
                                <div class="h6 mt-3">Kegiatan Acara Hari Guru</div>
                                <div class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius adipisci modi, repellendus totam aperiam ullam, quas quam ex nulla illum. Quidem esse ea recusandae aut sequi saepe consectetur similique provident sit.
                                </div>
                            </div>

                            <div class="col-12 mb-3 article">
                                <img src="<?= base_url('images/gm.jpg') ?>" alt="" class="img-fluid">
                                <div class="h6 mt-3">Kegiatan Acara Hari Guru</div>
                                <div class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius adipisci modi, repellendus totam aperiam ullam, quas quam ex nulla illum. Quidem esse ea recusandae aut sequi saepe consectetur similique provident sit.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- lastMobile -->

                <!-- modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h6 class="modal-title font-weight-bold">Biodata</h6>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="<?= base_url('/frontend/update') ?>" class="was-validated" method="post">
                                    <div class="form-group">
                                        <label for="uname">Alamat:</label>
                                        <textarea class="form-control" name="alamat" required></textarea>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uname">Tempat Lahir:</label>
                                        <input type="text" class="form-control" id="tmpt_lahir" placeholder="Enter username" name="tmpt_lahir" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uname">Tanggal Lahir:</label>
                                        <input type="date" class="form-control" id="tgl_lahir" placeholder="Enter username" name="tgl_lahir" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama:</label>
                                        <select class="form-control" id="agama" name="agama" required>
                                            <option value="" disabled selected>Select Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please select an option.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" id="password" name="pswd" class="form-control" value="<?= $SiswaData['password'] ?>">
                                        <small><input type="checkbox" class="mt-3 ml-1" onclick="togglePasswordVisibility()"> Show Password</small>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- modal Edit -->
                <div class="modal fade" id="myModale">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h6 class="modal-title font-weight-bold">Edit Biodata</h6>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="<?= base_url('/frontend/update') ?>" class="was-validated" method="post">
                                    <div class="form-group">
                                        <label for="uname">Alamat:</label>
                                        <textarea class="form-control" name="alamat" required><?= $SiswaData['alamat'] ?></textarea>


                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uname">Tempat Lahir:</label>
                                        <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" required value="<?= $SiswaData['tmpt_lahir'] ?>">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uname">Tanggal Lahir:</label>
                                        <input type="date" class="form-control" id="tgl_lahir" placeholder="Enter username" name="tgl_lahir" required value="<?= $SiswaData['tgl_lahir'] ?>">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama:</label>
                                        <select class="form-control" id="agama" name="agama" required>
                                            <option value="<?= $SiswaData['agama'] ?>" selected><?= $SiswaData['agama'] ?></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please select an option.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" id="password" name="pswd" class="form-control" value="<?= $SiswaData['password'] ?>">
                                        <small><input type="checkbox" class="mt-3 ml-1" onclick="togglePasswordVisibility()"> Show Password</small>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>

</html>