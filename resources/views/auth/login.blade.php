@extends('layouts/auth')
@section('title', 'Login')
@section('content')
<div class="main"> 
        <!-- Sing in  Form -->
        <section class="sign-in">
           {{--  <div class="container"> --}}
                <div class="signin-content">
                    <div class="signin-image">
                      <figure><img src="{{asset('site/images/undraw_bookmarks_r6up.svg')}}" alt="Login Image"></figure>
                    </div>

                    <div class="signin-form">
                        <div class="form-title" style=" line-height: 0.5">
                        <h3 style="color: #4285F4;">E-Voting OSIS SMKN 5 Bandung</h3>
                        <h2>Selamat Datang</h2>
                        <sub style="width: 30px;"><strong>Silahkan masukan Nomer Induk Siswa Anda</strong></sub>
                        </div>
                        <form method="POST" action="{{ route('login')}}">
                            @csrf
                            <div class="form-group @error('nis') is-invalid @enderror">
                                <label for="nis"><i class="icon-user"></i></label>
                                <input type="number"  name="nis" id="nis" value="{{old('nis')}}" placeholder="Masukan Nomer Induk Siswa" autocomplete="off" />
                                @error('nis')
                              <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                            </div>  
                           
                            <div class="form-group form-button">
                                <button type="submit" class="form-submit">LOGIN</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            {{-- </div> --}}
        </section>
        </div>
@endsection

 