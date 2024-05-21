<?php

namespace App\Http\Livewire;

use App\Models\Bulan;
use Livewire\Component;
use App\Models\JadwalEvent;
use Illuminate\Support\Facades\DB;

class CardTransisi extends Component
{

    
    public function render()
    {
        // DB::table('users');
        $bulan = Bulan::get();

        // foreach($bulan as $bln){

        //     $event = JadwalEvent::select('*')->where('bulan','0'.$bln->id)->orderBy('tanggal','asc')->get();
        //     // dd($event);
        // }
        // dd($bulan);

        return view('livewire.card-transisi', compact('bulan'));
    }
    public function event_bulan($id)
    {
        $event = JadwalEvent::where('bulan',$id)->get();
        return view('livewire.event-per-bulan',compact('event'));
    }
}
