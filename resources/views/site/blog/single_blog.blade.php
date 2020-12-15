@extends('layouts/site/main')

@section('title', 'Blog OSIS SMKN 5 Bandung')
@section('header')
   <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
@endsection
@section('contect')
<br><br><br><br>
<section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<article class="single-post">
					<h1 style="color: black;word-wrap: break-word;white-space:pre-wrap;">{{$blog->judul}}.</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><a href="{{route('category_blog', $blog->category)}}" class="badge badge-success">{{$blog->category}}</a></li>
						<li class="list-inline-item">{{$blog->created_at->format('d F Y')}}</li>
					</ul>
					<img src="{{$blog->gambar_blog()}}" alt="gambar blog">
					<p style="word-wrap: break-word;white-space:pre-wrap;">{!!$blog->isi!!}</p>
					<ul class="social-circle-icons list-inline">
				  		<li class="list-inline-item text-center"><a class="icon-youtube-play" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="icon-instagram" href=""></a></li>
				  		
				  	</ul>
				</article>
			</div>

@endsection
@section('sidebar_blog')
@include('site/blog/sidebar')
@endsection