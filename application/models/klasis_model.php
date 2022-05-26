<?php

class klasis_model extends CI_Model
{
    // Source Code SIMPAN KLASIS ( localhost/dbd/index.php/klasis )
    public function simpan($data)
    {
        $this->db->from('klasis');
        $this->db->where('nama_klasis', $data['nama_klasis']);
        if (!empty($data['edit'])) {
            $this->db->or_where('id_klasis', $data['edit']);
        }
        $cek = $this->db->get()->row_array();

        if (!empty($data['edit']) && $cek['id_klasis'] == $data['edit']) {
            $simpan = [
                'nama_klasis' => $data['nama_klasis'],
            ];
            $this->db->where('id_klasis', $data['edit']);

            return $this->db->update('klasis', $simpan);
        }

        if (is_null($cek)) {
            $simpan = [
                'nama_klasis' => $data['nama_klasis'],
            ];

            return $this->db->insert('klasis', $simpan);
        }
        $this->session->set_flashdata('model', ', Data dengan nama '.$data['nama_klasis'].' sudah ada');

        return false;
    }

    // Akhir Source Code

    // Source Code Mendapatkan semua data klasis dari database di tabel klasis
    public function getData()
    {
        return $this->db->get('klasis')->result_array();
    }

    // Akhir Source Code

    // Source Code Mendapatkan satu data klasis dari database di tabel klasis
    public function getDataId($id)
    {
        return $this->db->get_where('klasis', ['id_klasis' => $id])->row_array();
    }

    // Akhir Source Code

    // Source Code hapus data klasis dari database di tabel klasis
    public function hapus($id)
    {
        return $this->db->delete('klasis', ['id_klasis' => $id]);
    }

    // Akhir Source Code
}