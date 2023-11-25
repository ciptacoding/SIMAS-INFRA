@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('maintenance.tambah') }}"><button class="btn btn-primary rounded-lg">Request Maintenance</button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Maintenance</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Data Tabel Maintenance</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Tim Pelaksana</th>
               <th>Nama Tower</th>
               <th>Tanggal</th>
               <th>Status</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($maintenances as $maintenance )
            <tr>
               <td>{{ $maintenance->team->nama_team }}</td>
               <td>{{ $maintenance->tower->nama_tower }}</td>
               <td>{{ $maintenance->tanggal }}</td>
               <td>{{ $maintenance->status }}</td>
               <td>
                  <a href="{{ route('maintenance.detail', $maintenance->id) }}" class="btn btn-sm btn-info">
                     <i class="fas fa-info-circle"></i>
                  </a>
                  <form action="{{ route('maintenance.delete', $maintenance->id) }}" method="POST" class="d-inline">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-sm btn-danger btn-submit"><i
                           class="fas fa-trash-alt"></i></button>
                  </form>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- Main Page --}}

@push('scripts')
<script>
   $(function () {
      $('#datatables').DataTable({
         "paging": true,
         "lengthChange": true,
         "searching": true,
         "ordering": true,
         "info": true,
         "autoWidth": true,
         "responsive": true,
      });
   });

   $('.btn-submit').click(function (e) {
      e.preventDefault();
      const deleteForm = $(this).closest('form');

      Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, delete it!"
      }).then((result) => {
         if (result.isConfirmed) {
               deleteForm.submit();
            }
         });
      });
</script>
@endpush