<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Sekbid,Blog,Eskul};
class SiteController extends Controller
{
    public function index()
    {
        $sekbids = Sekbid::orderBY('nomor', 'asc')->get();
        $blogs = Blog::latest()->take(3)->get();
        $eskuls = Eskul::get();
    	return view('index', compact('sekbids', 'blogs', 'eskuls'));
    }

    public function confirm()
    {
    	return view('confirm');
    }

    public function blog(Request $request)
    {

        $blogs = Blog::latest()->paginate(5);
        if ($request->blog != '') {
            $blogs = Blog::where('judul', 'LIKE', '%'.$request->blog.'%')->latest()->paginate(4);
         }
        $blogs_samping = Blog::latest()->take(3)->get();
    	return view('site/blog/blog', compact('blogs','blogs_samping'));
    }

    public function single_blog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blogs_samping = Blog::latest()->take(3)->get();
        return view('site/blog/single_blog', compact('blog','blogs_samping'));
    }

    public function category_blog(Request $request, $category)
    {
        $blogs = Blog::where('category', $category)->paginate(4);
        if ($request->blog != '') {
            $blogs = Blog::where('judul', 'LIKE', '%'.$request->blog.'%')->latest()->paginate(4);
         }
        $blogs_samping = Blog::latest()->take(3)->get();
        return view('site/blog/blog', compact('blogs','blogs_samping'));
    }

    public function sekbid_detail($slug)
    {
        $sekbid = Sekbid::where('slug', $slug)->first();

        return view('site/sekbid', compact('sekbid'));
    }

    public function eskul_detail($slug)
    {
        $eskul = Eskul::where('slug', $slug)->first();

        return view('site/eskul', compact('eskul'));
    }

    public function visi_misi()
    {
        return view('site/visi-misi');
    }
}
