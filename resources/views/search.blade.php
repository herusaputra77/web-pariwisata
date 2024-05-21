@extends('app')
@section('content')
    <!-- Page Title -->
    <div id="page-title" class="page-title page-title-1 bg-secondary dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="ti-bolt"></i>Hasil Pencarian {{$text}}</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="/">Home Page</a></li>
                        <li class="active">Search data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title / End -->

    <!-- Content -->
    <div id="content">

        <!-- Section -->
        <section>
            <div class="container">

                <!-- Animations List -->
                <div id="animations-list" class="row">
                    
                    <!-- Icon Box -->
                    @foreach ($data as $wi)
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-4 bg-grey text-center animated" data-animation="bounceInIn"
                                data-animation-delay="400">
                                <img src="{{ asset('images/' . $wi->foto) }}" alt="">
                                <h5 class="margin-bottom-0">{{$wi->judul}}</h5>
                                <p style="text-align: justify;">{{$wi->deskripsi}}</p>
                                <a href="/detail-destinasi/{{$wi->id}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

    </div>
    <!-- Content / End -->
@endsection
