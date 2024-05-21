<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;

class WisataController extends Controller
{
    public function kategori($id)
    {
        $kategori = Kategori::get();
        $kategori_wisata = Kategori::where('id', $id)->first();
        $wisata = Content::select('*','contents.id as id_wisata')->where('id_kategori', $id)
            ->leftjoin('kategoris', 'kategoris.id', 'contents.id_kategori')
            ->get();
        // dump($kategori_wisata);
        return view('view_kategori', compact('kategori', 'wisata', 'kategori_wisata'));
    }
    
}
