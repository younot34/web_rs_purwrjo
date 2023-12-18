<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function alurPendaftaran(){
        return view('home.alurPendaftaran');
    }
    public function berita(){
        return view('home.berita');
    }
    public function direksi(){
        return view('home.direksi');
    }
    public function farmasi(){
        return view('home.farmasi');
    }
    public function fasilitas(){
        return view('home.fasilitas');
    }
    public function gizi(){
        return view('home.gizi');
    }
    public function jadwal(){
        return view('home.jadwal');
    }
    public function jadwalPoli(){
        return view('home.jadwalPoli');
    }
    public function karir(){
        return view('home.karir');
    }
    public function kerjasama(){
        return view('home.kerjasama');
    }
    public function khitan(){
        return view('home.khitan');
    }
    public function klinikSpesial(){
        return view('home.klinikSpesial');
    }
    public function lab(){
        return view('home.lab');
    }
    public function laporanakuntan(){
        return view('home.laporanakuntan');
    }
    public function layanan(){
        return view('home.layanan');
    }
    public function layananUnggul(){
        return view('home.layananUnggul');
    }
    public function ambulance(){
        return view('home.ambulance');
    }
    public function mcu(){
        return view('home.mcu');
    }
    public function perjanjianKinerja(){
        return view('home.perjanjianKinerja');
    }
    public function radiologi(){
        return view('home.radiologi');
    }
    public function rawatInap(){
        return view('home.rawatInap');
    }
    public function rawatJalan(){
        return view('home.rawatJalan');
    }
    public function rencanaKerja(){
        return view('home.rencanaKerja');
    }
    public function sejarah(){
        return view('home.sejarah');
    }
    public function talkshow(){
        return view('home.talkshow');
    }
    public function tarifLayanan(){
        return view('home.tarifLayanan');
    }
    public function tataTertib(){
        return view('home.tataTertib');
    }
    public function visiMisi(){
        return view('home.visiMisi');
    }
    public function contact_us(){
        return view('home.contact-us');
    }
}
