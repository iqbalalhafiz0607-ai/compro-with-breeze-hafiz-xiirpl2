<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolProfile;

class SchoolProfileController extends Controller
{
    public function index(){
        $dataSaya = [
            'nama' => 'John Doe',
            'kelas' => 'XII RPL 2',
            'alamat' => 'Medan City',
            'hobi' => 'Coding',
        ];

        //ini ngambil data profile
        $dataProfile = SchoolProfile::find(1);

        // mengirim data nya ke tampilan
        return view('landing-page.index', compact(['dataProfile', 'dataSaya']));
    }

    public function index2(){
        $dataArticel = [
            'judul' => 'sejarah rayap besi',
            'deskripsi' => 'ini deskripsi tentang awal mula rayap besi',
            'kategori' => 'sejarah',
        ];

        //ini ngambil data profile
        $dataProfile = SchoolProfile::find(1);

        // mengirim data nya ke tampilan
        return view('landing-page.index2', compact(['dataProfile', 'dataArticel']));
    }
}


