<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('admin.upload');
    }

    public function prosesfileUpload(Request $request){


        $request->validate([
            'berkas' => 'required|file|image|max:1000'
        ]);

        $path = $request->berkas->store('uploads');
        echo "Proses Upload Berhasil, file berada di : $path";






        // if($request->hasFile('berkas')){
        //     echo "path() : " . $request->berkas->path();
        //     echo "<br>";
        //     echo "extension() : " .$request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension()" . $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize()" . $request->berkas->getSize();
        // }else{
        //     echo "Tidak ada File yang di Upload";
        // }
        // dump($request->berkas);
    }


    public function fileUploadRename(){
        return view('admin.rename');
    }

    public function prosesfileUploadRename(Request $request){


        $request->validate([

            'nama_gambar' => 'required|min:5',
            'gambar_profile' => 'required|file|image|max:1000'
        ]);

        // $path = $request->berkas->store('uploads');
        // echo "Proses Upload Berhasil, file berada di : $path";


        //ambil nama extension file asal
        $extFile = $request->gambar_profile->getClientOriginalExtension();
        //generate nama file akhir, diambil dari inputan nama gambar + extension
        $namaFile = $request->nama_gambar .".". $extFile;
        //pindahkan file upload ke folder storage/app/public/gambar
        $request->gambar_profile->storeAs('public/gambar/', $namaFile);
        //genre pth gambar yang bisa di akses (path di folder public)
        $pathPublic = asset('storage/gambar/'. $namaFile);
        echo "Gambar Berhasil di Upload ke <a href=".$pathPublic. ">$namaFile</a> ";
    }
}
