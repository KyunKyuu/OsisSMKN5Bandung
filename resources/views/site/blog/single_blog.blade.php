@extends('layouts/site/main')

@section('title', 'Blog OSIS SMKN 5 Bandung')
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
              <img src="{{$blog->gambar_blog()}}" alt="gambar blog" class="img-fluid mt-2">
              </div>
              <div class="post-content">
               <p style="word-wrap: break-word;white-space:pre-wrap;">{!!$blog->isi!!}</p>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="widgets">
              <div class="search-input single-widget">
                <input type="text" class="form-control" placeholder="Search Here.....">
              </div>
              <div class="widget-latest-post single-widget">
                <h4>Latest Post</h4>
                <ul class="latest-post">
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/1.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/2.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/3.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                </ul>
              </div>
              <div class="categories single-widget">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
              <div class="tags single-widget">
                <h4>Tags</h4>
                <ul>
                  <li><a href="#">Corporate</a></li>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Photoshop</a></li>
                  <li><a href="#">Minimal</a></li>
                  <li><a href="#">Popular</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Section End  -->

@endsection
