 <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- Search Widget -->
                    <form action="{{route('blog')}}" method="get">
                        @csrf
                       <div class="widget search p-0">
                        <div class="input-group">
                            <input type="text" class="form-control" name="blog" placeholder="Search...">
                            <button type="submit" class="input-group-addon">
                           <i class="icon-search2"></i>
                            </button>
                        </div>
                       </div>
                    </form>

                    <!-- Category Widget -->
                    <div class="widget category">
                        <!-- Widget Header -->
                        <h5 class="widget-header">Categories</h5>
                        <ul class="category-list">
                            <li><a href="{{route('category_blog', $category='Kegiatan OSIS')}}">Kegiatan OSIS <span class="float-right">({{App\Blog::where('category','Kegiatan OSIS')->count()}})</span></a></li>
                            <li><a href="{{route('category_blog', $category='Kegiatan Eskul')}}">Kegiatan Eskul <span class="float-right">({{App\Blog::where('category','Kegiatan Eskul')->count()}})</span></a></li>
                            <li><a href="{{route('category_blog', $category='Informasi Sekolah')}}">Informasi Sekolah<span class="float-right">({{App\Blog::where('category','Informasi Sekolah')->count()}})</span></a></li>
                        </ul>
                    </div>
                    <!-- Archive Widget -->
                    <div class="widget archive">
                        <!-- Widget Header -->
                        <h5 class="widget-header">Archives</h5>
                        <ul class="archive-list">
                            <li><a href="">January 2017</a></li>
                            <li><a href="">February 2017</a></li>
                            <li><a href="">March 2017</a></li>
                            <li><a href="">April 2017</a></li>
                            <li><a href="">May 2017</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>