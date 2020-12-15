<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{TanggalVoting};
Use Alert;
class TanggalVotingController extends Controller
{
    public function index()
    {	
    	$waktu_voting = TanggalVoting::get();
    	return view('dashboard.pemiltos.tanggal_voting.index', compact('waktu_voting'));
    }

    public function store(Request $request)
    {
        // Mulai
        $mulai = $request->jam_mulai;
        $jam_mulai = explode(":", $mulai);
        $jam_m = $jam_mulai[0];
        $menit_m = $jam_mulai[1];

        // Berakhir
        $berakhir = $request->jam_berakhir;
        $jam_berakhir = explode(":", $berakhir);
        $jam_b = $jam_berakhir[0];
        $menit_b= $jam_berakhir[1];


        $voting_mulai = date('Y-m-d H:i', strtotime('+'.$jam_m. 'hour +'.$menit_m . 'minutes',  strtotime($request->tanggal_mulai)));

        $voting_berakhir = date('Y-m-d H:i', strtotime('+'.$jam_b. 'hour +'.$menit_b . 'minutes',  strtotime($request->tanggal_berakhir)));

    		
    		$data = TanggalVoting::create([
                'tanggal_mulai' => $voting_mulai,
                'tanggal_berakhir' => $voting_berakhir,
            ]);

    		return redirect()->route('tanggal_voting')->with('success', 'Tanggal Berhasil Dibuat');
    }

    public function destroy($id)
    {
    	$data = TanggalVoting::find($id);
    	$data->delete();
    	return redirect()->back()->with('success', 'Tanggal Berhasil Dihapus');;
    }
}
