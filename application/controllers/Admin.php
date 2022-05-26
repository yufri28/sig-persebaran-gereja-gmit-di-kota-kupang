<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata['login_status'] == false) {
            redirect('Auth/logout');
        }
    }

    public function index()
    {
        $keyword = 0;
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
        $data['admin'] = $this->gereja_model->getAdmin();
        $data['title'] = 'Dashboard';
        $data['page_title'] = 'Dashboard';
        $data['sidebar'] = 'Dashboard';
        $this->load->view('Template/header', $data);
        $this->load->view('Admin/dashboard', $data);
        $this->load->view('Template/footer', $data);
    }

    public function edit_admin()
    {
        $data = $this->input->post();
        $simpan['username'] = !empty($data['username']) ? $data['username'] : $this->session->userdata('username');
        $simpan['nama'] = !empty($data['nama']) ? $data['nama'] : $this->session->userdata('nama_admin');
        if (!empty($data['password'])) {
            $simpan['password'] = md5($data['password']);
        }
        $this->db->where('id_admin', $this->session->userdata('id_admin'));
        $hasil = $this->db->update('admin', $simpan);
        if ($hasil) {
            $this->session->set_flashdata('edit_admin', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Barhasil</strong> Data Admin Berhasil Di Edit.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
            $this->session->set_userdata('nama_admin', $simpan['nama']);
            $this->session->set_userdata('username', $simpan['username']);
        } else {
            $this->session->set_flashdata('edit_admin', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Barhasil</strong> Data Admin Gagal Di Edit.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function gereja()
    {
        $keyword = 0;
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
        $data['admin'] = $this->gereja_model->getAdmin();
        $data['rayon'] = $this->gereja_model->getRayon();
        $data['klasis'] = $this->gereja_model->getKlasis();
        $data['allkecamatan'] = $this->gereja_model->getKecamatan();
        $data['title'] = 'Gereja';
        $data['page_title'] = 'Gereja';
        $data['sidebar'] = 'Gereja';
        $this->load->view('Template/header', $data);
        $this->load->view('Admin/gereja', $data);
        $this->load->view('Template/footer', $data);
    }

    public function tambahGereja()
    {
        $namaGereja = $this->input->post('nama_gereja');
        $idRayon = $this->input->post('id_rayon');
        $idKlasis = $this->input->post('id_klasis');
        $idKecamatan = $this->input->post('id_kecamatan');
        $lokasi = $this->input->post('longLat');
        $longLat = str_replace(' ', '', $lokasi);
        $this->gereja_model->tambah_gereja($namaGereja, $idRayon, $idKlasis, $idKecamatan, $longLat);
    }

    public function edit_gereja()
    {
        $idGereja = $this->input->post('id_gereja');
        $namaGereja = $this->input->post('nama_gereja');
        $idRayon = $this->input->post('id_rayon');
        $idKlasis = $this->input->post('id_klasis');
        $idKecamatan = $this->input->post('id_kecamatan');
        $lokasi = $this->input->post('longLat');
        $longLat = str_replace(' ', '', $lokasi);
        $this->gereja_model->edit_gereja($idGereja, $namaGereja, $idRayon, $idKlasis, $idKecamatan, $longLat);
    }

    public function hapus_gereja()
    {
        $idGereja = $this->input->post('id_gereja');
        $namaGereja = $this->input->post('nama_gereja');
        $this->gereja_model->hapus_gereja($idGereja, $namaGereja);
    }
}