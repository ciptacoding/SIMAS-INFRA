@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('tambah.pengguna') }}"><button class="btn btn-primary rounded-lg">Tambah Pengguna </button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Pengguna</li>
@endsection
{{-- Breadcrumb --}}

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
               <td>
                  <span class="{{ $user->status === 1 ? 'badge badge-success' : 'badge badge-danger' }}">
                     {{ $user->status === 1 ? 'Aktif' : 'Non-Active' }}
                  </span>
               </td>
               <td>
                  @if ($user->status === 1)
                  <form action="{{ route('disabled.pengguna', $user->id) }}" method="POST">
                     @method('PATCH')
                     @csrf
                     <button type="submit" class="btn-danger rounded-lg" title="Disabled user">
                        <i class="fas fa-times fa-lg" style="color: #ffffff;"></i>
                     </button>
                  </form>
                  @else
                  <form action="{{ route('activated.pengguna', $user->id) }}" method="POST">
                     @method('PATCH')
                     @csrf
                     <button type="submit" class="btn-success rounded-lg" title="Activated user">
                        <i class="fas fa-check fa-sm" style="color: #ffffff;"></i>
                     </button>
                  </form>
                  @endif
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