@extends('app')
@section('content')
    <style>
        .like-content {
            display: inline-block;
            width: 100%;
            margin: 5px 0 0;
            padding: 5px 0 0;
            font-size: 18px;
            /* border-top: 10px dashed #eee; */
            text-align: center;
        }

        .like-content span {
            color: #9d9da4;
            font-family: monospace;
        }

        .like-content .btn-secondary {
            display: block;
            margin: 40px auto 0px;
            text-align: center;
            background: #ed2553;
            border-radius: 3px;
            box-shadow: 0 10px 20px -8px rgb(240, 75, 113);
            padding: 10px 17px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            outline: none;
            color: #ffffff;
            text-decoration: none;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .like-content .btn-secondary:hover {
            transform: translateY(-3px);
        }

        .like-content .btn-secondary .fa {
            margin-right: 5px;
        }

        .animate-like {
            animation-name: likeAnimation;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            animation-duration: 0.65s;
        }

        @keyframes likeAnimation {
            0% {
                transform: scale(30);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <!-- Page Title -->
    <div id="page-title" class="page-title page-title-1 bg-secondary dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="ti-bolt"></i>{{ $kategori_wisata->kategori }}</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="/">Home Page</a></li>
                        <li class="active">{{ $kategori_wisata->kategori }}</li>
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

                {{-- <h3 class="text-center">Animation types</h3>
                <p class="text-center lead mb-60">Click on the icon box to play an animation again.</p> --}}

                <!-- Animations List -->
                <div id="animations-list" class="row">

                    <!-- Icon Box -->
                    @foreach ($wisata as $wi)
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-4 bg-grey text-center animated" data-animation="bounceInIn"
                                data-animation-delay="400">
                                <img src="{{ asset('images/' . $wi->foto) }}" alt="">
                                <h5 class="margin-bottom-0" style="margin: 4px 0 4px 0">{{ $wi->judul }}</h5>
                                <p style="text-align: justify;">{{ $wi->deskripsi }}</p>
                                <div class="like-content">

                                    <button class="btn-secondary like-review{{$wi->id_wisata}}">
                                        <i class="fa fa-heart" aria-hidden="true"></i> Like
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

    </div>
    <!-- Content / End -->
    @foreach ($wisata as $wi)

    <script>
        $(function() {
            $(document).one('click', '.like-review{{$wi->id_wisata}}', function(e) {
                $(this).html('<i class="fa fa-heart" aria-hidden="true"></i> You liked this');
                $(this).children('.fa-heart').addClass('animate-like');
            });
        });
    </script>
    @endforeach
@endsection
