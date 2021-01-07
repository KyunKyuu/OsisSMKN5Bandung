<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Blog};
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('dashboard/blog/blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/blog/create');
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
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'category' => 'required',

        ]);

        $slug = \Str::slug(request('judul'));
        $gambar = $request->file('gambar');
        $gambarUrl = $gambar->storeAs("images/blog", "{$slug}.{$gambar->extension()}");
        Blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'category' => $request->category,
            'gambar' => $gambarUrl,
            'slug' => $slug,
        ]);

        return redirect()->route('dashboard_blog')->with('success', 'Blog berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $blogs_samping = Blog::latest()->take(3)->get();
        return view('site/blog/single_blog', compact('blog','blogs_samping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::where('id',$id)->first();

        return view('dashboard/blog/edit', compact('blog'));
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

        $blog = Blog::where('id', $id)->first();
        $slug = \Str::slug(request('judul'));

         if ($request->file('gambar')) {
         \Storage::delete($blog->gambar);
        $gambar = $request->file('gambar');
        $gambarUrl = $gambar->storeAs("images/blog", "{$slug}.{$gambar->extension()}");
        }else{
        $gambarUrl = $blog->gambar;
        }

        $blog->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'category' => $request->category,
            'gambar' => $gambarUrl,
            'slug' => $slug,
 
        ]);

        return redirect()->route('dashboard_blog')->with('success', 'Blog berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
         \Storage::delete($blog->gambar);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog berhasil dihapus');
    }
}
