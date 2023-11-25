@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('laporan.tambah') }}"><button class="btn btn-primary rounded-lg">Buat Laporan</button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Data Laporan</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Data Laporan Request Maintenances</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Author</th>
               <th>Judul</th>
               <th>Jenis Laporan</th>
               <th>Tanggal</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($reqMaintenances as $reqMaintenance )
            <tr>
               <td>{{ $reqMaintenance->user->username }}</td>
               <td>{{ $reqMaintenance->judul }}</td>
               <td>{{ $reqMaintenance->jenis_laporan }}</td>
               <td>{{ $reqMaintenance->tanggal }}</td>
               <td>
                  <a href="{{ route('laporan.edit', $reqMaintenance->id) }}" class="btn btn-sm btn-warning">
                     <i class="fas fa-tools" style="color: #ffffff"></i>
                  </a>
                  <a href="{{ route('laporan.download', $reqMaintenance->id) }}" class="btn btn-sm btn-info"
                     title="Download PDF">
                     <i class="fas fa-download"></i>
                  </a>
                  <form action="{{ route('laporan.delete', $reqMaintenance->id) }}" method="POST" class="d-inline">
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