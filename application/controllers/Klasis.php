<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Klasis extends CI_Controller
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
        $data['title'] = 'Klasis';
        $data['page_title'] = 'Klasis';
        $data['sidebar'] = 'Klasis';
        $data['allklasis'] = $this->klasis_model->getData();
        $this->load->view('Template/header', $data);
        $this->load->view('Admin/klasis', $data);
        $this->load->view('Template/footer', $data);
    }

    public function simpan()
    {
        if ($this->klasis_model->simpan($this->input->post())) {
            $this->session->set_flashdata('sukses', 'Berhasil '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah'));
        } else {
            $this->session->set_flashdata('error', 'Gagal '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah').''.$this->session->flashdata('model'));
        }
        redirect('klasis');
    }

    public function hapus()
    {
        if ($this->klasis_model->hapus($this->input->post('id_klasis'))) {
            $this->session->set_flashdata('sukses', 'Klasis '.$this->input->post('nama_klasis').' berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Klasis '.$this->input->post('nama_klasis').' gagal dihapus'.$this->session->flashdata('model'));
        }
        redirect('klasis');
    }
}
