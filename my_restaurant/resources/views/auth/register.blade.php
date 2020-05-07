@extends('layouts.app')

@section('content')
<div class="container-fluid easy">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <dir class="col-md-4 col-sm-4 col-xs-12">
            <form class="yeah" method="POST" action="{{ route('register') }}">
                 @csrf
                <h1>Register</h1>
                <div class="form-group">
                    <input  class="form-control"  placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                </div>
                <div class="form-group">
                    <input  class="form-control"  placeholder="Email"id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror

                </div>
                <div class="form-group">
                    <input type="password" class="form-control"  placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />

                </div>
                <button type="submit" class="registerbtn btn-success">Register</button>
            </form>
        </dir>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>



@endsection
