<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::get();
        return view('admin.slider',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validasi($request);
        $path = Storage::disk('sliders');
        $file = $request->file('file');
        $namaFoto = $file->hashName();
        $slider = Slider::orderBy('urutan','desc')->first();
        if($slider == null){
            $urutan =1;
        }else{
            $urutan = $slider->urutan +1;
        }
        Storage::put('sliders', $file);
        Slider::insert([
            'slider' => $request->slider,
            'deskripsi' => $request->deskripsi,
            'file' => $namaFoto,
            'urutan' => $urutan
        ]);
        return back()->with('pesan', 'Data berhasil diInput!');
    }
    private function validasi($request)
    {
        $request->validate([
            'slider' => 'required',
            'deskripsi' => 'required',
            // 'urutan' => 'required',
            'file' => 'mimes:png,jpg,jpeg|image|max:2048',
        ]);
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
        $file = $request->file('file');
        if ($request->hasFile('file')) {
            $slider = slider::where('id', $id)->first();
            Storage::disk('sliders')->delete($slider->file);
            $namaFoto = $file->hashName();
            Storage::put('sliders', $file);
            slider::where('id', $id)->update([
                'file' => $namaFoto,
            ]);
        }
        Slider::where('id',$id)->update([
            'slider' => $request->slider,
            'deskripsi' => $request->deskripsi,
            'urutan' => $request->urutan,
        ]);
        return back()->with('pesan', 'Data berhasil diInput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::where('id', $id)->first();
        Storage::disk('sliders')->delete($slider->file);
        Slider::where('id', $id)->delete();
        return back()->with('hapus', 'Data berhasil '.$slider->slider.' Dihapus!');
    }
}
