@extends('admin.app')
@section('title', 'Jadwal Event')
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
                        <th>Nama Event</th>
                        <th>Tanggal Event</th>
                        <th>Deskripsi Event</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($event as $value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->nm_event }}</td>
                            <td>{{ $value->deskripsi }}</td>
                            <td>{{ date('d-F-Y',strtotime($value->tanggal)) }}</td>
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
                <form action="/admin/add-event" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Nama Event</label>
                            <input type="text" name="event" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
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

    @foreach ($event as $value )
    <div id="edit{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add @yield('title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/edit-event" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Nama Event</label>
                            <input type="text" name="event" class="form-control" value="{{$value->nm_event}}" id="">
                            <input type="hidden" name="id" class="form-control" value="{{$value->id}}" id="">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" value="{{$value->tanggal}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{$value->deskripsi}}</textarea>
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
