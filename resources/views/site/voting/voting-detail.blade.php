@extends('layouts/site/main')

@section('title', 'E-Voting OSIS SMKN 5 Bandung')

@section('contect')
<br><br><br><br><br><br><br>
<div class="container">
<form method="post" action="{{route('pilihan_voting')}}">
@csrf
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" style="object-fit: cover; object-position: center;  width: 400px; height: 500px;" src="{{$kandidat->gambar_kandidat()}}" alt="Gambar kandidat"/>
        </div>
        <br>
        <div class="mb-2 d-flex">
          <h3 class="font-weight-normal text-black" style="text-transform: uppercase;"><strong>{{$kandidat->name}}</strong></h3>
        </div>
        <div class="mb-2">
        
          
              <span class="w-25 text-black font-weight-normal"><p>Nomer Urut: {{$kandidat->nomer_urut}}</p></span>
            
            
              <span class="w-25 text-black font-weight-normal"><p>Kelas: {{$kandidat->kelas}}</p></span>
          
         
      
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h4 class="font-weight-normal text-black"><strong>VISI :</strong> </h4>
          <span class="w-25 text-black media-body">{!!$kandidat->visi!!}.</span>
          
        <h4 class="font-weight-normal text-black"> <br><strong>MISI :</strong> </h4>
      <span class="w-25 text-black media-body">{!!$kandidat->misi!!}.</span>
        <div class="mb-2 mt-2 pt-1">
          @auth          
          @if($waktu)
                 @if($waktu->tanggal_mulai <= now() && $waktu->tanggal_berakhir >= now() )
                        @if(!$voting)
                         <input type="hidden" name="kandidat_id" value="{{$kandidat->id}}">
                         <button type="submit" class="btn btn-common" onclick="return confirm('Anda sudah yakin?')">Voting untuk {{$kandidat->name}}</button>
                        @elseif($voting)
                            <a href="#" class="btn btn-common">Terima kasih, Anda Telah Memilih </a>
                        @endif
                   
                 @endif 
        @elseif(!$waktu)
             <a href="#" class="btn btn-common">Voting Belum Dimulai</a>
        @endif
     @endauth
      @guest
         <a href="{{route('login')}}" class="btn btn-common">Login untuk voting</a>
         @endguest
        </div>
       
         
      </div>
    </div>
    </form>
  </div>
 <br><br><br><br><br>
@endsection