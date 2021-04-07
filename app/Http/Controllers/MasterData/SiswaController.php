<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function Index(){
        $pages = "Siswa";
        $siswa = Siswa::all();
        return view('MasterData.Siswa.Siswa',['Siswa'=>$siswa, 'pages'=>$pages]);
    }
}
