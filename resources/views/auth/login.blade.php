@extends('layouts.app')

@section('content')
<div id="container-login" class="container login-style">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xs-8">
            <div class="card card-style">
                    <img src="https://png.pngtree.com/element_pic/00/16/07/115783931601b5c.jpg" class="card-img-top mb-1" style="width: 12rem;" alt="">

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-xs-8">
                                <div class="form-group">
                                        <input id="email" type="email" class="form-control mb-2 input-login-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                        <input id="email" type="email" class="form-control input-login-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Passwork">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-block input-login-style">{{ __('Login') }}</button>
                                 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
