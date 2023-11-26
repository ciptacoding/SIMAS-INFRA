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
         @foreach ($notifications as $notification)
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
                  {{ $notification->keterangan }}
               </div>
               <div class="timeline-footer d-flex">
                  <a class="btn btn-primary btn-sm mr-1"
                     href="{{ route('notification.detail', $notification->id) }}">Baca
                     Detail</a>
                  @if($notification->status === 'Sedang direview')
                  <form action="{{ route('notification.accept', $notification->id) }}" class="mr-1 form-accept"
                     method="POST">
                     @method('PATCH')
                     @csrf
                     <button class="btn btn-success btn-sm">Setuju</button>
                  </form>
                  <form action="{{ route('notification.decline', $notification->id) }}" class="mr-1 form-decline"
                     method="POST">
                     @method('PATCH')
                     @csrf
                     <button class="btn btn-danger btn-sm">Tolak</button>
                  </form>
                  @endif
               </div>
            </div>
         </div>
         <!-- END timeline item -->
         @endforeach

      </div>
   </div>
   <!-- /.col -->
</div>
@endsection
{{-- Main Page --}}

@push('scripts')
<script>
   $('.btn-success').click(function (e) {
      e.preventDefault();
      const accept = document.querySelector('.form-accept');

      Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, accept!"
      }).then((result) => {
         if (result.isConfirmed) {
            accept.submit();
         }
      });
   });

   $('.btn-danger').click(function (e) {
      e.preventDefault();
      const decline = document.querySelector('.form-decline');

      Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, accept!"
      }).then((result) => {
         if (result.isConfirmed) {
            decline.submit();
         }
      });
   });
</script>
@endpush