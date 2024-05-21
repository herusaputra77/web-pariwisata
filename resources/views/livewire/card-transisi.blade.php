@php
    use Illuminate\Support\Facades\DB;

@endphp
<style>
    :root {
        --orange: #fd9940;
        --darkorange: #dd7d25;
        --platinum: #e5e5e5;
        --black: #2b2d42;
        --white: #fff;
        --thumb: #edf2f4;
    }

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    h2 {
        font-size: 32px;
        margin-bottom: 1em;
    }

    .cards {
        display: grid;
        grid-auto-columns: 100%;
        grid-column-gap: 10px;
        grid-auto-flow: column;
        padding: 25px 0px;
        list-style: none;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .card {
        display: flex;
        flex-direction: column;
        padding: 20px;
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
        scroll-snap-align: start;
        transition: all 0.2s;
    }

    .card:hover {
        color: var(--white);
        background: var(--orange);
    }

    .card .card-title {
        font-size: 25px;
        font-weight: 50px;
    }

    .card .card-content {
        /* margin: 20px 0; */
        /* max-width: 85%; */
    }

    .card .card-link-wrapper {
        margin-top: auto;
    }

    .card .card-link {
        display: inline-block;
        text-decoration: none;
        color: white;
        background: var(--orange);
        padding: 6px 12px;
        border-radius: 8px;
        transition: background 0.2s;
    }

    .card:hover .card-link {
        background: var(--darkorange);
    }

    .cards::-webkit-scrollbar {
        height: 12px;
    }

    .cards::-webkit-scrollbar-thumb,
    .cards::-webkit-scrollbar-track {
        border-radius: 92px;
    }

    .cards::-webkit-scrollbar-thumb {
        background: var(--darkorange);
    }

    .cards::-webkit-scrollbar-track {
        background: var(--thumb);
    }

    .view-event {
        position: relative;
        left: 150px;
        bottom: 50px;
    }

    .view-event a {
        background-color: blueviolet;
        text-decoration: none;
        display: inline-block;
        padding: 3px 10px;
    }

    .view-event a:hover {
        background-color: white;
        color: blue;
    }

    .view-event .rounded {
        border-radius: 50%;
    }

    @media (min-width: 500px) {
        .cards {
            grid-auto-columns: calc(50% - 10px);
            grid-column-gap: 20px;
        }
    }

    @media (min-width: 700px) {
        .cards {
            grid-auto-columns: calc(calc(100% / 3) - 20px);
            grid-column-gap: 30px;
        }
    }

    @media (min-width: 1100px) {
        .cards {
            grid-auto-columns: calc(25% - 30px);
            grid-column-gap: 40px;
        }
    }


    /* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .page-footer {
        position: fixed;
        right: 0;
        bottom: 50px;
        display: flex;
        align-items: center;
        padding: 5px;
        z-index: 1;
    }

    .page-footer a {
        display: flex;
        margin-left: 4px;
    }
</style>
<section style="background-color: #E5E5E5;">

    <div class="container">
        <ul class="cards">
            @foreach ($bulan as $bln)
                @php
                    // use App\Models\JadwalEvent;

                    $event = DB::table('jadwal_events')
                        ->where('bulan', '0' . $bln->id)
                        ->get();
                    // dump($event);
                @endphp
                <li class="card">
                    <div>
                        <h3 class="card-title">{{ $bln->bulan }}</h3>
                        {{-- <div class="view-event">
                            <a href="" class="previous rounded">&#8249;</a>
                            <a href="" class="next rounded">&#8250;</a>

                        </div> --}}
                        <div class="card-content">
                            <table>
                                @foreach ($event as $value)
                                    <tr>
                                        <td><img src="{{ asset('calendar-icon.png') }}" width="30px" alt="">
                                        </td>
                                        <td>
                                            <strong style="color: red; font-size:20px;">{{ date('d', strtotime($value->tanggal)) }}</strong>
                                            {{$value->nm_event}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="/event-bulan/{{$value->bulan}}" wire:click="event_bulan{{$value->bulan}}" class="card-link">Selengkapnya</a>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</section>
