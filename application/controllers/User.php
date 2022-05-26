<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index($id = 0)
    {
        // $dataJson = file_get_contents(base_url('assets/geojson/titik_gereja.json'));
        // $jsonDec = json_decode($dataJson);

        // for ($i = 0; $i < 35; ++$i) {
        //     $gereja = [
        //     'nama_gereja' => $jsonDec->features[$i]->properties->Name,
        //     'id_rayon' => $jsonDec->features[$i]->geometry->Rayon,
        //     'id_klasis' => $jsonDec->features[$i]->geometry->Klasis,
        // 	'id_kecamatan' => $jsonDec->features[$i]->properties->kecamatan,
        //     'lokasi' => '['.$jsonDec->features[$i]->geometry->coordinates[1].', '.$jsonDec->features[$i]->geometry->coordinates[0].']',
        //     ];
        // 	$this->puskesmas_model->simpan($gereja);
        // }

        // $KMeans = $this->kMeans_model->getResult();
        // $data['kelurahan'] = [];
        // foreach ($KMeans['Endemis'] as $k) {
        //     $data['kelurahan'][] = $k;
        // }
        // foreach ($KMeans['Sporadis'] as $k) {
        //     $data['kelurahan'][] = $k;
        // }
        // $data['tahun'] = $this->tahun_model->getData();
        // $data['centroid'] = $this->centroid_model->getCentroid();
        $keyword = $id;
        $data['kec'] = '';
        if ($this->input->post()) {
            $keyword = $_POST['kecamatan'];
            if ($keyword == 1) {
                $data['kec'] = 'Alak';
            } elseif ($keyword == 2) {
                $data['kec'] = 'Kelapa Lima';
            } elseif ($keyword == 3) {
                $data['kec'] = 'Kota Raja';
            } elseif ($keyword == 4) {
                $data['kec'] = 'Kota Lama';
            } elseif ($keyword == 5) {
                $data['kec'] = 'Maulafa';
            } elseif ($keyword == 6) {
                $data['kec'] = 'Oebobo';
            } elseif ($keyword == 0) {
                $data['kec'] = 'Semua';
            }
        }
        $data['gereja'] = $this->gereja_model->getData($keyword);
        $data['warna'] = ['green', 'blue', 'red', 'yellow'];
        $this->load->view('Template/HeaderUser');
        $this->load->view('User/index', $data);
        $this->load->view('Template/FooterUser', $data);
    }
}
