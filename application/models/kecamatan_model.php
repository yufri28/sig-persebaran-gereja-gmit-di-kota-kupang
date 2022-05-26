<?php 

/**
 * 
 */
class kecamatan_model extends CI_Model
{
	// Source Code SIMPAN KECAMATAN ( localhost/dbd/index.php/kecamatan )
	public function simpan($data)
	{
		$this->db->from('kecamatan');
		$this->db->where('kecamatan', $data['kecamatan']);
		if (!empty($data['edit'])) {
			$this->db->or_where('id_kecamatan', $data['edit']);
		}
		$cek = $this->db->get()->row_array();
		
		if (!empty($data['edit']) && $cek['id_kecamatan'] == $data['edit']) {
			$simpan = [
				'kecamatan' => $data['kecamatan'],
			];
			$this->db->where('id_kecamatan', $data['edit']);
			return $this->db->update('kecamatan', $simpan);
		}

		if (is_null($cek)) {
			$simpan = [
				'kecamatan' => $data['kecamatan'],
			];
			return $this->db->insert('kecamatan', $simpan);
		}
		$this->session->set_flashdata('model', ', Data dengan nama kecamatan sudah ada');
		return false;
	}
	// Akhir Source Code

	// Source Code Mendapatkan semua data kecamatan dari database di tabel kecamatan
	public function getData()
	{
		return $this->db->get('kecamatan')->result_array();
	}
	// Akhir Source Code

	// Source Code Mendapatkan satu data kecamatan dari database di tabel kecamatan
	public function getDataId($id)
	{
		return $this->db->get_where('kecamatan', ['id_kecamatan' => $id])->row_array();
	}
	// Akhir Source Code

	// Source Code hapus data kecamatan dari database di tabel kecamatan
	public function hapus($id)
	{
		return $this->db->delete('kecamatan', ['id_kecamatan' => $id]);
	}
	// Akhir Source Code
}