      </div><!-- /.container-fluid -->
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php foreach ($admin as $key => $value): ?>
      <div class="modal mt-n5" tabindex="-1" id="modalEditAdmin<?= $value['id_admin']; ?>">
          <div class="modal-dialog">
              <div class="modal-content">
                  <form method="post" action="<?= site_url('admin/edit_admin'); ?>">
                      <div class="modal-header">
                          <h5 class="modal-title">Edit Admin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <input type="hidden" class="form-control" value="<?= $value['id_admin']; ?>"
                                  name="id_admin">
                          </div>
                          <div class="form-group">
                              <label>Nama</label>
                              <input type="text" required class="form-control" value="<?= $value['nama']; ?>"
                                  name="nama">
                          </div>
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" value="<?= $value['username']; ?>" name="username"
                                  required>
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="text" required class="form-control" name="password">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                          <button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <?php endforeach; ?>
      <!-- /.content-wrapper -->
      <div class="modal fade" id="modal-edit-admin">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary">
                      <h4 class="modal-title">Edit Data Admin</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?= base_url('index.php/admin/edit_admin'); ?>" method="post">
                      <div class="modal-body">
                          <div class="form-group">
                              <label>Nama</label>
                              <input type="text" name="nama" class="form-control"
                                  value="<?=$this->session->userdata('nama_admin'); ?>">
                              <input type="hidden" name="uri" value="<?=uri_string(); ?>">
                          </div>
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control"
                                  value="<?=$this->session->userdata('username'); ?>">
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control">
                          </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                          <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Batal</button>
                      </div>
                  </form>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->

      <!-- jQuery -->
      <script src="<?=base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?=base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?=base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?=base_url('assets'); ?>/dist/js/demo.js"></script>

      <!-- DataTables  & Plugins -->
      <script src="<?=base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?=base_url('assets'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="<?=base_url('assets'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="<?=base_url('assets'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
          integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
          crossorigin=""></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw-src.js"></script>
      <script src="<?=base_url('assets'); ?>/dist/js/datatables.js"></script>
      <script type="text/javascript">
document.body.style.overflowX = "hidden"
      </script>
      <script src="<?= base_url('assets/geojson/kecamatan.js'); ?>"></script>
      <script src="<?= base_url('assets/geojson/titik_gereja.js'); ?>"></script>
      <script src="<?= base_url('assets/geojson/kec.js'); ?>"></script>
      <script type="text/javascript">
console.log('------------------------------------');
console.log(titik_gmit_kota_kupang['features'][0]['geometry']['coordinates'][0]);
console.log('------------------------------------');



document.body.style.overflowX = "hidden"
//Initialize Select2 Elements
// $('.select2').select2()

// $(".example1").DataTable({
//     "responsive": true,
//     "lengthChange": true,
//     "autoWidth": false,
//     "lengthMenu": [1, 3],
// })

//Initialize Select2 Elements
// $('.select2').select2({
//     theme: 'bootstrap4'
// })
var map = L.map('map').setView([-10.153720507973329, 123.61949645294357], 90);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var drawnItems = new L.FeatureGroup();
map.addLayer(drawnItems);


// membuat tanda lokasi gereja
// var yegarSahadutaLat = -10.17481915022593;
// var yegarSahadutaLong = 123.55490486724466;
// var Rayon = "E";



var map = map.setView([-10.195948187504879, 123.56922596776185], 12);
// for (let i = 0; i < 40; i++) {
//     L.marker([titik_gmit_kota_kupang['features'][i]['geometry']['coordinates'][1], titik_gmit_kota_kupang[
//             'features'][i][
//             'geometry'
//         ]['coordinates'][0]]).bindTooltip(titik_gmit_kota_kupang['features'][i]['properties']['Name']).bindPopup(
//             titik_gmit_kota_kupang['features'][i]['properties']['Name'].concat('<br>Lat: '.concat(
//                 titik_gmit_kota_kupang[
//                     'features'][i]['geometry']['coordinates'][1]).concat('<br>Long: '.concat(
//                 titik_gmit_kota_kupang['features'][i]['geometry']['coordinates'][0]).concat('<br>Klasis: '
//                 .concat(titik_gmit_kota_kupang['features'][i]['geometry']["Klasis"])).concat('<br>Rayon: '
//                 .concat(titik_gmit_kota_kupang['features'][i]['geometry']["Rayon"]))))).openPopup()
//         .addTo(map);
// }
//long, lat.Nama Gereja
var longlat = [];
var namaGereja = [];
var namaKlasis = [];
var namaRayon = [];

var kecamatan = "Semua";



<?php foreach ($gereja as $value): if (!empty($value['lokasi'])) { ?>
longlat.push("<?= $value['lokasi']; ?>");
namaGereja.push("<?= $value['nama_gereja']; ?>");
namaKlasis.push("<?= $value['nama_klasis']; ?>");
namaRayon.push("<?= $value['nama_rayon']; ?>");
<?php } endforeach; ?>


for (let i = 0; i < longlat.length; i++) {
    const longlati = longlat[i].split(",");
    L.marker([longlati[0], longlati[1]]).bindTooltip(namaGereja[i]).bindPopup(
        namaGereja[i].concat(
            '<br>Lat: '
            .concat(
                longlati[0]).concat('<br>Long: '.concat(longlati[1]).concat('<br>Klasis: '
                .concat(namaKlasis[i])).concat('<br>Rayon: '
                .concat(namaRayon[i]))))).openPopup().addTo(map);
}

var dataKecAlak = [];
var dataKecKelapaLima = [];
var dataKecKotaLama = [];
var dataKecKotaRaja = [];
var dataKecMaulafa = [];
var dataKecOebobo = [];

let select = document.getElementById("selecte");

select.addEventListener("change", myFunction);

kecamatan = select.value;
//Alak
for (var i = 0; i < alak['lokasi'].length; i++) {
    dataKecAlak.push([alak['lokasi'][i][1], alak['lokasi'][i][0]]);
}
// Kelapa Lima 
for (var i = 0; i < kelapaLima['lokasi'].length; i++) {

    dataKecKelapaLima.push([kelapaLima['lokasi'][i][1], kelapaLima['lokasi'][i][0]]);
}
for (var i = 0; i < kotaLama['lokasi'].length; i++) {

    dataKecKotaLama.push([kotaLama['lokasi'][i][1], kotaLama['lokasi'][i][0]]);
}
for (var i = 0; i < kotaRaja['lokasi'].length; i++) {

    dataKecKotaRaja.push([kotaRaja['lokasi'][i][1], kotaRaja['lokasi'][i][0]]);
}
for (var i = 0; i < maulafa['lokasi'].length; i++) {

    dataKecMaulafa.push([maulafa['lokasi'][i][1], maulafa['lokasi'][i][0]]);
}
for (var i = 0; i < oebobo['lokasi'].length; i++) {
    dataKecOebobo.push([oebobo['lokasi'][i][1], oebobo['lokasi'][i][0]]);
}

var polygon = L.polygon(dataKecAlak, {
    color: 'red'
}).addTo(map);
var polygon = L.polygon(dataKecKelapaLima, {
    color: 'blue'
}).addTo(map);
var polygon = L.polygon(dataKecKotaLama, {
    color: 'green'
}).addTo(map);
var polygon = L.polygon(dataKecKotaRaja, {
    color: 'yellow'
}).addTo(map);
var polygon = L.polygon(dataKecMaulafa, {
    color: '#ff7800'
}).addTo(map);
var polygon = L.polygon(dataKecOebobo, {
    color: 'black'
}).addTo(map);

function myFunction() {
    switch (select.value) {
        case "Alak":
            var polygon = L.polygon(dataKecAlak, {
                color: 'red'
            }).addTo(map);
            // map.setView([-10.178431313999921, 123.554264947000065], 14);
            break;
        case "Kelapa Lima":
            var polygon = L.polygon(dataKecKelapaLima, {
                color: 'blue'
            }).addTo(map);
            // map.setView([-10.14263231000001, 123.646996709000123], 14);
            break;
        case "Kota Lama":
            var polygon = L.polygon(dataKecKotaLama, {
                color: 'green'
            }).addTo(map);
            break;
        case "Kota Raja":
            var polygon = L.polygon(dataKecKotaRaja, {
                color: 'yellow'
            }).addTo(map);
            break;
        case "Maulafa":
            var polygon = L.polygon(dataKecMaulafa, {
                color: '#ff7800'
            }).addTo(map);
            break;
        case "Oebobo":
            var polygon = L.polygon(dataKecOebobo, {
                color: 'black'
            }).addTo(map);
            break;
        case "Semua":
            var polygon = L.polygon(dataKecAlak, {
                color: 'red'
            }).addTo(map);
            var polygon = L.polygon(dataKecKelapaLima, {
                color: 'blue'
            }).addTo(map);
            var polygon = L.polygon(dataKecKotaLama, {
                color: 'green'
            }).addTo(map);
            var polygon = L.polygon(dataKecKotaRaja, {
                color: 'yellow'
            }).addTo(map);
            var polygon = L.polygon(dataKecMaulafa, {
                color: '#ff7800'
            }).addTo(map);
            var polygon = L.polygon(dataKecOebobo, {
                color: 'black'
            }).addTo(map);
            break;
    }
}


//ketika semua kelurahan dipilih
// loadPolygon('Semua');
// $('input[type="search"]').val($('.listKelurahan').val()).keyup();

//ketika salah satu kelurahan dipilih
// $('.listKelurahan').on('change', () => {
//     $('input[type="search"]').val($('.listKelurahan').val()).keyup();
//     loadPolygon($('.listKelurahan').val())
// })

$('.dataTables_filter').css('opacity', '0');
$('.dataTables_filter').css('height', '0px');
$(
    '.dataTables_length').css('opacity', '0');
$('.dataTables_length').css('height', '0px');
$(
    '.dataTables_paginate').css('opacity', '0');
$('.dataTables_paginate').css('height', '0px');
$(
    '.dataTables_info').css('opacity', '0');
$('.dataTables_info').css('height', '0px');
      </script>
      </body>

      </html>