@extends('layouts/site/main')

@section('title', 'Blog OSIS SMKN 5 Bandung')
@section('header')
   <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
@endsection
@section('contect')
<br><br>
<section class="blog section">
    <div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-1 col-lg-8 offset-lg-0">
                <!-- Article 01 -->
     @foreach($blogs as $blog)
     <article class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
    <!-- Post Image -->
    <div class="blog-item-img">
        <a href="{{route('single_blog', $blog->slug)}}"><img src="{{$blog->gambar_blog()}}" alt="gambar_blog"></a>
    </div>
    <!-- Post Title -->
    <h3>{{$blog->judul}}</h3>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="{{route('category_blog', $blog->category)}}" class="badge badge-success">{{$blog->category}}</a></li>
        
        <li class="list-inline-item"><p>{{$blog->created_at->format('d F Y')}}</p></li>
    </ul>
    <!-- Post Description -->
    <p style="word-wrap: break-word;white-space:pre-wrap;">{!!\Str::limit($blog->isi,'160','..')!!}</p>
    <!-- Read more button -->
    <a href="{{route('single_blog', $blog->slug)}}">Read More..</a>
</article>
@endforeach
    <!-- Pagination -->
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    {{$blogs->links()}}
                  </ul>
                </nav>
</div>  
  <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="widgets">
              <form action="{{route('blog')}}">
                @csrf
              <div class="search-input single-widget">
                <input type="text" name="blog" class="form-control" placeholder="Cari Blog ..">
              </div>
              </form>
              <div class="widget-latest-post single-widget">
                <h4>Blog Terbaru</h4>

                <ul class="latest-post">
                  @foreach($blogs_samping as $item)
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="{{route('single_blog',$item->slug)}}"><img src="{{$item->gambar_blog()}}" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5 style="word-wrap: break-word;white-space:pre-wrap;"><a href="{{route('single_blog',$item->slug)}}">{{$item->judul}}</a></h5>
                    <p>{{$item->created_at->format('d F Y')}}</p>
                  </li>
                @endforeach
                </ul>
              </div>
              <div class="categories single-widget">
                <h4>Kategori Blog</h4>
                <ul>
                   <li><a href="{{route('category_blog', $category='Kegiatan OSIS')}}">Kegiatan OSIS</a></li>
                  <li><a href="{{route('category_blog', $category='Kegiatan Eskul')}}">Kegiatan Eskul</a></li>
                  <li><a href="{{route('category_blog', $category='Informasi Sekolah')}}">Informasi Sekolah</a></li>
                </ul>
              </div>
            </div>
          </div>
</div>
</div>
</section>
@endsection
