<div class="container text-center">
    <h3>Destinasi Wisata</h3>
    {{-- <p class="lead mb-60">Default gallery with hover layer.</p> --}}

    <div class="masonry row">
        @foreach ($destinasi as $des)
            {{-- <div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div> --}}
            <div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12" style="margin-top:20px;">
                <!-- Image -->
                <div class="image-box inner-title text-center" style="border-radius: 10px;">
                    <div class="image">
                        <a href="{{ asset('/') }}frontEnd/img/works/work01.jpg" data-lightbox="project4"
                            data-title="Image Title">
                            <img src="{{ asset('images/' . $des->foto) }}"
                                style="height: 300px; width:900px; border-radius:10px;" alt="">
                        </a>
                    </div>
                    <div class="title">
                        <a href="/detail-destinasi/{{ $des->id }}">
                            <h5 class="mb-0">{{ $des->judul }}</h5>
                            <span class="text-muted">Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
