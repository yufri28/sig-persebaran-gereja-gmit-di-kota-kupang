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
                <form method="post" action="<?= site_url('rayon/simpan'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Rayon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Rayon</label>
                            <input required type="text" class="form-control" placeholder="Contoh: V"
                                id="exampleInputEmail1" name="nama_rayon">
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
    <?php foreach ($rayon as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalEditRayon<?= $value['id_rayon']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('rayon/simpan'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Rayon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Rayon</label>
                            <input required type="text" class="form-control" placeholder="Contoh: V"
                                id="exampleInputEmail1" value="<?=$value['nama_rayon']; ?>" name="nama_rayon">
                            <input type="hidden" name="id_rayon" value="<?=$value['id_rayon']; ?>">
                            <input type="hidden" name="edit" value="<?=$value['id_rayon']; ?>">
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
    <?php foreach ($rayon as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalHapusRayon<?= $value['id_rayon']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('rayon/hapus'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Rayon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p>Hapus <strong><?= $value['nama_rayon']; ?></strong> ?</p>
                            <input type="hidden" value="<?= $value['id_rayon']; ?>" name="id_rayon">
                            <input type="hidden" value="<?= $value['nama_rayon']; ?>" name="nama_rayon">
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
                <th>Rayon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rayon as $key => $value): ?>
            <tr>
                <td><?=$key + 1; ?></td>
                <td><?=$value['nama_rayon']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                        data-target="#modalEditRayon<?= $value['id_rayon']; ?>">
                        Edit
                    </button>|
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                        data-target="#modalHapusRayon<?= $value['id_rayon']; ?>">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
