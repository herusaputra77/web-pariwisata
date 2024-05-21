<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Content;
use App\Models\Kategori;
use App\Models\JadwalEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bulan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::orderBy('urutan', 'asc')->get();
        $destinasi = Content::limit(6)->get();
        $kategori = Kategori::get();
        // dd($slider);
        return view('home', compact('destinasi', 'slider', 'kategori'));
    }
    public function detail_destinasi($id)
    {
        $destinasi = Content::leftjoin('kategoris', 'kategoris.id', 'contents.id_kategori')->where('contents.id', $id)->get();

        $kategori = Kategori::get();
        return view('detail_destinasi', compact('kategori', 'destinasi'));
    }
    public function search(Request $request)
    {
        $text = $request->text;
        $kategori = Kategori::get();

        $data = Content::where('judul', 'like', '%' . $text . '%')->get();
        return view('search', compact('data', 'kategori', 'text'));
    }
    public function event_bulan($id)
    {
        $event = JadwalEvent::where('bulan', $id)->get();
        $bulan = Bulan::where('id', $id)->first();
        $kategori = Kategori::get();
        return view('livewire.event-per-bulan', compact('kategori', 'event','bulan'));
    }
}
