<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mlandslide;

class Detektorlongsor extends Controller
{
    public function bacasuhu()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacasuhu', ['nilaisensor' => $suhu]);
    }

       public function bacakelembaban()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacakelembaban', ['nilaisensor' => $suhu]);
    }

       public function bacalongitude()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacalongitude', ['nilaisensor' => $suhu]);
    }

       public function bacalatitude()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacalatitude', ['nilaisensor' => $suhu]);
    }

       public function bacaAx()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaAx', ['nilaisensor' => $suhu]);
    }

       public function bacaAy()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaAy', ['nilaisensor' => $suhu]);
    }

       public function bacaAz()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaAz', ['nilaisensor' => $suhu]);
    }

       public function bacaGx()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaGx', ['nilaisensor' => $suhu]);
    }

       public function bacaGy()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaGy', ['nilaisensor' => $suhu]);
    }

       public function bacaGz()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaGz', ['nilaisensor' => $suhu]);
    }

       public function bacaMx()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaMx', ['nilaisensor' => $suhu]);
    }

       public function bacaMy()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaMy', ['nilaisensor' => $suhu]);
    }

       public function bacaMz()
    {
        //baca isi tb_sensor dan ambil nilai suhu
        $suhu = Mlandslide::select('*')->get();
        //kirim ke tampilan baca suhu (buat view baca suhu)
        return view('bacaMz', ['nilaisensor' => $suhu]);
    }

    public function simpansensor()
    {
        Mlandslide::where('id', '1')->update([
            'suhu' => request()->nilaisuhu,
            'kelembaban' => request()->nilaikelembaban,
            'longitude' => request()->nilailongitude,
            'latitude' => request()->nilailatitude,
            'Ax' => request()->nilaiAx,
            'Ay' => request()->nilaiAy,
            'Az' => request()->nilaiAz,
            'Gx' => request()->nilaiGx,
            'Gy' => request()->nilaiGy,
            'Gz' => request()->nilaiGz,
            'Mx' => request()->nilaiMx,
            'My' => request()->nilaiMy,
            'Mz' => request()->nilaiMz
        ]);
    }


}
