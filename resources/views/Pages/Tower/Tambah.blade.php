@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Tambah Tower</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/tower">Tower</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah-Tower</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('tower.simpan') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="nama_tower">Nama Tower</label>
                  <input type="text" class="form-control @error('nama_tower') is-invalid @enderror" id="nama_tower"
                     name="nama_tower" placeholder="Masukkan nama tower" value="{{ old('nama_tower') }}">
                  @error('nama_tower')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="lokasi_tower">Lokasi Tower</label>
                  <input type="text" class="form-control @error('lokasi_tower') is-invalid @enderror" id="lokasi_tower"
                     name="lokasi_tower" placeholder="Masukkan lokasi tower (nama daerah)"
                     value="{{ old('lokasi_tower') }}">
                  @error('lokasi_tower')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude"
                     name="latitude" value="{{ old($dataLocation['latitude'], $dataLocation['latitude']) }}"
                     placeholder="Masukkan latitude" readonly>
                  @error('latitude')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="longtitude">Longtitude</label>
                  <input type="text" class="form-control @error('longtitude') is-invalid @enderror" id="longtitude"
                     name="longtitude" value="{{ old($dataLocation['longtitude'], $dataLocation['longtitude']) }}"
                     placeholder="Masukkan longtitude" readonly>
                  @error('longtitude')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="status_tower">Status Tower</label>
                  <select name="status_tower" class="form-control @error('status_tower') is-invalid @enderror"
                     style="width: 100%;">
                     <option value="aktif">Aktif</option>
                     <option value="maintenance">Maintenance</option>
                     <option value="nonaktif">Nonaktif</option>
                  </select>
                  @error('status_tower')
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