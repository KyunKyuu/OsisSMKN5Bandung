<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekbid;

class SekbidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekbids = Sekbid::orderBY('nomor', 'asc')->paginate(5);
        return view('dashboard.sekbid.sekbid', compact('sekbids'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.sekbid.create');
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
            'nomor' => 'required',
            'name' => 'required',
            'content' => 'required',
            'icon' => 'required',
            
        ]);

        $slug = 'sekbid-'.$request->nomor;

        $sekbid =  Sekbid::create([
            'nomor' => $request->nomor,
            'name' => $request->name,
            'content' => $request->content,
            'slug' => $slug,
            'icon' => $request->icon,

          ]);

        return redirect()->route('sekbid')->with('success', 'Sekbid berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $sekbid = Sekbid::where('slug', $slug)->first();

        return view('site/sekbid', compact('sekbid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sekbid = Sekbid::findOrfail($id);

        return view('dashboard.sekbid.edit', compact('sekbid'));
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
        $sekbid = Sekbid::where('id', $id)->first();
        $slug = 'sekbid-'.$request->nomor;
        $sekbid->update([
           'nomor' => $request->nomor,
           'name' => $request->name,
           'content' => $request->content,
            'slug' => $slug,
            'icon' => $request->icon,

        ]);

        return redirect()->route('sekbid')->with('success', 'Sekbid berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekbid = Sekbid::find($id);
        $sekbid->delete();

        return redirect()->route('sekbid')->with('success','Sekbid berhasil dihapus');
    }
}
