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
            <form action="<?= site_url('/guruDataUpdate/' . $DataGuruEdit['id']) ?>" method="post">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nuptk">NUPTK : </label>
                                <input type="text" class="form-control" name="nuptk" id="nuptk" value="<?= $DataGuruEdit['nuptk'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="nama_depan">Nama Depan : </label>
                                <input type="text" class="form-control" name="nama_depan" id="nama_depan" value="<?= $DataGuruEdit['nama_depan'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="mapel_id">Mapel : </label>
                                <select class="form-control" name="mapel_id" id="mapel_id">
                                    <?php foreach ($DataMapel as $mapel) : ?>
                                        <option value="<?= $mapel['id'] ?>" <?= ($mapel['id'] == $DataGuruEdit['mapel_id']) ? 'selected' : '' ?>>
                                            <?= $mapel['nama_mapel'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang : </label>
                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" value="<?= $DataGuruEdit['nama_belakang'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="password">Password : </label>
                                <input type="text" class="form-control" name="password" id="password" value="<?= $DataGuruEdit['password'] ?>">
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="btn" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>