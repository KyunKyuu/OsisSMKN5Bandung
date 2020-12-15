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
        <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                <!-- Article 01 -->
     @foreach($blogs as $blog)
     <article>
    <!-- Post Image -->
    <div class="image">
        <img src="{{$blog->gambar_blog()}}" alt="gambar_blog">
    </div>
    <!-- Post Title -->
    <h3>{{$blog->judul}}.</h3>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="{{route('category_blog', $blog->category)}}" class="badge badge-success">{{$blog->category}}</a></li>
        
        <li class="list-inline-item">{{$blog->created_at->format('d F Y')}}</li>
    </ul>
    <!-- Post Description -->
    <p style="word-wrap: break-word;white-space:pre-wrap;">{!!\Str::limit($blog->isi,'160','..')!!}</p>
    <!-- Read more button -->
    <a href="{{route('single_blog', $blog->slug)}}" class="btn btn-transparent">Read More</a>
</article>
@endforeach
    <!-- Pagination -->
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    {{$blogs->links()}}
                  </ul>
                </nav>

</div>  
@endsection
@section('sidebar_blog')
@include('site/blog/sidebar')
@endsection