<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rayon extends CI_Controller
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
        $data['admin'] = $this->gereja_model->getAdmin();
        $data['title'] = 'Rayon';
        $data['page_title'] = 'Rayon';
        $data['sidebar'] = 'Rayon';
        $data['rayon'] = $this->rayon_model->getData();
        $this->load->view('Template/header', $data);
        $this->load->view('Admin/rayon', $data);
        $this->load->view('Template/footer', $data);
    }

    public function simpan()
    {
        if ($this->rayon_model->simpan($this->input->post())) {
            $this->session->set_flashdata('sukses', 'Berhasil '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah'));
        } else {
            $this->session->set_flashdata('error', 'Gagal '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah').''.$this->session->flashdata('model'));
        }
        redirect('rayon');
    }

    public function hapus()
    {
        if ($this->rayon_model->hapus($this->input->post('id_rayon'))) {
            $this->session->set_flashdata('sukses', 'Rayon '.$this->input->post('nama_rayon').' berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Rayon '.$this->input->post('nama_rayon').' gagal dihapus'.$this->session->flashdata('model'));
        }
        redirect('rayon');
    }
}