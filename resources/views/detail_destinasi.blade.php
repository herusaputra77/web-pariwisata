@extends('app')
@section('content')
    @foreach ($destinasi as $sl)
        <section id="home" class="h-lg cover dark bg-black">

            <div class="carousel inner-controls" data-single-item="true" data-navigation="true" data-pagination="true"
                data-autoplay="5000">
                <!-- Slide -->
                <div class="slide h-lg">
                    <div class="bg-image"><img src="{{ asset('images/' . $sl->foto) }}" alt=""></div>
                    <div class="container v-center">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 animated" data-animation="fadeInLeft">
                                <h1 class="font-secondary">{{$sl->judul}}</h1>
                                {{-- <h5 class="mb-40 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h5> --}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-filled btn-primary btn-block">{{$sl->kategori}}<i
                                                class="i-after ti-arrow-right"></i></a>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <a href="#" class="btn btn-link btn-block">About Us<i
                                                class="i-after ti-comment"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
            </div>

        </section>
        <section id="services" class="bg-primary dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2 animated" data-animation="fadeInUp">
                            <span class="icon icon-sm"><i class="ti-pie-chart"></i></span>
                            <div class="feature-content">
                                <h5>Alamat</h5>
                                <p>{{$sl->alamat}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="300">
                            <span class="icon icon-sm"><i class="ti-pulse"></i></span>
                            <div class="feature-content">
                                <h5>Deskripsi</h5>
                                <p>{{$sl->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="600">
                            <span class="icon icon-sm"><i class="ti-comments"></i></span>
                            <div class="feature-content">
                                <h5>Link Google Map</h5>
								@if ($sl->link_map == null)
									<p>Tidak ada Link Googel Map</p>
								@else
								<a href="{{$sl->link_map}}" style="background-color: grey;" class="btn btn-sm btn=primary" target="_blank" rel="noopener noreferrer">Link Googel Map</a>
								@endif
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead text-center"><strong>Need our service?</strong> Do not hesitate to <a href="#"
                        class="link-underline">contact us</a>!</p>
            </div>
        </section>
    @endforeach
@endsection
