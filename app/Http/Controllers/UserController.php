<?php

namespace App\Http\Controllers;

// use App\Imports\UsersImport;
use App\{User, Voting};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
         $users = User::latest()->where('role', 'siswa')->paginate('10');
      	 return view('dashboard.pemiltos.siswa', compact('users'));
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
            return redirect()->route('siswa')->with('success','Data Berhasil Diimport!');
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

}