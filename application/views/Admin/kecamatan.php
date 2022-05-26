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
                <form method="post" action="<?= site_url('kecamatan/simpan'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kecamatan</label>
                            <input required type="text" class="form-control" placeholder="Contoh: Alak"
                                id="exampleInputEmail1" name="kecamatan">
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
    <?php foreach ($allkecamatan as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalEditKecamatan<?= $value['id_kecamatan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('kecamatan/simpan'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kecamatan</label>
                            <input required type="text" class="form-control" placeholder="Contoh: Alak"
                                id="exampleInputEmail1" value="<?=$value['kecamatan']; ?>" name="kecamatan">
                            <input type="hidden" name="id_kecamatan" value="<?=$value['id_kecamatan']; ?>">
                            <input type="hidden" name="edit" value="<?=$value['id_kecamatan']; ?>">
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
    <?php foreach ($allkecamatan as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalHapusKecamatan<?= $value['id_kecamatan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('kecamatan/hapus'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p>Hapus <strong><?= $value['kecamatan']; ?></strong> ?</p>
                            <input type="hidden" value="<?= $value['id_kecamatan']; ?>" name="id_kecamatan">
                            <input type="hidden" value="<?= $value['kecamatan']; ?>" name="kecamatan">
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
<!-- <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
    +Tambah Data
</button> -->

<div class="tables mb-4 mt-4">
    <table id="example1" class="table table-striped mt-n3" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allkecamatan as $key => $value): ?>
            <tr>
                <td><?=$key + 1; ?></td>
                <td><?=$value['kecamatan']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                        data-target="#modalEditKecamatan<?= $value['id_kecamatan']; ?>">
                        Edit
                    </button>|
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                        data-target="#modalHapusKecamatan<?= $value['id_kecamatan']; ?>">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>