<div class="col-12 py-4 shadow-sm" style="background-color: white !important; border-radius:10px !important;">
    <div class="col-12 mb-4 p-0">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + Insert Data Siswa
        </button>
    </div>
    <div class="table-responsive" style="min-height: 100% !important;">
        <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Kelas</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($siswaData as $siswa) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $siswa['nis'] ?></td>
                        <td><?= $siswa['nama_depan'] ?> <?= $siswa['nama_belakang'] ?></td>
                        <td>
                            <?php if ($siswa['tgl_lahir']) : ?>
                                <?= $siswa['tmpt_lahir'] ?>,
                                <?= date('d/m/Y', strtotime($siswa['tgl_lahir'])) ?>
                            <?php else : ?>
                                Tidak Diketahui
                            <?php endif; ?>
                        </td>

                        <td><?= $siswa['alamat'] ?? 'Tidak Diketahui' ?></td>
                        <td><?= $siswa['agama'] ?? 'Tidak Diketahui' ?></td>
                        <td><?= $siswa['kelas'] ?><?= $siswa['nama_jurusan'] ?></td>
                        <td><?= $siswa['password'] ?></td>
                        <td>

                            <a href="<?= site_url('/siswaDataEdit/' . $siswa['id'] . '?edit=true') ?>" class="btn btn-primary p-0 px-1">Edit</a> | 
                            <a href="<?= site_url('/siswaDataDelete/' . $siswa['id']) ?>" class="btn btn-danger p-0 px-1" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                            
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Kelas</th>
                    <th>Password</th>
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
            <form action="<?=site_url('/siswaDataCreate')?>" method="post">
                <div class="modal-body">
                    <div class="row m-0">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nis">Nis : </label>
                                <input type="text" class="form-control" name="nis" id="nis">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_depan">Nama Depan : </label>
                                <input type="text" class="form-control" name="nama_depan" id="nama_depan">
                            </div>

                            <div class="form-group">
                                <label for="Kelas">Kelas : </label>
                                <select class="form-control" name="Kelas" id="Kelas">
                                    <?php foreach ($kelasData as $key => $value) : ?>
                                        <option value="<?= $value['id'] ?>">
                                            <?= $value['kelas'] ?><?= $value['nama_jurusan'] ?>
                                        </option>
                                    <?php endforeach ?>
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
                    <button type="submit" name="btn" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>