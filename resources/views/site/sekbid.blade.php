@extends('layouts/site/main')

@section('title', 'Sekbid OSIS SMKN 5 Bandung')

@section('contect')
<br><br><br><br><br><br><br>
<div class="container">

    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img src="{{asset('site/images/sekbid.svg')}}" class="w-100">
        </div>
        <br>
        
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">

        <h5 style="font-size: 20px;color: black;">Sekbid ke {{$sekbid->nomor}}</h5>
        
        <hr>

        <h5 style="text-transform: uppercase;font-size: 22;">{{$sekbid->name}}</h5> 
      
        <hr>

        <h5 style="font-size: 20px;color: black;">Tentang Sekbid :  </h5>
         <p style="color: black;">{!! $sekbid->content !!}.</p>
         
      </div>
    </div>

  </div>
 <br><br><br><br><br><br>
@endsection