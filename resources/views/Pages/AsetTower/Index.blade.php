@extends('Layouts.Main')

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('aset.tambah') }}"><button class="btn btn-primary rounded-lg">Tambah Aset </button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Aset-Tower</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Data Tabel Aset Tower</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nama Tower</th>
               <th>Lokasi Tower</th>
               <th>Sparepart</th>
               <th>Keterangan</th>
               <th>Status Tower</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($assetsTower as $asetTower )
            <tr>
               <td>{{ $asetTower->tower->nama_tower }}</td>
               <td>{{ $asetTower->tower->lokasi_tower }}</td>
               <td>{{ $asetTower->nama_sparepart }}</td>
               <td>{{ $asetTower->keterangan }}</td>
               <td>
                  <span
                     class="{{ $asetTower->tower->status_tower === 'aktif' ? 'badge badge-success' : 'badge badge-danger' }}">
                     {{ $asetTower->tower->status_tower}}
                  </span>
               </td>
               <td>
                  <a href="{{ route('aset.edit', $asetTower->id) }}" class="btn btn-sm btn-warning">
                     <i class="fas fa-tools" style="color: #ffffff"></i>
                  </a>
                  <a href="{{ route('aset.edit', $asetTower->id) }}" class="btn btn-sm btn-info">
                     <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="{{ route('aset.edit', $asetTower->id) }}" class="btn btn-sm btn-danger">
                     <i class="fas fa-trash-alt"></i>
                  </a>
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
</script>
@endpush