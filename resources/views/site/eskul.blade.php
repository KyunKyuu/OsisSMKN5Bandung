@extends('layouts/site/main')

@section('title', 'Eskul SMKN 5 Bandung')

@section('contect')
<br><br><br><br><br><br><br>
<div class="container">

    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
         <img src="{{$eskul->gambar()}}" class="w-100">
        </div>
        <br>
        <div class="mb-2 d-flex">
          <h3 class="font-weight-normal text-black" style="text-transform: uppercase;"><strong>{{$eskul->name}}</strong></h3>
        </div>
       
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h4 class="font-weight-normal text-black"><strong>Tentang Eskul:</strong> </h4>
          <span class="w-25 text-black media-body">{!! $eskul->content !!}.</span>
         
      </div>
    </div>

  </div>
 
@endsection