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
            <form action="<?= site_url('/nilaiDataUpdate/' .$NilaiDataEdit['id']) ?>" method="post">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nis">Nama Siswa : </label>
                                <select type="text" class="form-control" name="siswa_id" id="nis">
                                    <?php foreach ($DataSiswa as $key => $value): ?>
                                        <option value="<?=$value['id']?>" <?= ($value['id'] == $NilaiDataEdit['siswa_id']) ? 'selected' : '' ?>><?=$value['nama_depan']?> <?=$value['nama_belakang']?> || <?=$value['kelas']?><?=$value['nama_jurusan']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_depan">Mapel : </label>
                                <select type="text" class="form-control" name="mapel_id" id="nama_depan">
                                    <?php foreach ($DataMapel as $key => $value): ?>
                                        <option value="<?=$value['id']?>" <?= ($value['id'] == $NilaiDataEdit['mapel_id']) ? 'selected' : '' ?> ><?=$value['nama_mapel']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_belakang">Nilai : </label>
                                <input type="text" class="form-control" name="nilai" id="nama_belakang" value="<?=$NilaiDataEdit['nilai']?>">
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="btn" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>