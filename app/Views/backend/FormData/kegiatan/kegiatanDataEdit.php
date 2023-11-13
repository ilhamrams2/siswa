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
                <h4 class="modal-title">Update Data Kegiatan</h4>
                <a href="/kegiatanPage"><button type="button" class="close" data-bs-dismiss="modal">X</button></a>
            </div>

            <!-- Modal body -->
            <form action="<?= site_url('/kegiatanDataUpdate/'. $dataKegiatan['id']) ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nis">Nama Kegiatan : </label>
                                <input type="text" name="nama_kegiatan" class="form-control" value="<?= $dataKegiatan['nama_kegiatan']?>">
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('images/kegiatan/'. $dataKegiatan['gambar'])?>" alt="" class="img-fluid" style="width: 100px">
                                <br>
                                <label for="nis">Gambar Kegiatan : </label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nis">Artikel Kegiatan : </label>
                                <textarea name="artikel_kegiatan" class="form-control"><?= $dataKegiatan['artikel_kegiatan']?></textarea>
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