@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Edit Aset Tower</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/aset-tower">Aset-Tower</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit-Aset-Tower</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('aset.update', $asetTower->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="nama_sparepart">Nama Sparepart</label>
                  <input type="text" class="form-control @error('nama_sparepart') is-invalid @enderror"
                     id="nama_sparepart" name="nama_sparepart"
                     placeholder="contoh: kabel, cctv, perangkat komunikasi, dll"
                     value="{{ old('nama_sparepart', $asetTower->nama_sparepart) }}">
                  @error('nama_sparepart')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan"
                     name="keterangan" placeholder="Masukkan keterangan terkait sparepart dan tower"
                     value="{{ old('keterangan', $asetTower->keterangan) }}">
                  @error('keterangan')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="tower_id">Nama Tower</label>
                  <select name="tower_id" class="form-control select2bs4 @error('tower_id') is-invalid @enderror"
                     style="width: 100%;">
                     <option selected value="{{ $asetTower->tower_id }}">{{ $asetTower->tower->nama_tower }}</option>
                     @foreach ($towers as $tower)
                     <option value="{{ $tower->id }}">{{ $tower->nama_tower }}</option>
                     @endforeach
                  </select>
                  @error('tower_id')
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