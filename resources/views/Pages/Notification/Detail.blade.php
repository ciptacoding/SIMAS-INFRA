@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<h4>Notifikasi</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Notifikasi</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="row">
   <div class="col-md-12">
      <!-- The time line -->
      <div class="timeline">
         <!-- timeline time label -->
         <div class="time-label">
            <span class="bg-red">{{ $notification->tanggal }}</span>
         </div>
         <!-- /.timeline-label -->
         <!-- timeline item -->
         <div>
            <i class="fas fa-envelope bg-blue"></i>
            <div class="timeline-item">
               <span class="time"><i class="fas fa-clock"></i> {{ $notification->updated_at }}</span>
               <h3 class="timeline-header">
                  <a href="#">Perbaikan {{ $notification->tower->nama_tower }}</a> oleh {{
                  $notification->team->nama_team }}
               </h3>

               <div class="timeline-body">
                  {{ $notification->keterangan }} <br />
                  {!! $notification->rincian_perbaikan !!}
               </div>
               <div class="timeline-footer d-flex">
                  <a class="btn btn-primary btn-sm mr-1" href="{{ route('notification.index') }}">Kembali</a>
               </div>
            </div>
         </div>
         <!-- END timeline item -->

      </div>
   </div>
   <!-- /.col -->
</div>
@endsection
{{-- Main Page --}}