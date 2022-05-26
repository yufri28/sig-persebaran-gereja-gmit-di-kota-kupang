<?php
    $kecamatan = $kec;
    $jumlah = count($gereja);

?>
<!-- Gereja -->
<!-- modal -->
<?php if (!is_null($this->session->flashdata('sukses'))) { ?>
<div class="alert alert-dismissible fade show" style="background: #E8F9FD;" role="alert">
    <i><strong style="color: #73777B;"><?= $this->session->flashdata('sukses'); ?></strong></i>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
<?php if (!is_null($this->session->flashdata('error'))) { ?>
<div class="alert alert-dismissible fade show" style="background: #FFA1A1;" role="alert">
    <i><strong style="color: #73777B;"><?= $this->session->flashdata('error'); ?></strong></i>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>

<div class="modals">
    <!-- ==== modal tambah ==== -->
    <div class="modal mt-n5" tabindex="-1" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('admin/tambahGereja'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Gereja</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Gereja</label>
                            <input required type="text" class="form-control"
                                placeholder="Contoh: GMIT Jemaat Yegar Sahaduta Osmo" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="nama_gereja">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Rayon</label>
                            <select required class="form-control" name="id_rayon" id="exampleFormControlSelect1">
                                <option value="">-- pilih --</option>
                                <?php foreach ($rayon as $key => $value): ?>
                                <option value="<?=$value['id_rayon']; ?>">
                                    <?= $value['nama_rayon'] != '-' ? 'Rayon '.$value['nama_rayon'] : 'Tidak diketahui'; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Klasis</label>
                            <select required class="form-control" name="id_klasis" id="exampleFormControlSelect1">
                                <option value="">-- pilih --</option>
                                <?php foreach ($klasis as $key => $value): ?>
                                <option value="<?=$value['id_klasis']; ?>">
                                    <?= $value['nama_klasis'] != '-' ? 'Klasis '.$value['nama_klasis'] : 'Tidak diketahui'; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kecamatan</label>
                            <select required class="form-control" name="id_kecamatan" id="exampleFormControlSelect1">
                                <option value="">-- pilih --</option>
                                <?php foreach ($allkecamatan as $key => $value): ?>
                                <option value="<?=$value['id_kecamatan']; ?>">
                                    <?= $value['kecamatan'] != '-' ? 'Kecamatan '.$value['kecamatan'] : 'Tidak diketahui'; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lokasi</label>
                            <input required type="text" class="form-control"
                                placeholder="Contoh: -10.1557154,123.614981" id="exampleInputEmail1" name="longLat"
                                aria-describedby="emailHelp">
                            <small><i>Tidak boleh ada spasi (Long,Lat)</i></small>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ==== end modal tambah ==== -->
    <!-- ==== modal edit ==== -->
    <?php foreach ($gereja as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalEditGereja<?= $value['id_gereja']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('admin/edit_gereja'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Gereja</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Gereja</label>
                            <input required type="text" class="form-control"
                                placeholder="Contoh: GMIT Jemaat Yegar Sahaduta Osmo" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?=$value['nama_gereja']; ?>" name="nama_gereja">
                            <input type="hidden" name="id_gereja" value="<?=$value['id_gereja']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Rayon</label>
                            <select required class="form-control" name="id_rayon" id="exampleFormControlSelect1">
                                <option>-- pilih --</option>
                                <?php foreach ($rayon as $key => $r): ?>
                                <option <?= $value['id_rayon'] == $r['id_rayon'] ? 'selected' : ''; ?>
                                    value="<?= $r['id_rayon']; ?>">
                                    <?= $r['nama_rayon'] != '-' ? 'Rayon '.$r['nama_rayon'] : 'Tidak diketahui'; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Klasis</label>
                            <select required class="form-control" name="id_klasis" id="exampleFormControlSelect1">
                                <option>-- pilih --</option>
                                <?php foreach ($klasis as $key => $kl): ?>
                                <option <?= $value['id_klasis'] == $kl['id_klasis'] ? 'selected' : ''; ?>
                                    value="<?= $kl['id_klasis']; ?>">
                                    <?= $kl['nama_klasis'] != '-' ? 'Klasis '.$kl['nama_klasis'] : 'Tidak diketahui'; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kecamatan</label>
                            <select required class="form-control" name="id_kecamatan" id="exampleFormControlSelect1">
                                <option>-- pilih --</option>
                                <?php foreach ($allkecamatan as $key => $kec): ?>
                                <option <?= $value['id_kecamatan'] == $kec['id_kecamatan'] ? 'selected' : ''; ?>
                                    value="<?=$value['id_kecamatan']; ?>">
                                    <?= $value['kecamatan'] != '-' ? 'Kecamatan '.$value['kecamatan'] : 'Tidak diketahui'; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input required type="text" class="form-control"
                                placeholder="Contoh: -10.1557154,123.614981" id="lokasi" value="<?=$value['lokasi']; ?>"
                                name="longLat">
                            <small><i>Tidak boleh ada spasi (Long,Lat)</i></small>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- ==== end modal edit ==== -->
    <!-- ==== modal hapus ==== -->
    <?php foreach ($gereja as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalHapusGereja<?= $value['id_gereja']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('admin/hapus_gereja'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Gereja</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p>Hapus <strong><?= $value['nama_gereja']; ?></strong> ?</p>
                            <input type="hidden" value="<?= $value['id_gereja']; ?>" name="id_gereja">
                            <input type="hidden" value="<?= $value['nama_gereja']; ?>" name="nama_gereja">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="simpan" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- ==== end modal hapus ==== -->
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
    +Tambah Data
</button>

<div class="tables mb-4">
    <table id="example1" class="table table-striped mt-n3" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Gereja</th>
                <th>Rayon</th>
                <th>Klasis</th>
                <th>Kecamatan</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gereja as $key => $value): ?>
            <tr>
                <td><?=$key + 1; ?></td>
                <td><?=$value['nama_gereja']; ?></td>
                <td><?=$value['nama_rayon']; ?></td>
                <td><?=$value['nama_klasis']; ?></td>
                <td><?=$value['kecamatan']; ?></td>
                <td><?=$value['lokasi']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                        data-target="#modalEditGereja<?= $value['id_gereja']; ?>">
                        Edit
                    </button>|
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                        data-target="#modalHapusGereja<?= $value['id_gereja']; ?>">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Gereja</th>
                <th>Rayon</th>
                <th>Klasis</th>
                <th>Kecamatan</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
