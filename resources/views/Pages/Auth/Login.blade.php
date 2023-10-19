@extends('Layouts.Guest')

@section('guest-layout')
<div class="login-box">
   <div class="login-logo">
      <a href="#"><img src="{{ asset('Logo/Logo-TELKOM.png') }}" width="200" alt="logo"></a>
      <p class="text-sm">Sistem Informasi Manajemen Aset PT. Telkom Infra</p>
   </div>
   <!-- /.login-logo -->
   <div class="card">
      <div class="card-body login-card-body">
         <p class="login-box-msg">Sign in to start your session</p>

         <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
               <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                  name="email">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
               @error('email')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
            </div>
            <div class="input-group mb-3">
               <input type="password" class="form-control" placeholder="Password" name="password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-8">
                  <div class="icheck-primary">
                     <input type="checkbox" id="remember" name="remember">
                     <label for="remember">
                        Remember Me
                     </label>
                  </div>
               </div>
               <!-- /.col -->
               <div class="col-4">
                  <button type="submit" class="btn btn-dark btn-block">Sign In</button>
               </div>
               <!-- /.col -->
            </div>
         </form>
         <!-- /.social-auth-links -->

         <p class="mb-1">
            <a href="#">I forgot my password</a>
         </p>
      </div>
      <!-- /.login-card-body -->
   </div>
</div>
<!-- /.login-box -->
@endsection