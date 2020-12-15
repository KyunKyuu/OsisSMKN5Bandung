<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Kandidat};
Use Alert;

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {

        $kandidats = Kandidat::orderBY('nomer_urut', 'asc')->get();
        return view('dashboard.pemiltos.kandidat.kandidat', compact('kandidats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pemiltos.kandidat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'nomer_urut' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $attr = $request->all();
        $gambar = $request->file('gambar');
        $slug = \Str::slug(request('name'));
        $gambarUrl = $gambar->storeAs("images/kandidat", "{$slug}.{$gambar->extension()}");
        $attr['gambar'] = $gambarUrl;
        $attr['slug'] = $slug;
        $kandidat = kandidat::create($attr);

        return redirect()->route('kandidat')->with('success','Data created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kandidat = Kandidat::find($id);
        return view('dashboard.pemiltos.kandidat.show', compact('kandidat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kandidat = Kandidat::where('id', $id)->first();

        return view('dashboard.pemiltos.kandidat.edit', compact('kandidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kandidat = Kandidat::where('id', $id)->first();
        $attr = $request->all();
        $gambar = $request->file('gambar');
        $slug = \Str::slug(request('name'));

        if ($request->file('gambar')) {
         \Storage::delete($kandidat->gambar);
        $gambar = $request->file('gambar');
        $gambarUrl = $gambar->storeAs("images/kandidat", "{$slug}.{$gambar->extension()}");
       }else{
        $gambarUrl = $kandidat->gambar;
       }


        $attr['gambar'] = $gambarUrl;
        $attr['slug'] = $slug;

        $kandidat->update($attr);

        return redirect()->route('kandidat')->with('success','Data updated successfully!');
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kandidat = Kandidat::find($id);
        \Storage::delete($kandidat->gambar);
        $kandidat->delete();

        return redirect()->route('kandidat')->with('success','Data Delete successfully!');
    }
}
