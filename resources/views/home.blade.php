@extends('app')
@section('content')
    <!-- Content -->
    <!-- Section -->
	<section id="home" class="h-lg cover dark bg-black">

		<div class="carousel inner-controls" data-single-item="true" data-navigation="true" data-pagination="true" data-autoplay="5000">
			<!-- Slide -->
            @foreach ($slider as $sl )
                
			<div class="slide h-lg">
				<div class="bg-image"><img src="{{ asset('sliders/'.$sl->file) }}" alt=""></div>
				<div class="container v-center">
					<div class="row">
						<div class="col-lg-6 col-md-8 animated" data-animation="fadeInLeft">
							<h1 class="font-secondary" style="color: black;">{{$sl->deskripsi}}</h1>
							{{-- <h5 class="mb-40 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h5> --}}
							<div class="row">
								{{-- <div class="col-sm-6">
									<a href="#" class="btn btn-filled btn-primary btn-block">For Business<i class="i-after ti-arrow-right"></i></a>
								</div> --}}
								{{-- <div class="col-sm-6">
									<a href="#" class="btn btn-link btn-block">About Us<i class="i-after ti-comment"></i></a>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach

			<!-- Slide -->
		</div>
		
	</section>
    <div id="content">
        

        <section>

            <livewire:card-transisi />
        </section>
        <div class="page-title page-title-4 dark">
            <div class="bg-parallax" data-parallax="scroll"
                data-image-src="{{ asset('paralax.jpg') }}"></div>
            <div class="container text-center">
                <h1>Tuah Sepakat Alur Nan Patut</h1>
                <ol class="breadcrumb">
                    {{-- <li><a href="index.html">Home Page</a></li> --}}
                    {{-- <li class="active">Page Titles</li> --}}
                </ol>
            </div>
        </div>

        
    </div>
    <section>
        <livewire:wisata />

    </section>
    <!-- Content / End -->
@endsection
