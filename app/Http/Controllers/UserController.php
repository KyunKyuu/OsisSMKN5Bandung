<?php

namespace App\Http\Controllers;

// use App\Imports\UsersImport;
use App\{User, Voting};
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Storage;
use Datatables;

class UserController extends Controller
{
    public function index()
    {
         $users = User::latest()->where('role', 'siswa');
      	 return view('dashboard.pemiltos.siswa', compact('users'));
    }

     public function sudah_memilih()
    {
        $users = User::latest()->where('status', 'sudah memilih')->paginate(20);
        return view('dashboard.pemiltos.siswa_memilih', compact('users'));
    }

    public function get_data_siswa()
    {
       return Datatables::of(User::where('role', 'siswa')->latest())->make(true);
    }

   
    public function import(Request $request)
    {

        // validasi
        $this->validate($request, [
            'import_file' => 'required|mimes:csv,xls,xlsx,ods'
        ]);
 
 
        // import data
        $import= Excel::import(new UsersImport, $request->file('import_file'));
        return redirect()->back()->with('success','Data Berhasil Di import!');

       
    }

    public function destroy($id)
    {
    	$voting = Voting::where('user_id', $id)->first();
    	if ($voting) {
    	$voting->delete();
    	}
    	
    	$siswa = User::find($id);
    	$siswa->delete();

    	return redirect()->back()->with('success', 'Data berhasil dihapus');

    }

   

     public function destroy_memilih($id)
    {
        $voting = Voting::where('user_id', $id)->first();
        $voting->delete();
        $siswa = User::find($id);
        $siswa->update([
            'status' => 'belum memilih'
        ]);

        return redirect()->back()->with('success', 'Voting berhasil direset');

    }

}