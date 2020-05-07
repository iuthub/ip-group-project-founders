@extends('layouts.app')

@section('content')
<div class="  container-fluid  easy"  >
   <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <dir class="col-md-4 col-sm-4 col-xs-12" >
         <form  class="yeah" method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login</h1>
            <div class="form-group">
               <input   placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
               @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <div class="form-group">
               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
               @error('password')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
      </dir>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
   </div>
</div>




@endsection
