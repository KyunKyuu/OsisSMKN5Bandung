<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Eskul};
class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskuls = Eskul::paginate(10);
        return view('dashboard.eskul.eskul', compact('eskuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.eskul.create');
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
            'name' => 'required',
            'gambar_icon' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $slug = \Str::slug(request('name'));

        $gambar_icon = $request->file('gambar_icon');
        $gambarIconUrl = $gambar_icon->storeAs("images/eskul", "{$slug}-icon.{$gambar_icon->extension()}");

        if ($request->file('gambar')) {
        $gambar = $request->file('gambar');
        $gambarUrl = $gambar->storeAs("images/eskul", "{$slug}.{$gambar_icon->extension()}");
        }elseif(!$request->file('gambar')) {
        $gambarUrl = null;
        }

        Eskul::create([
            'name' => $request->name,
            'slug' => $slug,
            'gambar_icon' => $gambarIconUrl,
            'gambar' => $gambarUrl,
            'content' => $request->content,

        ]);

        return redirect()->route('eskul')->with('success', 'Data berhasil dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $eskul = Eskul::where('slug', $slug)->first();

        return view('site/eskul', compact('eskul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskul = Eskul::where('id',$id)->first();

        return view('dashboard/eskul/edit', compact('eskul'));
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
        $request->validate([
             'gambar' => 'mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $eskul= Eskul::where('id', $id)->first();
        $slug = \Str::slug(request('name'));

         if ($request->file('gambar_icon')) {
         \Storage::delete($eskul->gambar_icon);
        $gambar_icon = $request->file('gambar_icon');
        $gambarIconUrl = $gambar_icon->storeAs("images/eskul", "{$slug}-icon.{$gambar_icon->extension()}");
        }else{
        $gambarIconUrl = $eskul->gambar_icon;
        }

        if ($request->file('gambar')) {
         \Storage::delete($eskul->gambar);
        $gambar = $request->file('gambar');
        $gambarUrl = $gambar->storeAs("images/eskul", "{$slug}.{$gambar->extension()}");
        }else{
        $gambarUrl = $eskul->gambar;
        }

        $eskul->update([
            'name' => $request->name,
            'slug' => $slug,
            'gambar_icon' => $gambarIconUrl,
            'gambar' => $gambarUrl,
            'content' => $request->content,
        ]);

        return redirect()->route('eskul')->with('success', 'Data eskul berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = Eskul::find($id);
         \Storage::delete($eskul->gambar);
         \Storage::delete($eskul->gambar_icon);
        $eskul->delete();

        return redirect()->back()->with('success', 'eskul berhasil dihapus');
    }
}
