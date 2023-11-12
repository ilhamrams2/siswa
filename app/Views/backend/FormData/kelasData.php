<div class="col-lg-12 mb-5 p-5 form-wrapper" style="background-color: white !important; border-radius:10px;">
    <div class="row">
        <div class="col-lg-5 py-3">
            <h6>Input Data Kelas</h6>
            <hr>
            <form action="<?= site_url('/dashboard/createKelas') ?>" method="post">
                <div class="form-group">
                    <label for="Kelas">Masukan Kelas:</label>
                    <input type="text" id="kelas" class="form-control" name="kelas" placeholder="Contoh : 10.A">
                </div>
                <div class="form-group">
                    <label for="jurusan">Masukan Jurusan:</label>
                    <select type="text" id="jurusan" class="form-control" name="jurusan">
                        <?php foreach ($jurusan as $j_value) : ?>
                            <option value="<?= $j_value['id'] ?>"><?= $j_value['nama_jurusan'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-outline-primary mt-2" style="width: 100%;" value="simpan">
            </form>
        </div>
        <div class="col-lg-7 py-3 table-data mx-auto">
            <h6>Data Kelas</h6>
            <hr>
            <div class="table-responsive table-all">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th class="text-center">Id_kelas</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($kelas as $k_value) : ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $k_value['kelas'] ?></td>
                            <td><?= $k_value['nama_jurusan'] ?></td>
                            <td class="text-center"><?= $k_value['id'] ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-outline-primary p-0 px-1" data-toggle="modal" data-target="#myModalkelas<?= $k_value['id'] ?>">
                                    Edit
                                </button>
                                |
                                <a class="btn btn-outline-danger p-0 px-1" href="<?= site_url('/deleteKelas/' . $k_value['id']) ?>" onclick="return confirm('Anda yakin ingin menghapus kelas ini?')">Hapus</a>

                                <div class="modal fade" id="myModalkelas<?= $k_value['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="<?= site_url('/updateKelas/' . $k_value['id']) ?>" method="post">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="kelas" value="<?= $k_value['kelas'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="jurusan" id="" class="form-control">

                                                            <?php foreach ($jurusan as $key => $value) : ?>
                                                                <option value="<?= $value['id'] ?>" <?= ($value['id'] == $k_value['jurusan_id']) ? 'selected' : '' ?>>
                                                                    <?= $value['nama_jurusan'] ?>
                                                                </option>
                                                            <?php endforeach ?>

                                                        </select>
                                                    </div>


                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</div>