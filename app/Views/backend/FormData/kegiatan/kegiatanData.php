<div class="col-12 py-3 shadow-sm" style="background-color: white !important; border-radius:10px !important;">
    <div class="col-12 mb-3 p-0">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + Insert Data kegiatan
        </button>
    </div>
    <div class="table-responsive kegiatan-table">
        <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Mapel</th>
                    <th>Kegiatan</th>
                    <th>Id_Kegiatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($DataKegiatan as $kegiatan) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kegiatan['id'] ?></td>
                        <td><?= $kegiatan['nama_kegiatan'] ?></td>
                        <td>
                            <img style="width:50px;" src="<?=base_url('images/kegiatan/'. $kegiatan['gambar'])?>" alt="">
                        </td>
                        <td><?= $kegiatan['artikel_kegiatan'] ?></td>

                        <td class="text-center">

                            <a href="<?= site_url('/kegiatanDataEdit/' . $kegiatan['id'] . '?edit=true') ?>" class="btn btn-primary p-0 px-1">Edit</a> |
                            <a href="<?= site_url('/kegiatanDataDelete/' . $kegiatan['id']) ?>" class="btn btn-danger p-0 px-1" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Mapel</th>
                    <th>Kegiatan</th>
                    <th>Id_Kegiatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Insert Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="<?= site_url('/kegiatanDataCreate') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nis">Nama Kegiatan : </label>
                                <input type="text" name="nama_kegiatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nis">Gambar Kegiatan : </label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nis">Artikel Kegiatan : </label>
                                <textarea name="artikel_kegiatan" class="form-control">

                                </textarea>
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