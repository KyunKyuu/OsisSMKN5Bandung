@extends('layouts/site/main')

@section('title', 'E-Voting OSIS SMKN 5 Bandung')

@section('contect')
<br><br><br><br>

<div class="container emp-profile">


     <div class="row">
      <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{asset('site/images/undraw_metrics_gtu7.svg')}}" alt="Image" class="img-fluid">
        </div>
     <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
            <h2 class="text-black">Terimakasih telah memilih</h2>
            <p class="mb-4">Apa ada yang kamu harapkan untuk OSIS kedepanya? jika ada, yuk  <a href="{{route('home')}}#kirim-saran">kirimkan saran kamu</a></p>  
      </div>     
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
            @if($waktu)
              @if($waktu->tanggal_mulai >= now())
              	<h5 class="card-title">Hasil Voting dimulai pada {{$waktu->tanggal_mulai->format('d F Y H:i')}}</h5>
              @elseif($waktu->tanggal_mulai <= now() && $waktu->tanggal_berakhir >= now() )
                <h5 class="card-title">Perolehan Suara Sementara &middot; {{now()->format('d, F Y H:i')}}</h5>
              @elseif($waktu->tanggal_berakhir <= now())
              	 <h5 class="card-title">Perolehan Suara Akhir &middot; {{today()->format('d, F Y')}}</h5>	
              @endif  
            @elseif(!$waktu)
                <h5 class="card-title">Hasil Voting Belum Dimulai</h5>
            @endif
              </div>
              <div class="card-body ">
                <canvas id="myChart" width="400" height="200"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection
@push('footer')
@include('layouts.chart')
@endpush