@extends('admin.app')
@section('title', 'Beranda')
@section('content')
    <div class="row">
        <div class="col-md-4">

            <div class="card">

                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="fa fa-users bg-primary  text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Jumlah User</h5>
                    </div>
                    <h3 class="mt-4">{{ $jml_user == null ? '0' : $jml_user }}</h3>
                    {{-- <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> --}}
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Jumlah Kategori</h5>
                    </div>
                    <h3 class="mt-4">{{ $kategori == null ? '0' : $kategori }}</h3>
                    {{-- <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="/admin/jadwal-event">
                <div class="card">

                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="fas fa-calendar bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Jumlah Event Tahun {{ date('Y') }}</h5>
                        </div>
                        <h3 class="mt-4">{{ $event == null ? '0' : $event }}</h3>
                        {{-- <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/admin/content">
                <div class="card">

                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="fas fa-images bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Jumlah Wisata</h5>
                        </div>
                        <h3 class="mt-4">{{ $jml_wisata == null ? '0' : $jml_wisata }}</h3>
                        {{-- <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> --}}
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- <h1>Selamat Datang</h1> --}}
@endsection
