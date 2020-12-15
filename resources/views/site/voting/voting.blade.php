@extends('layouts/site/main')

@section('title', 'E-Voting OSIS SMKN 5 Bandung')

@section('contect')
<div class="container">
  <div class="site-section" style="margin-bottom: 40px;">
    	<br><br><br>
      @if($waktu)
        @if($waktu->tanggal_mulai >= now())
                  <h2 style="text-align: center;color: black;">Voting Belum Dimulai</h2><br>
                  <p style="text-align: center;">Voting Dimulai Pada : {{$waktu->tanggal_mulai->format('d-F-Y H:i')}}</p>
              @elseif($waktu->tanggal_mulai <= now() && $waktu->tanggal_berakhir >= now() )
                 @if(!$voting)
                  <h2 style="text-align: center;color: black;">Voting Telah Dimulai, Tentukan Pilihan mu</h2><br>
                  <p style="text-align: center;">Voting Dimulai Pada : {{$waktu->tanggal_mulai->format('d-F-Y H:i')}} Sampai {{$waktu->tanggal_berakhir->format('d-F-Y H:i')}}</p>
                @auth
                @elseif($voting)
                  <div style="text-align: center;" class="alert alert-success" role="alert">
                    Terimakasih, Anda Telah Memilih <b>{{$voting->kandidat->name}}</b>
                  </div>
                @endauth
                  @endif
              @elseif($waktu->tanggal_berakhir <= now())
                @if(!$voting)
                  <h2 style="text-align: center;color: black;">Voting Telah Berakhir</h2><br>
                  <p style="text-align: center;">Voting Berakhir Pada : {{$waktu->tanggal_berakhir->format('d-F-Y H:i')}}</p>
                @auth
                @elseif($voting)
                  <div style="text-align: center;" class="alert alert-success" role="alert">
                    Terimakasih, Anda Telah Memilih <b>{{$voting->kandidat->name}}</b>
                  </div>
                @endauth
                @endif
                  
        @endif 
      @elseif(!$waktu)
        <h2 style="text-align: center;">Voting belum dimulai</h2>
      @endif
      
     
        <div class="row">
          
      		@foreach($kandidat as $kd)
      			<div class="col-md-4" >
      				<div class="card mb-4">
      					<div class="card-header">
      						Nomer Urut {{$kd->nomer_urut}}
      					</div>
      					<img style="height: 270px; object-fit: cover; object-position: center;" class="card-img-top" src="{{$kd->gambar_kandidat()}}" />
      					<div class="card-body">
      						<div class="card-title">
      							<h3>{{$kd->name}}</h3>
      							<h5>{{$kd->kelas}}</h5>
      						</div>
      					</div>
      					<div class="card-footer">
                  @auth
      						<a class="btn btn-primary " href="{{route('voting_detail', $kd->slug)}}">Lihat Visi Misi</a>
                  @endauth
                  @guest
                   <a class="btn btn-primary " href="{{route('voting_detail_guest', $kd->slug)}}">Lihat Visi Misi</a>
                  @endguest
      					</div>
      				</div>
      			</div>
      		@endforeach
    
</div>
</div>
</div>
@endsection