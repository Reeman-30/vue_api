<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasKuliah extends Model {

    protected $data = [
        [
            'id' => 1,
            'semester' => 2,
            'kode_matkul' => 'PBO-001',
            'nama_matkul' => 'Pemrograman Berbasis Objek',
            'kode_prodi' => 'TI-01',
            'nama_prodi' => 'Teknologi Informasi',
            'status' => 'Aktif'
        ],

        [
            'id' => 2,
            'semester' => 2,
            'kode_matkul' => 'PW-001',
            'nama_matkul' => 'Pemrograman Web',
            'kode_prodi' => 'TI-01',
            'nama_prodi' => 'Teknologi Informasi',
            'status' => 'Aktif'
        ],

        [
            'id' => 3,
            'semester' => 4,
            'kode_matkul' => 'PPB-001',
            'nama_matkul' => 'Pemrograman Perangkat Bergerak',
            'kode_prodi' => 'TI-01',
            'nama_prodi' => 'Teknologi Informasi',
            'status' => 'Aktif'
        ]
    ];

    public function getKelasKuliah() {
        return $this->data;
    }
}
