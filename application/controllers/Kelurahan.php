<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelurahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata['login_status'] == false) {
            redirect('Auth/logout');
        }
    }

    public function index($id_kecamatan)
    {
        $data['admin'] = $this->gereja_model->getAdmin();
        $data['title'] = 'Kelurahan';
        $data['page_title'] = 'Kelurahan di Kecamatan '.$this->kecamatan_model->getDataId($id_kecamatan)['kecamatan'];
        $data['sidebar'] = 'Wilayah';
        $data['id_kecamatan'] = $id_kecamatan;
        $data['datashow'] = $this->kelurahan_model->getData($id_kecamatan);
        $data['kelurahan'] = $this->kelurahan_model->getDataFull();
        $this->load->view('Template/header', $data);
        $this->load->view('Admin/kelurahan', $data);
        $this->load->view('Template/footer', $data);
    }

    public function simpan()
    {
        if ($this->kelurahan_model->simpan($this->input->post())) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah').'</div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah').''.$this->session->flashdata('model').'</div>');
        }
        redirect('kelurahan/index/'.$this->input->post('id_kecamatan'));
    }

    public function hapus($id_kelurahan, $id_kecamatan)
    {
        if ($this->kelurahan_model->hapus($id_kelurahan, $id_kecamatan)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Dihapus</div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Dihapus'.$this->session->flashdata('model').'</div>');
        }
        redirect('kelurahan/index/'.$id_kecamatan);
    }
}
