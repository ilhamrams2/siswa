<div class="col-lg-12 mb-5 p-5 form-wrapper" style="background-color: white !important; border-radius:10px;">
    <div class="row">
        <div class="col-lg-5 py-3">
            <h6>Input Data Mapel</h6>
            <hr>
            <form action="<?= site_url('/createMapel') ?>" method="post">
                <div class="form-group">
                    <label for="Kelas">Masukan Mapel:</label>
                    <input type="text" id="kelas" class="form-control" name="mapel">
                </div>
                <input type="submit" class="btn btn-outline-primary mt-2" style="width: 100%;" value="simpan">
            </form>
        </div>
        <div class="col-lg-6 py-3 table-data mx-auto">
            <h6>Data Mapel</h6>
            <hr>
            <div class="table-responsive table-all">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Mapel</th>
                        <th class="text-center">Id_Mapel</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($mapel as $m_value) : ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $m_value['nama_mapel'] ?></td>
                            <td class="text-center"><?= $m_value['id'] ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-outline-primary p-0 px-1" data-toggle="modal" data-target="#myModal<?= str_replace(' ', '_', $m_value['nama_mapel']) ?><?= $m_value['id'] ?>">
                                    Edit
                                </button>
                                |
                                <a class="btn btn-outline-danger p-0 px-1" href="<?= site_url('/deleteMapel/' . $m_value['id']) ?>" onclick="return confirm('Anda yakin ingin menghapus Mapel ini?')">Hapus</a>

                                <div class="modal fade" id="myModal<?= str_replace(' ', '_', $m_value['nama_mapel']) ?><?= $m_value['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <form action="<?= site_url('/updateMapel/' . $m_value['id']) ?>" method="post">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="Mapel" value="<?= $m_value['nama_mapel'] ?>">
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