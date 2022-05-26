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
                <form method="post" action="<?= site_url('klasis/simpan'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Klasis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Klasis</label>
                            <input required type="text" class="form-control" placeholder="Contoh: Kota Kupang"
                                id="exampleInputEmail1" name="nama_klasis">
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
    <?php foreach ($allklasis as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalEditKlasis<?= $value['id_klasis']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('klasis/simpan'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Klasis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Klasis</label>
                            <input required type="text" class="form-control" placeholder="Contoh: Kota Kupang"
                                id="exampleInputEmail1" value="<?=$value['nama_klasis']; ?>" name="nama_klasis">
                            <input type="hidden" name="id_klasis" value="<?=$value['id_klasis']; ?>">
                            <input type="hidden" name="edit" value="<?=$value['id_klasis']; ?>">
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
    <?php foreach ($allklasis as $key => $value): ?>
    <div class="modal mt-n5" tabindex="-1" id="modalHapusKlasis<?= $value['id_klasis']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= site_url('klasis/hapus'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Klasis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p>Hapus <strong><?= $value['nama_klasis']; ?></strong> ?</p>
                            <input type="hidden" value="<?= $value['id_klasis']; ?>" name="id_klasis">
                            <input type="hidden" value="<?= $value['nama_klasis']; ?>" name="nama_klasis">
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
                <th>Klasis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allklasis as $key => $value): ?>
            <tr>
                <td><?=$key + 1; ?></td>
                <td><?=$value['nama_klasis']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                        data-target="#modalEditKlasis<?= $value['id_klasis']; ?>">
                        Edit
                    </button>|
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                        data-target="#modalHapusKlasis<?= $value['id_klasis']; ?>">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
