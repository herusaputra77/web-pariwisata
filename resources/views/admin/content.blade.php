@extends('admin.app')
@section('title', 'Wisata')
@section('content')
    <div class=" mb-3 ">
        <a href="#tambah" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Add Content</a>
    </div>
    <livewire:contents />

    <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add @yield('title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/add-content" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="kategori" id="" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $kat )
                                    <option value="{{$kat->id}}">{{$kat->kategori}}</option>
                                @endforeach
    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="judul" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="title">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Link Google Map</label>
                            <input type="text" name="link_map" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Foto</label>
                            <input type="file" name="foto" id="" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @foreach ($contents as $content)
        <div id="edit{{ $content->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Edit @yield('title')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/admin/edit-content" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $kat )
                                        <option value="{{$kat->id}}" {{($kat->id == $content->id_kategori)?'selected':''}}>{{$kat->kategori}}</option>
                                    @endforeach
        
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="hidden" name="id" value="{{ $content->id }}" class="form-control"
                                    id="">
                                <input type="text" name="judul" value="{{ $content->judul }}" class="form-control"
                                    id="">
                            </div>
                            <div class="form-group">
                                <label for="title">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{ $content->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Alamat</label>
                                <textarea name="alamat"  id="" cols="30" rows="5" class="form-control">{{ $content->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Link Google Map</label>
                                <input type="text" name="link_map" value="{{ $content->link_map }}" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Foto</label>
                                <input type="file" name="foto" id="" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                changes</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
    @endforeach

@endsection
