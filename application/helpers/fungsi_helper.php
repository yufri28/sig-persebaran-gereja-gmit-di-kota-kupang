<?php 

function _cekInArray($array, $search, $return_field = null) // Fungsi untuk mengecek element dalam $array yang memiliki value $search pada field $field
{
    foreach ($array as $a) {  // perulangan sebanyak element $array
        $searchKey = array_keys($search);
        $find = true;
        foreach ($searchKey as $s) {
            if ($a[$s] != $search[$s]) {
                $find = false;
            }
        }
        if ($find == true) {
            if (is_null($return_field)) {
                return $find;
            }else{
                return $a[$return_field];
            }
        }
    }
    return false; // jika tidak di temukan makan mengembalikan boolen false
}

function _jenisKelaminArray()
{
    return [
        [
            'jenis_kelamin' => 0,
            'nama_jenis' => 'Betina'
        ],
        [
            'jenis_kelamin' => 1,
            'nama_jenis' => 'Jantan'
        ],
    ];
}