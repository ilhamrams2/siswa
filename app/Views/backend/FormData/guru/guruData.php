<div class="col-12 py-3 shadow-sm" style="background-color: white !important; border-radius:10px !important;">
    <div class="col-12 mb-3 p-0">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + Insert Data Guru
        </button>
    </div>
    <div class="table-responsive siswa-table">
        <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NUPTK</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Mapel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($DataGuru as $guru) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $guru['nuptk'] ?></td>
                        <td><?= $guru['nama_depan'] ?> <?= $guru['nama_belakang'] ?></td>
                        <td><?= $guru['password'] ?></td>
                        <td><?= $guru['mapel_id'] ?></td>
                        <td>

                            <a href="<?= site_url('/guruDataEdit/' . $guru['id'] . '?edit=true') ?>" class="btn btn-primary p-0 px-1">Edit</a> |
                            <a href="<?= site_url('/guruDataDelete/' . $guru['id']) ?>" class="btn btn-danger p-0 px-1" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>NUPTK</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Mapel</th>
                    <th>Aksi</th>
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
            <form action="<?=site_url('/guruDataCreate')?>" method="post">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nuptk">NUPTK : </label>
                                <input type="text" class="form-control" name="nuptk" id="nuptk">
                            </div>

                            <div class="form-group">
                                <label for="nama_depan">Nama Depan : </label>
                                <input type="text" class="form-control" name="nama_depan" id="nama_depan">
                            </div>

                            <div class="form-group">
                                <label for="mapel_id">Mapel : </label>
                                <select class="form-control" name="mapel_id" id="mapel_id">
                                    <?php foreach($DataMapel as $mapel): ?>
                                        <option value="<?=$mapel['id']?>"><?=$mapel['nama_mapel']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang : </label>
                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang">
                            </div>

                            <div class="form-group">
                                <label for="password">Password : </label>
                                <input type="text" class="form-control" name="password" id="password">
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