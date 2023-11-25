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
                  <label for="tower_id">Nama Tower</label>
                  <select name="tower_id" class="form-control select2bs4 @error('tower_id') is-invalid @enderror"
                     style="width: 100%;">
                     <option value="">Pilih Nama Tower</option>
                     @foreach ($towers as $tower)
                     <option value="{{ $tower->id }}">{{ $tower->nama_tower }}</option>
                     @endforeach
                  </select>
                  @error('tower_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="team_id">Tim Yang Ditugaskan</label>
                  <select name="team_id" class="form-control select2bs4 @error('team_id') is-invalid @enderror"
                     style="width: 100%;">
                     <option value="">Pilih Nama Tim</option>
                     @foreach ($teams as $team)
                     <option value="{{ $team->id }}">{{ $team->nama_team }}</option>
                     @endforeach
                  </select>
                  @error('team_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="tanggal">Tanggal Pelaksanaan</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                     name="tanggal" placeholder="Masukkan tanggal pelaksanaan" value="{{ old('tanggal') }}">
                  @error('tanggal')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan"
                     name="keterangan" placeholder="Masukkan keterangan perbaikan" value="{{ old('keterangan') }}">
                  @error('keterangan')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <label for="rincian_perbaikan">Rincian Perbaikan</label>
                  <textarea id="summernote" name="rincian_perbaikan" id="rincian_perbaikan"
                     class="form-control @error('rincian_perbaikan') is-invalid @enderror">
                                             Tuliskan <em>rincian</em> <u>perbaikan</u> <strong>disini</strong>
                                          </textarea>
                  @error('rincian_perbaikan')
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

   $(function () {
      // Summernote
      $('#summernote').summernote()
   });
</script>
@endpush