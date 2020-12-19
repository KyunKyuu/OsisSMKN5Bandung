
@extends('layouts/site/main')

@section('title', 'OSIS SMKN 5 Bandung')

@section('contect')
  

    <div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
            
            <img src="{{asset('site/images/osis-landing.svg')}}" alt="Image" class="img-fluid img-absolute">
                        <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1>OSIS SMKN 5 Bandung</h1>
                <p class="mb-5">OSIS adalah organisasi resmi yang ada disekolah, kami menampung dan menjalankan aspirasi-aspirasi dari para siswa, serta menjembatani antara eskul dengan para siswa dan guru </p>
                <a href="{{route('voting_guest')}}" class="btn btn-primary mr-2 mb-2">Voting Calon Ketua Osis</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    
        <div class="site-section bg-light" id="tentang-kami">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Tentang Kami</h2>
            
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{asset('site/images/undraw_bookmarks_r6up.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4 h3 font-weight-bold">Visi Kami</h2>
            <p class="mb-4" style="word-wrap: break-word;">
              Menjadikan OSIS sebagai sarana penampungan kreativitas, inspirasi dan aspirasi, juga meningkatkan sekolah sebagai sekolah yang bermutu, berani tampil beda, berakhlak mulia, jujur, adil, dan disiplin.
            </p>
            <h2 class="text-black mb-4 h3 font-weight-bold">Misi Kami</h2>
            <p class="mb-4"style="word-wrap: break-word;">
              1.Menjadikan OSIS sebagai media dua arah yang mempersatukan antara guru dan siswa <br>
              2.Mewujudkan kegiatan-kegiatan OSIS sebagai aksi wujud nyata berjalannya kepengurusan OSIS. 
            </p>
            <p><a href="{{route('visi_misi')}}" class="btn btn-primary">Lihat Lebih Banyak</a></p>
          </div>
        </div>

        
      </div>
    </div>
    
    <div class="site-section" id="sekbid">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Seksi Bidang</h2>
          </div>
        </div>
        <div class="row align-items-stretch">

          @foreach($sekbids as $sekbid)
          <div class="col-md-6 col-xs-4 col-lg-4 mb-4 mb-lg-4 col-sm-12" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary {{$sekbid->icon}}"></span></span>
              </div>
              <div>
                <h3>Seksi Bidang {{$sekbid->nomor}}</h3>
                <p style="word-wrap: break-word;"> {!!Str::limit($sekbid->name,80,'..')!!}</p>
                <p><a href="{{route('sekbid_detail', $sekbid->slug)}}" class="btn btn-primary btn-sm icon-wrap"><span style="color: white;">Lihat Detail</span></a></p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
    
    <div class="feature-big" id="vidio-osis">
      <div class="container">
        <div class="mt-5 row mb-5 site-section ">
          <div class="col-lg-7 order-1  mt-5 order-lg-2 col-md-7 col-xs-7 mb-7 col-sm-12" data-aos="fade-left">
            <iframe width="520" height="315" src="https://www.youtube.com/embed/vMIT-iYOeOE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
            <h2 class="text-black">Masih ragu menjadi pemimpin?</h2>
         {{--    <p class="mb-4">Kata pemimpin sudah tidak asing kita dengar di sekitar kita mungkin ya, pemimpin bisa dikatakan seseorang yang menduduki jabatan tertinggi dalam sebuah kelompok, maupun organisasi. Yang mana nantinya seorang pemimpin tersebut berhak mengatur jalannya sebuah perkumpulan beserta anggota di dalamnya.</p> --}}

            <div class="author-box" data-aos="fade-right">
              <div class="d-flex mb-4">
               
                <div class="mr-auto text-black">
                  <strong class="font-weight-bold mb-0">Dee Hock</strong>
                </div>
              </div>
              <blockquote>&ldquo;Kontrol bukanlah kepemimpinan, manajemen bukanlah kepemimpinan, kepemimpinan adalah kepemimpinan
              Jika anda berusaha untuk memimpin, investasikan setidaknya 50% dari waktu anda dalam memimpin diri anda sendiri dalam waktu, tujuan, etika, prinsip, motivasi, dan perilaku.
              Investasikan sekurang - kurangnya 20% bagi mereka yang memiliki otoritas atas anda dan 15% memimpin rekan - rekan anda.&rdquo;</blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>


     <section class="site-section bg-polygron"  id="eskul">
        <div class="container">
          <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3" style="color: white;">Ekstrakulikuler</h2>
            <hr style="height:1px;border:none;color:#fff;background-color:#fff;" />
          </div>
        </div>
        
            <div class="row" >
              @foreach($eskuls as $eskul)
                <div class="col-md-2 col-xs-2 col-lg-2 mb-4 mb-lg-4 col-4" data-aos="fade-up"">
                    <a href="{{route('eskul_detail', $eskul->slug)}}"><img class="img-fluid img-eskul" src="{{$eskul->gambar_icon()}}"></a>
                </div>
               @endforeach
                  </div>
                </div>
      
    </section>


    <div class="site-section" id="blog">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Blog Osis</h2>
          </div>
        </div>

        <div class="row">
          @foreach($blogs as $blog)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="{{$blog->gambar_blog()}}" alt="Image blog" class="img-fluid img-blog-site" >
              <h2><a href="{{route('single_blog', $blog->slug)}}">{{$blog->judul}}</a></h2>
              <div class="meta mb-4"><a href="{{route('category_blog', $blog->category)}}" class="badge badge-success">{{$blog->category}}</a><span class="mx-2">&bullet;</span> {{$blog->created_at->format('d F Y')}}</div>
              <p style="word-wrap: break-word;">{!!\Str::limit($blog->isi,'130','..')!!}</p>
              <p><a href="{{route('single_blog', $blog->slug)}}">Continue Reading...</a></p>
            </div> 
          </div>
          @endforeach

        </div>
      </div>
    </div>

    <div class="site-section bg-polygron overlay" id="kirim-saran">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Beri Kami Saran</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="{{route('contact')}}" method="POST" class="p-5 bg-white">
              @csrf
              <h2 class="h4 text-black mb-5">Informasi Anda</h2> 
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama</label>
                  <input type="text" name="name" id="fname" class="form-control rounded-0">
                </div>
               
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control rounded-0">
                </div>
              </div>

            

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Saran</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" value="Kirim Saran" class="btn btn-primary mr-2 mb-2">
                  Submit</button>
                </div>
              </div>
  
            </form>
          </div>
        
        </div>
        
      </div>
    </div>

  @endsection

