<?php

class rayon_model extends CI_Model
{
    // Source Code SIMPAN RAYON ( localhost/dbd/index.php/rayon )
    public function simpan($data)
    {
        $this->db->from('rayon');
        $this->db->where('nama_rayon', $data['nama_rayon']);
        if (!empty($data['edit'])) {
            $this->db->or_where('id_rayon', $data['edit']);
        }
        $cek = $this->db->get()->row_array();

        if (!empty($data['edit']) && $cek['id_rayon'] == $data['edit']) {
            $simpan = [
                'nama_rayon' => $data['nama_rayon'],
            ];
            $this->db->where('id_rayon', $data['edit']);

            return $this->db->update('rayon', $simpan);
        }

        if (is_null($cek)) {
            $simpan = [
                'nama_rayon' => $data['nama_rayon'],
            ];

            return $this->db->insert('rayon', $simpan);
        }
        $this->session->set_flashdata('model', ', Data dengan nama '.$data['nama_rayon'].' sudah ada');

        return false;
    }

    // Akhir Source Code

    // Source Code Mendapatkan semua data rayon dari database di tabel rayon
    public function getData()
    {
        return $this->db->get('rayon')->result_array();
    }

    // Akhir Source Code

    // Source Code Mendapatkan satu data rayon dari database di tabel rayon
    public function getDataId($id)
    {
        return $this->db->get_where('rayon', ['id_rayon' => $id])->row_array();
    }

    // Akhir Source Code

    // Source Code hapus data rayon dari database di tabel rayon
    public function hapus($id)
    {
        return $this->db->delete('rayon', ['id_rayon' => $id]);
    }

    // Akhir Source Code
}