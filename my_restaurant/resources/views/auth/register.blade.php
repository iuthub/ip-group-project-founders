@extends('layouts.app')

@section('content')
<div class="container-fluid easy">
    <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-2 col-xs-2"></div>
        <dir class="col-lg-4 col-md-6 col-sm-8 col-xs-8">
            <form class="yeah" method="POST" action="{{ route('register') }}">
                 @csrf
                <h1>Register</h1>
                <div class="form-group">
                    <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </dir>
        <div class="col-lg-4 col-md-3 col-sm-2 col-xs-2"></div>
    </div>
</div>



@endsection
