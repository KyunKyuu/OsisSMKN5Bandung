@extends('layouts/site/main')

@section('title')
Eskul {{$eskul->name}} 
@endsection

@section('contect')
<br><br><br><br><br><br><br>
<div class="container">

    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
         <img src="{{$eskul->gambar()}}" class="w-100">
        </div>
        
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
      <br>
        <h3 class="font-weight-normal" style="text-transform: uppercase;"><strong>{{$eskul->name}}</strong></h3> <hr>

        <h4 class="font-weight-normal">Tentang Eskul:</h4>
           <span style="font-size: 23px;color: black;">{!! $eskul->content !!}.</span>
         
      </div>
    </div>

  </div>
 <br><br><br><br><br><br>
@endsection