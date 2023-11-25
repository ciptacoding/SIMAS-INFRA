@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Buat Laporan</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Buat Laporan</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('laporan.simpan') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="jenis_laporan">Pilih Jenis Laporan</label>
                  <select name="jenis_laporan"
                     class="form-control select2bs4 @error('jenis_laporan') is-invalid @enderror" style="width: 100%;">
                     <option value="">Pilih Jenis Laporan</option>
                     <option value="maintenance">Maintenance</option>
                     <option value="sparepart">Sparepart</option>
                     <option value="requestMaintenance">Request Maintenance</option>
                     <option value="lokasi">Lokasi Tower</option>
                     <option value="team">Data Team</option>
                  </select>
                  @error('jenis_laporan')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                     placeholder="Masukkan judul dari laporan" value="{{ old('judul') }}">
                  @error('judul')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                     name="tanggal" placeholder="Masukkan tanggal" value="{{ old('tanggal') }}">
                  @error('tanggal')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <label for="content">Konten</label>
                  <textarea id="summernote" name="content" id="content"
                     class="form-control @error('content') is-invalid @enderror">
                     Tuliskan <em>dokumen</em> <u>laporan</u> <strong>disini</strong>
                  </textarea>
                  @error('content')
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
<script>
   Swal.fire({
      icon: "success",
      title: "Success...",
      text: "Laporan berhasil dibuat!",
   });
</script>
@endif

<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>
   $(document).ready(function() {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
         theme: 'bootstrap4'
      });
   });

   $(function () {
      // Summernote
      $('#summernote').summernote()
   });
</script>
@endpush