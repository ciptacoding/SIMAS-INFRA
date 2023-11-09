@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Tambah Pengguna</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/pengguna">Pengguna</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah-Pengguna</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('simpan.pengguna') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                     name="username" placeholder="Masukkan username">
                  @error('role_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                     placeholder="Masukkan email">
                  @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="whatsapp">Whatsapp</label>
                  <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp"
                     name="whatsapp" placeholder="Masukkan nomor Whatsapp">
                  @error('whatsapp')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>
         <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4">Submit</button>
      </div>
   </form>
</div>
@endsection
{{-- Main Page --}}