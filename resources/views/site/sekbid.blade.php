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

        <h4 class="font-weight-normal">Sekbid ke {{$sekbid->nomor}}</h4>
        
        <hr>

        <h4 class="font-weight-normal"><strong>{{$sekbid->name}}</strong> </h4>
      
        <hr>

        <h4 class="font-weight-normal"><strong>Tentang Sekbid : </strong> </h4>
        <span class="w-25 text-black media-body">{!! $sekbid->content !!}.</span>
         
      </div>
    </div>

  </div>
 <br><br><br><br><br><br>
@endsection