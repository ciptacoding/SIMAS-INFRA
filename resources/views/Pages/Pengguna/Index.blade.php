@extends('Layouts.Main')

{{-- Page Title --}}
@section('title')
<h1 class="m-0">Pengguna</h1>
@endsection
{{-- Page Title --}}

{{-- Main Page --}}
@section('main-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Tabel Data Pengguna</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Role</th>
               <th>Username</th>
               <th>Email</th>
               <th>Whatsapp</th>
               <th>Status</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($users as $user )
            <tr>
               <td>{{ $user->role->nama }}</td>
               <td>{{ $user->username }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->whatsapp }}</td>
               <td>{{ $user->status }}</td>
               <td>
                  <button class="btn-danger rounded-lg">✖️</button>
                  <button class="btn-success rounded-lg">✔️</button>
               </td>

            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- Main Page --}}

{{-- Script Datatables --}}
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
</script>
@endpush
{{-- Script Datatables --}}