@extends('admin.app')
@section('title', 'Kategori')
@section('content')
    <div class="card m-b-30">
        <div class="card-title">
            <div class="tambah mb-3">
                <a href="#tambah" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plush"></i> Tambah</a>
            </div>

        </div>
        <div class="card-body">

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kategoris as $value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->kategori }}</td>
                            <th>
                                <a href="/admin/delete-kategori/{{$value->id}}" onclick="tanya = confirm('Anda Yakin Akan Menghapus Data ?');
                                    if (tanya == true) return true;
                                    else return false;" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="#edit{{$value->id}}" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add @yield('title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/add-kategori" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Nama Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="">
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

    @foreach ($kategoris as $value )
    <div id="edit{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Edit @yield('title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/edit-kategori" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Nama Kategori</label>
                            <input type="hidden" value="{{$value->id}}" name="id" class="form-control" id="">
                            <input type="text" value="{{$value->kategori}}" name="kategori" class="form-control" id="">
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
        
    @endforeach
@endsection
