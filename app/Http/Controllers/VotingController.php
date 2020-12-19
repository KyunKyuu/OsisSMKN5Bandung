<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Kandidat, Voting, TanggalVoting, User};
Use Alert;
class VotingController extends Controller
{
    public function index()
    {
    	$kandidat = Kandidat::orderBY('nomer_urut', 'asc')->get();
        $waktu = TanggalVoting::first();
        $voting = Voting::where('user_id', auth()->user()->id)->first();
        
    	return view('site/voting/voting', compact('kandidat', 'waktu', 'voting'));
    }

    public function index_guest()
    {
        $kandidat = Kandidat::orderBY('nomer_urut', 'asc')->get();
        $waktu = TanggalVoting::first();
        $voting = null;
        return view('site/voting/voting', compact('kandidat', 'waktu', 'voting'));
    }

    public function show($slug)
    {
        $waktu = TanggalVoting::first();
    	$kandidat = Kandidat::where('slug', $slug)->first();
        $voting = Voting::where('user_id', auth()->user()->id)->first();
    	return view('site/voting/voting-detail', compact('kandidat', 'waktu', 'voting'));
    }

     public function show_guest($slug)
    {
        $waktu = TanggalVoting::first();
        $kandidat = Kandidat::where('slug', $slug)->first();
        $voting = null;
        return view('site/voting/voting-detail', compact('kandidat', 'waktu', 'voting'));
    }


    public function jumlah()
    {
        // Untuk Chart 
        $waktu = TanggalVoting::first();
        $data = Kandidat::get();
        $nomer_urut = [];
        $data_voting = [];
        if ($data->isEmpty()) {
            $nama_kandidat[] = 'belum ada kandidat';
            $data_voting = 0;
        }else{
            foreach ($data as $dt) {
                $nama_kandidat[] = $dt->name;
                $data_voting[] = Voting::with('kandidat')->where('kandidat_id', $dt->id)->groupBY('kandidat_id')->count();
            }
        }
        
        return view('site/voting/jumlah', compact('nama_kandidat', 'data_voting', 'waktu'));
    }

    public function pilihan_voting(Request $request)
    {   

        $user = auth()->user();
        $user_ip = request()->ip();
        $waktu = TanggalVoting::first();
    if ($waktu->tanggal_mulai <= now() && $waktu->tanggal_berakhir >= now()) {
            
        $vote= Voting::where('user_id', $user->id)->orWhere('ip_address', $user_ip)->first();
       
        if ($vote) {
            return redirect()->back()->with('error', 'Terimakasih,Anda sudah memilih');
        }elseif(!$vote){
            $voting = Voting::create([
                'user_id' => $user->id,
                'kandidat_id' => $request->kandidat_id,
                'ip_address' => $user_ip,
            ]);

            $siswa = User::where('id', $user->id)->first();
            $siswa->update([
                'status' => 'sudah memilih'
            ]);

            return redirect()->route('jumlah_voting')->with('success', 'Terimakasih telah memilih');
       }
    }else{
        return redirect()->back()->with('warning', 'Waktu Voting belum dimulai');
        }
        
    }

    
}
