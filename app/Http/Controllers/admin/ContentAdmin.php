<?php

namespace App\Http\Controllers\admin;

use Image;
use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ContentAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contents = Content::get();
        $kategori = Kategori::get();
        return view('admin.content', compact('contents', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validasi($request);
        $path = Storage::disk('images');
        $file = $request->file('foto');
        $namaFoto = $file->hashName();
        Storage::put('images', $file);

        Content::insert([
            'id_kategori' => $request->kategori,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'link_map' => $request->link_map,
            'foto' => $namaFoto,
            'created_at' => date('Y-m-d h:i:s')
        ]);
        return back()->with('pesan', 'Data berhasil diInput!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    private function validasi($request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:png,jpg,jpeg|image|max:2048',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validasi($request);
        $id = $request->id;
        $file = $request->file('foto');
        if ($request->hasFile('foto')) {
            $content = Content::where('id', $id)->first();
            Storage::disk('images')->delete($content->foto);
            $namaFoto = $file->hashName();
            Storage::put('images', $file);
            Content::where('id', $id)->update([
                'foto' => $namaFoto,
            ]);
        }

        Content::where('id', $id)->update([
            'id_kategori' => $request->kategori,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'link_map' => $request->link_map,
        ]);
        return back()->with('pesan', 'Data berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::where('id', $id)->first();
        Storage::disk('images')->delete($content->foto);
        Content::where('id', $id)->delete();
        return back()->with('hapus', 'Data berhasil Dihapus!');
    }
}
