<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function daftarKaryawan(){
        return "Form Karyawan";
    }

    public function tableKaryawan(){
        return "Table Data Karyawan";
    }

    public function blogKaryawan(){
        return "Halaman Karyawan";
    }
}
