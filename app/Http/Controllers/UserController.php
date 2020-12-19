<?php

namespace App\Http\Controllers;

// use App\Imports\UsersImport;
use App\{User, Voting};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Datatables;

class UserController extends Controller
{
    public function index()
    {
         $users = User::latest()->where('role', 'siswa')->get();
      	 return view('dashboard.pemiltos.siswa', compact('users'));
    }

    public function get_data_siswa()
    {
       return Datatables::of(User::where('role', 'siswa')->get())->make(true);
    }

     public function get_data_siswa_sudah_memilih()
    {
       return Datatables::of(User::where('role', 'siswa')->where('status', 'sudah memilih')->get())->make(true);
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('excel/',$nama_file);

        // import data
        $import = Excel::import(new UsersImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('siswa')->with('success','Data Berhasil Di import!');
        } else {
            //redirect
            return redirect()->route('siswa')->with('error' ,'Data Gagal Diimport!');
        }
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

    public function sudah_memilih()
    {
        $users = User::where('status', 'sudah memilih')->get();

        return view('dashboard.pemiltos.siswa_memilih', compact('users'));
    }

     public function destroy_memilih($id)
    {
        $voting = Voting::where('user_id', $id)->first();
        $voting->delete();

        return redirect()->back()->with('success', 'Voting berhasil direset');

    }

}