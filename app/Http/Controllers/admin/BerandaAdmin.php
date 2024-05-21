<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\JadwalEvent;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaAdmin extends Controller
{
    public function index()
    {
        $tahun = date('Y');
        $jml_user = User::count();
        $jml_wisata = Content::count();
        $kategori = Kategori::count();
        $event = JadwalEvent::where('tahun',$tahun)->count();
        // dd($jml_wisata);
        return view('admin.beranda',compact('jml_user','jml_wisata','kategori','event'));
    }
}
