<?php if (!is_null($this->session->flashdata('edit_admin'))) { ?>
	<div class="row my-3">
		<?= $this->session->flashdata('edit_admin'); ?>	
	</div>
<?php } ?>
<div class="datashow <?=!isset($plusdatashow) ? 'showpage' : ''?>">
	<div class="row my-5">
		<div class="col-lg-2">
			<a href="<?=base_url('index.php/kecamatan');?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i> <b>Kembali</b></a>
		</div>
		<div class="col-lg-8 my-2 text-center">
			<h3><?=$page_title;?></h3>
		</div>
		<div class="col-lg-2">
			<button class="btn btn-primary btn-block plusdatashow"><i class="fa fa-plus"></i> <b>Tambah Data</b></button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped table-sm" id="example1">
				<thead>
					<th>Kelurahan</th>
					<th>Aksi</th>
				</thead>
				<tbody>
					<?php foreach ($datashow as $d) : ?>
						<tr>
							<td class="fieldEdit_<?=$d['id_kelurahan'];?>" data-name="kelurahan"><?= $d['kelurahan'] ?></td>
							<span style="display: none;" class="fieldEdit_<?=$d['id_kelurahan'];?>" data-name="polygon" data-idkel="<?=$d['id_kelurahan'];?>" data-typefield="polygon"><?= $d['polygon'] ?></span>
							<span style="display: none;" class="fieldEdit_<?=$d['id_kelurahan'];?>" data-name="polygonFix" data-idkel="<?=$d['id_kelurahan'];?>" data-typefield="polygon"><?= $d['polygonFix'] ?></span>
							<td>

								<button class="btn btn-warning btn-sm editbtn plusdatashow" data-id="<?=$d['id_kelurahan']?>"><i class="fa fa-pencil-alt"></i> <b>Edit</b></button>
								
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus-<?=$d['id_kelurahan'];?>"><i class="fa fa-trash-alt"></i> <b>Hapus</b></button>
								<div class="modal fade" id="modal-hapus-<?=$d['id_kelurahan'];?>">
							        <div class="modal-dialog">
							          	<div class="modal-content">
							            	<div class="modal-header bg-danger">
							              		<h4 class="modal-title">Hapus Data</h4>
							              		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                		<span aria-hidden="true">&times;</span>
							              		</button>
							            	</div>
							            	<div class="modal-body">
							            		Yakin Hapus Data <?=$d['kelurahan'];?> ?
								            </div>
								            <div class="modal-footer justify-content-between">
								              	<a href="<?=base_url('index.php/kelurahan/hapus/'.$d['id_kelurahan'].'/'.$id_kecamatan);?>" class="btn btn-danger btn-block">Ya</a>
								              	<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Tidak</button>
								            </div>
							          	</div>
							          	<!-- /.modal-content -->
							        </div>
							        <!-- /.modal-dialog -->
							   	</div>
						    	<!-- /.modal -->
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<thead>
					<th>Kelurahan</th>
					<th>Aksi</th>
				</thead>
			</table>
		</div>
	</div>
	<div class="row mt-5">
		<?= $this->session->flashdata('pesan'); ?>	
	</div>
</div>
<!-- <div class="row">
	<?php foreach ($kelurahan as $k): if (!empty($k['polygon'])) { ?>
		<div class="polygonKel" style="display: none;" data-idkel="<?=$k['id_kelurahan'];?>">
			<?= $k['polygon']; ?>
		</div>
	<?php } endforeach ?>
</div> -->
<div class="row">
	<div class="col-lg-6">
		<div class="plusdata <?=isset($plusdatashow) ? 'showpage' : ''?>">
			<div class="row my-5">
				<div class="col-lg-2">
					<button class="btn btn-danger btn-block plusdatahide"><i class="fa fa-arrow-left"></i> <b>Kembali</b></button>
				</div>
			</div>
			<div class="row mt-3 d-flex justify-content-center">
				<div class="col-lg-12">
					<form action="<?=base_url('index.php/kelurahan/simpan');?>" method="post">
						<div class="form-group">
							<label>Kelurahan</label>
							<input type="text" name="kelurahan" id="kelurahan" class="form-control editIdField" required>
							<input type="hidden" name="id_kecamatan" id="id_kecamatan" value="<?=$id_kecamatan?>">
							<input type="hidden" name="edit" class="edit">
						</div>
						<div class="form-group">
							<label>Polygon</label>
							<textarea id="polygon" class="editIdField mt-2 d-none form-control" rows="7"></textarea>
							<textarea id="polygonFix" name="polygon" class="polygon editIdField mt-2 form-control" rows="7"></textarea>
						</div>
						<button class="btn btn-primary btn-block"><b>Simpan</b></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 mt-4 mapcontainer">
		<label>Titik Wilayah</label>
		<div id="map"></div>
	</div>	
</div>
