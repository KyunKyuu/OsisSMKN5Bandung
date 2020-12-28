
@extends('layouts/site/main')

@section('title', 'OSIS SMKN 5 Bandung')

@section('contect')
  
    <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h1 class="head-title wow fadeInUp" >OSIS SMKN 5 Bandung <br> Mari Berkarya,Bersama.
               </h1>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  @guest
                  <a href="{{route('voting_guest')}}" class="btn btn-common">Vote Calon Ketua OSIS</a>
                  @endguest
                  @auth
                   <a href="{{route('voting')}}" class="btn btn-common">Vote Calon Ketua OSIS</a>
                  @endauth
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="{{asset('site')}}/images/osis-landing.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

  
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <div id="tentang_kami">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">Tentang Kami<br> OSIS SMKN 5 Bandung</h2>
                <p class="mb-4" style="word-wrap: break-word;">Kami, OSIS SMKN 5 Bandung adalah organisasi RESMI yang ada di sekolah SMKN 5, kami menampung dan menjalankan aspirasi-aspirasi dari para siswa, serta menjembatani antara eskul dengan para siswa dan guru.</p>
                <a href="{{route('visi_misi')}}" class="btn btn-common">Lihat Visi - Misi Kami</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon">
                  <i class="lni-microphone"></i>
                </div>
                <div class="feature-content">
                  <h3>What we do</h3>
                  <p style="color: white;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores </p>
                </div>
              </div>
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="icon">
                  <i class="lni-users"></i>
                </div>
                <div class="feature-content">
                  <h3>Meet our team</h3>
                  <p style="color: white;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores </p>
                </div>
              </div>
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                <div class="icon">
                  <i class="lni-medall-alt"></i>
                </div>
                <div class="feature-content">
                  <h3>Our Creation</h3>
                  <p style="color: white;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Services Section Start -->
    <section id="sekbid" class="sekbid section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Seksi Bidang</h2>
          <p>Kami mempunyai 9 Seksi Bidang hebat yang saling mendukung.</p>
        </div>
        <div class="row">
          <!-- Services item -->
          @foreach($sekbids as $sekbid)
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="{{$sekbid->icon}}"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Seksi Bidang {{$sekbid->nomor}}</a></h3>
                <p style="word-wrap: break-word;">{!!Str::limit($sekbid->name,80,'..')!!}</p>
                 <a href="{{route('sekbid_detail', $sekbid->slug)}}" class="mt-3">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
         @endforeach
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <div id="video_osis" class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vMIT-iYOeOE?rel=0" allowfullscreen></iframe>
        </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading mt-3">
              <h2 class="section-title">Masih ragu menjadi pemimpin?</h2>
               <blockquote>&ldquo;Kontrol bukanlah kepemimpinan, manajemen bukanlah kepemimpinan, kepemimpinan adalah kepemimpinan
              Jika anda berusaha untuk memimpin, investasikan setidaknya 50% dari waktu anda dalam memimpin diri anda sendiri dalam waktu, tujuan, etika, prinsip, motivasi, dan perilaku.
              Investasikan sekurang - kurangnya 20% bagi mereka yang memiliki otoritas atas anda dan 15% memimpin rekan - rekan anda.&rdquo;</blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Video promo Section -->
    <section class="video-promo section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
          <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
              <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Kami juga aktif di Instagram loh! Temukan kami di @osissmkn5bdg</h2>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    

    <!-- Counter Section Start -->
    <section id="eskul" class="eskul section-padding">
      <div class="overlay"></div>
      <div class="container">
      <h2 class="text-eskul text-center" data-wow-delay="0.3s">Ekstrakulikuler</h2>
        <div class="row justify-content-between">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">
              <!-- Start counter -->
               @foreach($eskuls as $eskul)
              <div class="col-md-2 col-xs-2 col-lg-2 mb-4 mb-lg-4 col-4">
                <div class="counter-box  wow fadeInUp" data-wow-delay="0.2s">
                  <a href="{{route('eskul_detail', $eskul->slug)}}"><img src="{{$eskul->gambar_icon()}}" class="img-fluid"></a>
                </div>
              </div>
              @endforeach
              <!-- End counter -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    
    
    <!-- Portfolio Section -->
    <section id="galeri_osis" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Gallery OSIS</h2>
          <p>Kumpulan foto purna OSIS.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
           
            <!-- Portfolio Controller/Buttons Ends-->
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 col-6 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="{{asset('site')}}/images/portfolio/img-1.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="{{asset('site')}}/images/portfolio/img-1.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Creative Design</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 col-6  mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="{{asset('site')}}/images/portfolio/img-2.jpg" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="{{asset('site')}}/images/portfolio/img-2.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Retina Ready</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 col-6  mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="{{asset('site')}}/images/portfolio/img-3.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="{{asset('site')}}/images/portfolio/img-3.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Responsive</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 col-6  mix development design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="{{asset('site')}}/images/portfolio/img-4.jpg" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="{{asset('site')}}/images/portfolio/img-4.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Well Documented</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 col-6  mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="{{asset('site')}}/images/portfolio/img-5.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="{{asset('site')}}/images/portfolio/img-5.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Customer Support</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 col-6 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="{{asset('site')}}/images/portfolio/img-6.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="{{asset('site')}}/images/portfolio/img-6.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">User Friendly</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
  
    <!-- Testimonial Section Start -->
    <section id="kata_mereka" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
              
                  <div class="info">
                    <h2><a href="#">Grenchen Pearce</a></h2>
                    <h3><a href="#">Boston Brothers co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                 
                  <div class="info">
                    <h2><a href="#">Domeni GEsson</a></h2>
                    <h3><a href="#">Awesome Technology co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  
                  <div class="info">
                    <h2><a href="#">Dommini Albert</a></h2>
                    <h3><a href="#">Nesnal Design co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  
                  <div class="info">
                    <h2><a href="#">Fernanda Anaya</a></h2>
                    <h3><a href="#">Developer</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  
                  <div class="info">
                    <h2><a href="#">Jason A.</a></h2>
                    <h3><a href="#">Designer</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  

    <!-- Blog Section -->
    <section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{asset('site')}}/images/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html">Suspendisse dictum non velit</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{asset('site')}}/images/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html">Remarkably Did Increasing</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{asset('site')}}/images/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                  <a href="single-post.html">Changing the topic scope</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    

    <!-- Contact Section Start -->
    <section id="saran" class="section-padding">    
      <div class="container">
         <div class="contact-title">
                <h3>Beri kami saran</h3>
                <hr>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s"> 
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
             <form id="contactForm" action="{{route('contact')}}" method="POST">
              @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Nama Kamu">
                    </div>                                 
                  </div>
               
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Email Kamu">
              
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Kirim Saran Kamu..."></textarea>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" type="submit">Kirim Saran</button>
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>We create projects for companies and startups with a passion for quality</p>
              </div>
              <h2>Contact Us</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>Jl. Bojong Koneng No.37A, Sukapada,</span> Bandung, Jawa Barat</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="mailto:info.osissmkn5bandung@gmail.com">info.osissmkn5bandung@gmail.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">Phone:  +84 846 250 592</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
  @endsection

