@extends('layouts/site/main')

@section('title')
  {{$blog->judul}}
@endsection
@section('contect')
<br><br>
  <!-- Blog Section Start  -->
    <div id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="blog-post">
              <div class="post-thumb ml-3 mr-3 mt-2">
               <h3 style="color: black;word-wrap: break-word;white-space:pre-wrap;">{{$blog->judul}}.</h3>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{route('category_blog', $blog->category)}}" class="badge badge-success">{{$blog->category}}</a></li>
            <li class="list-inline-item">{{$blog->created_at->format('d F Y')}}</li>
          </ul>
              <img src="{{$blog->gambar_blog()}}" alt="gambar blog" class="blog-item-img img-fluid mt-2">
              </div>
              <div class="post-content">
               <p style="word-wrap: break-word;white-space:pre-wrap;">{!!$blog->isi!!}</p>
              </div>
            </div>
            
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
    </div>
    <!-- Blog Section End  -->

@endsection
