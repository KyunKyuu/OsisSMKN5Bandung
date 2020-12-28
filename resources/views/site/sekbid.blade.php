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

        <h5 style="font-size: 27px;color: black;">Sekbid ke {{$sekbid->nomor}}</h5>
        
        <hr>

        <h3 class="font-weight-normal" style="text-transform: uppercase;font-size: 30;"><strong>{{$sekbid->name}}</strong></h3> 
      
        <hr>

        <h5 style="font-size: 27px;color: black;">Tentang Sekbid :  </h5>
         <span style="font-size: 20px;color: black;">{!! $sekbid->content !!}.</span>
         
      </div>
    </div>

  </div>
 <br><br><br><br><br><br>
@endsection