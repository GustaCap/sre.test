@extends('layouts.app')

@section('content')
<div class="container container-register register-img">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3 card-register">
                <div class="row no-gutters card-size">
                  <div class="col-md-6 text">
                    <img src="https://images.pexels.com/photos/2040626/pexels-photo-2040626.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img" alt="...">
                    <div class="card-img-overlay text-center p-5">
                        <img src="https://png.pngtree.com/element_pic/00/16/07/115783931601b5c.jpg" class="card-img-top mb-3" style="width: 12rem;" alt="">
                        <h1>Welcome Back</h1>
                        <h3>Saga Real Estate...</h3>
                        <p >We give you the warmest welcome to our website</p>
                      </div>
                </div>
                  <div class="col-md-6 p-5 ">
                    <div class="card-body card-center-item">
                        <div class="card-title p-3 text-center">
                            <h1>SIGN UP</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('user.create') }}" method="post">
                                    @csrf

                                    <div class="form-group row justify-content-center">
                                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                                            <div class="col-md-10">
                                                    <label for="firstName" >{{ __('Firts Name') }}</label>
                                                <input id="firstName" type="text" class="input-register-style form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                                                @error('firstName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-center">
                                                {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label> --}}

                                                <div class="col-md-10">
                                                        <label for="lastName" >{{ __('Last Name') }}</label>
                                                    <input id="lastName" type="text" class="input-register-style form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                                    @error('lastName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-center">
                                                {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label> --}}

                                                <div class="col-md-10">
                                                        <label for="email" >{{ __('Email') }}</label>
                                                    <input id="email" type="text" class="input-register-style form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-center">
                                                    {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Passwork') }}</label> --}}

                                                    <div class="col-md-10">
                                                            <label for="password" >{{ __('Passwork') }}</label>
                                                        <input id="password" type="text" class="input-register-style form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block input-login-style mt-5">{{ __('Login') }}</button>
                                            </form>

                            </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
