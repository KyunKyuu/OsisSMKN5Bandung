@extends('layouts/dashboard/main')

@section('content')
   <div class="content">
      <div class="col-md">
       <div class="card-header">
                <h4 class="card-title"> Detail Kandidat Calon Ketua Osis</h4>
               </div>
      	 <div class="card">
     <div class="card-body">
      <div class="row">
           <div class="col-md-7">
             

               <div class="form-group" >
                <b>Nomer Urut</b>
                <p>{{$kandidat->nomer_urut}}</p>
               </div>
                <hr>
                <div class="form-group" >
          		<b>Nama Kandidat</b>
          		<p>{{$kandidat->name}}</p>
          		</div>
          		<hr>
          		<div class="form-group" >
          		<b>Kelas</b>
          		<p>{{$kandidat->kelas}}</p>
          		</div>
          		<hr>
          		<div class="form-group" >
          		<b>Visi</b>
          		<p>{{$kandidat->visi}}</p>
          		</div>
          		<hr>
          		<div class="form-group" >
          		<b>Misi</b>
          		<p>{{$kandidat->misi}}</p>
          		</div>
          		<a href="{{route('edit_kandidat', $kandidat->id)}}" class="btn btn-primary" style="color: white;">Edit</a> 
                 </a> 
                 <form action="{{route('destroy_kandidat', $kandidat->id)}}" method="post">
                  			@csrf
                  			@method('delete')
                  		<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin Dihapus?')">
                  		  Hapus
                  			</button>
                  </form>
           </div>
           <div class="col-md-5">
           		<img src="{{asset("storage/".$kandidat->gambar)}}" width="520">

           </div>

        </div>
    </div>
      </div>
    </div>
  </div>
</div>
@endsection