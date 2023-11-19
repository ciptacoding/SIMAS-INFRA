@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Request Maintenance</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('maintenance.index') }}">Maintenance</a></li>
<li class="breadcrumb-item active" aria-current="page">Request-Maintenance</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('maintenance.simpan') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="ketua_tim">Ketua Tim</label>
                  <select name="ketua_tim" class="form-control select2bs4 @error('ketua_tim') is-invalid @enderror"
                     style="width: 100%;">
                     <option value="">Pilih Ketua Tim</option>
                     @foreach ($ketuaTim as $ketua)
                     <option value="{{ $ketua->id }}">{{ $ketua->username }}</option>
                     @endforeach
                  </select>
                  @error('ketua_tim')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="nama_team">Nama Team</label>
                  <input type="text" class="form-control @error('nama_team') is-invalid @enderror" id="nama_team"
                     name="nama_team" placeholder="masukkan nama tim" value="{{ old('nama_team') }}">
                  @error('nama_team')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="tugas">Tugas</label>
                  <input type="text" class="form-control @error('tugas') is-invalid @enderror" id="tugas" name="tugas"
                     placeholder="Masukkan tugas dari tim" value="{{ old('tugas') }}">
                  @error('tugas')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="jumlah_anggota">Jumlah Anggota</label>
                  <input type="text" class="form-control @error('jumlah_anggota') is-invalid @enderror"
                     id="jumlah_anggota" name="jumlah_anggota" placeholder="Masukkan jumlah anggota dari tim"
                     value="{{ old('jumlah_anggota') }}">
                  @error('jumlah_anggota')
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

@push('scripts')
<script>
   $(document).ready(function() {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
         theme: 'bootstrap4'
      });
   });
</script>
@endpush