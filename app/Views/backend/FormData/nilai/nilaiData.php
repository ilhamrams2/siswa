<div class="col-12 py-3 shadow-sm" style="background-color: white !important; border-radius:10px !important;">
    <div class="col-12 mb-3 p-0">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + Insert Data nilai
        </button>
    </div>
    <div class="table-responsive nilai-table">
        <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Mapel</th>
                    <th>Nilai</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($DataNilai as $nilai) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nilai['id'] ?></td>
                        <td><?= $nilai['nama_depan']?> <?= $nilai['nama_belakang']?></td>
                        <td><?= $nilai['nama_mapel'] ?></td>
                        <td><?= $nilai['nilai'] ?></td>
                        <td class="text-center">

                            <a href="<?= site_url('/nilaiDataEdit/' . $nilai['id'] . '?edit=true') ?>" class="btn btn-primary p-0 px-1">Edit</a> |
                            <a href="<?= site_url('/nilaiDataDelete/' . $nilai['id']) ?>" class="btn btn-danger p-0 px-1" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Mapel</th>
                    <th>Nilai</th>
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
            <form action="<?= site_url('/nilaiDataCreate') ?>" method="post">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nis">Nama Siswa : </label>
                                <select type="text" class="form-control" name="siswa_id" id="nis">
                                    <?php foreach ($DataSiswa as $key => $value): ?>
                                        <option value="<?=$value['id']?>"><?=$value['nama_depan']?> <?=$value['nama_belakang']?> || <?=$value['kelas']?><?=$value['nama_jurusan']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_depan">Mapel : </label>
                                <select type="text" class="form-control" name="mapel_id" id="nama_depan">
                                    <?php foreach ($DataMapel as $key => $value): ?>
                                        <option value="<?=$value['id']?>"><?=$value['nama_mapel']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_belakang">Nilai : </label>
                                <input type="text" class="form-control" name="nilai" id="nama_belakang">
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