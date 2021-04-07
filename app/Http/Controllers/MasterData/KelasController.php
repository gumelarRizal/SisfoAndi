<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterData\Kelas;

class KelasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function Index(){
        $pages = "Kelas";
        $kelas = Kelas::all();
        return view('MasterData.Kelas.Kelas',['Kelas'=>$kelas, 'pages'=>$pages]);
    }
}
