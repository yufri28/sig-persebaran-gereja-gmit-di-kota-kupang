<?php

class gereja_model extends CI_Model
{
    // Source Code Mendapatkan semua data gereja dari database di tabel gereja
    public function getData($keyword = 1)
    {
        if ($keyword == 0) {
            return $this->db->query('SELECT gereja.id_gereja, gereja.nama_gereja, gereja.id_rayon, gereja.id_klasis, gereja.id_kecamatan, gereja.lokasi, kecamatan.kecamatan, klasis.nama_klasis, rayon.nama_rayon FROM gereja JOIN kecamatan ON kecamatan.id_kecamatan = gereja.id_kecamatan JOIN klasis ON klasis.id_klasis = gereja.id_klasis JOIN rayon ON rayon.id_rayon = gereja.id_rayon ')->result_array();
        } else {
            return $this->db->query("SELECT gereja.id_gereja, gereja.nama_gereja, gereja.id_rayon, gereja.id_klasis, gereja.id_kecamatan, gereja.lokasi, kecamatan.kecamatan, klasis.nama_klasis, rayon.nama_rayon FROM gereja JOIN kecamatan ON kecamatan.id_kecamatan = gereja.id_kecamatan JOIN klasis ON klasis.id_klasis = gereja.id_klasis JOIN rayon ON rayon.id_rayon = gereja.id_rayon WHERE gereja.id_kecamatan = '$keyword'")->result_array();
        }
        // return $this->db->get('gereja')->result_array();
    }

    // Akhir Source Code

    // Source Code Mendapatkan satu data gereja dari database di tabel gereja
    public function getDataId($id)
    {
        return $this->db->get_where('gereja', ['id_gereja' => $id])->row_array();
    }

    // Akhir Source Code

    // Source Code hapus data gereja dari database di tabel gereja
    public function hapus_gereja($id, $namaGereja)
    {
        $this->db->delete('gereja', ['id_gereja' => $id]);
        echo $this->session->set_flashdata('sukses', $namaGereja.' dihapus');
        redirect('admin/gereja');
    }

    public function edit_gereja($idGereja, $namaGereja, $idRayon, $idKlasis, $idKecamatan, $longLat)
    {
        $simpan = [
            'nama_gereja' => $namaGereja,
            'id_rayon' => $idRayon,
            'id_klasis' => $idKlasis,
            'id_kecamatan' => $idKecamatan,
            'lokasi' => $longLat,
        ];
        $this->db->where('id_gereja', $idGereja);
        $this->db->update('gereja', $simpan);
        echo $this->session->set_flashdata('sukses', 'Gereja diedit');
        redirect('admin/gereja');
    }

    public function tambah_gereja($namaGereja, $idRayon, $idKlasis, $idKecamatan, $longLat)
    {
        $simpan = [
            'nama_gereja' => $namaGereja,
            'id_rayon' => $idRayon,
            'id_klasis' => $idKlasis,
            'id_kecamatan' => $idKecamatan,
            'lokasi' => $longLat,
        ];

        $cekNama = $this->db->from('gereja')->where('nama_gereja', $namaGereja)->get()->row_array();
        $cekLokasi = $this->db->from('gereja')->where('lokasi', $longLat)->get()->row_array();
        if (!$cekNama && !$cekLokasi) {
            $this->db->insert('gereja', $simpan);
            echo $this->session->set_flashdata('sukses', 'Gereja ditambahkan');
            redirect('admin/gereja');
        } elseif ($cekNama) {
            echo $this->session->set_flashdata('error', 'Duplikasi data '.$namaGereja);
            redirect('admin/gereja');
        } elseif ($cekLokasi) {
            echo $this->session->set_flashdata('error', 'Duplikasi data lokasi '.$longLat);
            redirect('admin/gereja');
        }
    }

    // Akhir Source Code
    public function getRayon()
    {
        return $this->db->get('rayon')->result_array();
    }

    public function getKlasis()
    {
        return $this->db->get('klasis')->result_array();
    }

    public function getKecamatan()
    {
        return $this->db->get('kecamatan')->result_array();
    }

    public function getAdmin()
    {
        return $this->db->get('admin')->result_array();
    }
}
