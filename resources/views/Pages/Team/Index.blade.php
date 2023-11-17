@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('teams.tambah') }}"><button class="btn btn-primary rounded-lg">Tambah Team</button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Data Teams</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Data Tabel Teams</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nama Team</th>
               <th>Ketua Team</th>
               <th>Tugas</th>
               <th>Jumlah Anggota</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($teams as $team )
            <tr>
               <td>{{ $team->nama_team }}</td>
               <td>{{ $team->user->username }}</td>
               <td>{{ $team->tugas }}</td>
               <td>{{ $team->jumlah_anggota }}</td>
               <td>
                  <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">
                     <i class="fas fa-tools" style="color: #ffffff"></i>
                  </a>
                  <a href="{{ route('teams.detail', $team->id) }}" class="btn btn-sm btn-info">
                     <i class="fas fa-info-circle"></i>
                  </a>
                  <form action="{{ route('teams.delete', $team->id) }}" method="POST" class="d-inline">
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