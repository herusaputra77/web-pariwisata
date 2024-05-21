 @extends('app')
 @section('content')
     <!-- Section / Left -->
     <section>
         <div class="container">

             <h3 class="text-center">Event Bulan {{ $bulan->bulan }}</h3>
             {{-- <p class="text-center lead mb-60">Alternative appearance with <code>.boxed</code> and <code>.bordered</code>
                 classes.</p> --}}

             <div class="row mb-60">
                 @foreach ($event as $ev)
                     <div class="col-sm-6">
                         <!-- Icon Box -->
                         <div class="feature feature-2 boxed">
                             <span class="icon icon-primary"><i class="far fa-calendar"></i></span>
                             <div class="feature-content">
                                <h5></h5>
                                 <h5><strong>{{date('d',strtotime($ev->tanggal))}}</strong> - {{$ev->nm_event}}</h5>
                                 <p class="mb-0">{{$ev->deskripsi}}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach

             </div>

         </div>
     </section>
 @endsection
