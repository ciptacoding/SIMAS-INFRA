@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Form Tambah Pengguna</h4>
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
      <h3 class="card-title">Select2 (Default Theme)</h3>

      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
         </button>
      </div>
   </div>
   <!-- /.card-header -->
   <form action="">
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                     <option selected="selected">Select</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                  </select>
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
               </div>
            </div>

         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
               </div>
            </div>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </form>
</div>
@endsection
{{-- Main Page --}}

@push('scripts')
<script>
   $(document).ready(function() {
      //Initialize Select2 Elements
      $('.select2').select2()
      
      // //Initialize Select2 Elements
      $('.select2bs4').select2({
      theme: 'bootstrap4'
      })

      bsCustomFileInput.init();
   });
</script>
@endpush