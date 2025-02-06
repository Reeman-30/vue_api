<?php

namespace App\Http\Controllers;

use App\Models\KelasKuliah;
use Illuminate\Http\Request;

class KelasKuliahController extends Controller {

    public function index() {
        $kelasKuliah = new KelasKuliah();
        $data = $kelasKuliah->getKelasKuliah();
        return response()->json([
            'message' => 'DATA_RETRIEVED!',
            'status' => 200,
            'data' => $data
        ], 200);
    }

}
