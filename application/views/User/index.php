<?php
    $kecamatan = $kec;
    $jumlah = count($gereja);
?>
<div class="container">
    <div class="row pt-5 my-5 pb-5" style="width: 100vw;">
        <div class="col-md-12 col-lg-8">
            <div id="map"></div>
        </div>
        <div class="col-lg-4 col-md-12 container ketform pr-3 pl-2">
            <form action="" method="post">
                <div class="form-group">
                    <label>Pilih Kecamatan</label>
                    <select class="form-control" name="kecamatan" id="selecte">
                        <option value="0">Semua</option>
                        <option <?= $kecamatan == 'Alak' ? 'selected' : ''; ?> value="1">Alak</option>
                        <option <?= $kecamatan == 'Kelapa Lima' ? 'selected' : ''; ?> value="2">Kelapa Lima
                        </option>
                        <option <?= $kecamatan == 'Kota Lama' ? 'selected' : ''; ?> value="4">Kota Lama</option>
                        <option <?= $kecamatan == 'Kota Raja' ? 'selected' : ''; ?> value="3">Kota Raja</option>
                        <option <?= $kecamatan == 'Maulafa' ? 'selected' : ''; ?> value="5">Maulafa</option>
                        <option <?= $kecamatan == 'Oebobo' ? 'selected' : ''; ?> value="6">Oebobo</option>
                    </select>
                </div>
                <div class="button">
                    <input class="btn btn-primary" type="submit" name="lihat" value="Lihat">
                </div>
            </form>
            <div class="col-lg-4 mt-3 col-md-12 container ketform pr-3 pl-0">
                <?php
                    $colour = '';
                    $classTblColour = '';

					if($kecamatan == '' || $kecamatan == 'Semua'){
						$colour = '#B3E8E5';
					}elseif($kecamatan == 'Alak'){
						$classTblColour = 'table-danger';
					}
					elseif($kecamatan == 'Kelapa Lima'){
						$classTblColour = 'table-primary';
					}
					elseif($kecamatan == 'Kota Lama'){
						$classTblColour = 'table-success';
					}
					elseif($kecamatan == 'Kota Raja'){
						$colour = 'yellow';
					}
					elseif($kecamatan == 'Maulafa'){
						$colour = '#ff7800';
					}
					elseif($kecamatan == 'Oebobo'){
						$classTblColour = 'table-dark';
					}
                ?>
                <table class="table table-borderless <?= $classTblColour ?>" style="background-color: <?= $colour; ?>;">
                    <thead>
                        <tr>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $kecamatan == 'Semua' || $kecamatan == '' ? 'Semua Kecamatan' : $kecamatan; ?></td>
                            <td><?=$jumlah; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="bg-danger text-center" style="width:30%; height:75%;">
                    <p>Alak</p>
                </div>
                <div class="bg-primary text-center" style="width:30%; height:75%;">
                    <p>Kelapa Lima</p>
                </div>

                <div class="bg-success text-center" style="width:30%; height:75%;">
                    <p>Kota Lama</p>
                </div>
                <div class="text-center" style="width:30%; height:75%; background-color: yellow;">
                    <p>Kota Raja</p>
                </div>
                <div class="text-center text-white" style="width:30%; height:75%; background-color: #ff7800;">
                    <p>Maulafa</p>
                </div>
                <div class="bg-dark text-center" style="width:30%; height:75%;">
                    <p>Oebobo</p>
                </div>
            </div>
        </div>
    </div>
</div>