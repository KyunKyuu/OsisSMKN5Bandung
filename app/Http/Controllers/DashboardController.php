<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Kandidat, User, Voting, TanggalVoting, Blog, Sekbid, Eskul};
class DashboardController extends Controller
{
    public function index()
    {	
    	$kandidat = Kandidat::count();
    	$siswa = User::count();
        $sekbid = Sekbid::count();
        $blog = Blog::count();
        $eskul = Eskul::count();
    	$belum_memilih = User::where('status', 'belum memilih')->count();
    	$sudah_memilih = User::where('status', 'sudah memilih')->count();
        $waktu = TanggalVoting::first();
    	// Untuk Chart 
    	$data = Kandidat::get();
        $nomer_urut = [];
        $data_voting = [];
        if ($data->isEmpty()) {
            $nama_kandidat[] = 'Belum ada data';
            $data_voting[] = 0;
        }else{
            foreach ($data as $dt) {
            $nama_kandidat[] = $dt->name;
            $data_voting[] = Voting::where('kandidat_id', $dt->id)->count();
            }
        }
        
    	return view('dashboard.index', compact('kandidat', 'siswa', 'belum_memilih', 'sudah_memilih', 'nama_kandidat', 'data_voting','waktu', 'blog', 'sekbid', 'eskul'));
    }

  
}
