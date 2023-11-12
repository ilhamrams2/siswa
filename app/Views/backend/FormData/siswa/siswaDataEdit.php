<script>
    $(document).ready(function() {
        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
        });
    });
</script>

<div class="modal fade show" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Data Siswa</h4>
                <a href="/siswaPage"><button type="button" class="close" data-bs-dismiss="modal">X</button></a>
            </div>

            <!-- Modal body -->
            <form action="<?= site_url('/siswaDataUpdate/' . $siswaDataEdit['id']) ?>" method="post">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nis">Nis : </label>
                                <input type="text" class="form-control" name="nis" id="nis" value="<?= $siswaDataEdit['nis'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_depan">Nama Depan : </label>
                                <input type="text" class="form-control" name="nama_depan" id="nama_depan" value="<?= $siswaDataEdit['nama_depan'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="Kelas">Kelas : </label>
                                <select class="form-control" name="Kelas" id="Kelas">
                                    <?php foreach ($kelasData as $key => $value) : ?>
                                        <option value="<?= $value['id'] ?>" <?= ($value['id'] == $siswaDataEdit['kelas_id']) ? 'selected' : '' ?>>
                                            <?= $value['kelas'] ?><?= $value['nama_jurusan'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang : </label>
                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" value="<?= $siswaDataEdit['nama_belakang'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="password">Password : </label>
                                <input type="text" class="form-control" name="password" id="password" value="<?= $siswaDataEdit['password'] ?>">
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="btn" class="btn btn-success">Update</button>
                    <a href="/siswaPage"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>
</div>