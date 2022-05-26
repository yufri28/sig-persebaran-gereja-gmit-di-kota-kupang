<?php 

/**
 * 
 */
class kelurahan_model extends CI_Model
{
	// Source Code Simpan data kelurahan dari database di tabel kelurahan ( http://localhost/dbd/index.php/kelurahan/index/<id_kecamatan> )
	public function simpan($data)
	{
		$polygon = explode(';', $data['polygon']);
		$polygonFix = [];
		foreach ($polygon as $p) {
			$ex = explode(',', $p);
			if (!empty($ex[0]) || !empty($ex[1])) {
				$polygonFix[] = [
					'lat' => $ex[0],
					'lng' => $ex[1],
				];
			}
		}

		$polygonFix = str_replace('\r\n', '', json_encode($polygonFix));
		$this->db->from('kelurahan');	 
		$this->db->where('kelurahan', $data['kelurahan']);
		if (!empty($data['edit'])) {
			$this->db->or_where('id_kelurahan', $data['edit']);
		}
		$cek = $this->db->get()->row_array();
		
		if (!empty($data['edit']) && $cek['id_kelurahan'] == $data['edit']) {
			$simpan = [
				'kelurahan' => $data['kelurahan'],
				'id_kecamatan' => $data['id_kecamatan'],
				'polygon' => $polygonFix
			];
			$this->db->where('id_kelurahan', $data['edit']);
			return $this->db->update('kelurahan', $simpan);
		}

		if (is_null($cek)) {
			$simpan = [
				'kelurahan' => $data['kelurahan'],
				'id_kecamatan' => $data['id_kecamatan'],
				'polygon' => $polygonFix
			];
			return $this->db->insert('kelurahan', $simpan);
		}
		$this->session->set_flashdata('model', ', Data dengan nama kelurahan sudah ada');
		return false;
	}
	// Akhir Source Code

	// Source Code mendapatkan semua data kelurahan dari database di tabel kelurahan di salah satu kecamatan
	public function getData($id_kecamatan)
	{
		$kelurahan = $this->db->get_where('kelurahan', ['id_kecamatan' => $id_kecamatan])->result_array();
		for ($i=0; $i < count($kelurahan); $i++) { 
			$kelurahan[$i]['polygonFix'] = json_decode($kelurahan[$i]['polygon'], true);
			if (is_array($kelurahan[$i]['polygonFix']) > 0) {
				$str = '';
				foreach ($kelurahan[$i]['polygonFix'] as $p) {
					$str .= $p['lat'].', '.$p['lng'].';';
				}
				$kelurahan[$i]['polygonFix'] = $str;
			}
		}
		return $kelurahan;
	}
	// Akhir Source Code

	// Source Code mendapatkan semua data kelurahan dari database di tabel kelurahan
	public function getDataFull()
	{
		$kelurahan =  $this->db->get('kelurahan')->result_array();
		for ($i=0; $i < count($kelurahan); $i++) { 
			$kelurahan[$i]['polygonFix'] = json_decode($kelurahan[$i]['polygon'], true);
			if (is_array($kelurahan[$i]['polygonFix']) > 0) {
				$str = '';
				foreach ($kelurahan[$i]['polygonFix'] as $p) {
					$str .= $p['lat'].', '.$p['lng'].';';
				}
				$kelurahan[$i]['polygonFix'] = $str;
			}
		}
		return $kelurahan;
	}
	// Akhir Source Code

	// Source Code Mendapatkan salah satu data kelurahan dari database di tabel kelurahan
	public function getDataId($id)
	{
		return $this->db->get_where('kelurahan', ['id_kelurahan' => $id])->row_array();
	}
	// Akhir Source Code

	// Source Code hapus salah satu data kelurahan dari database di tabel kelurahan
	public function hapus($id)
	{
		return $this->db->delete('kelurahan', ['id_kelurahan' => $id]);
	}
	// Akhir Source Code
}