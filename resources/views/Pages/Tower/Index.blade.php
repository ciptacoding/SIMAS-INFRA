@extends('Layouts.Main')

@push('styles')
<style>
   #map {
      height: 400px;
   }
</style>
@endpush

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('tambah.pengguna') }}"><button class="btn btn-primary rounded-lg">Tambah Tower</button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Data-Tower</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Tabel Data Tower</h3>
   </div>
   <div class="card-body">
      <div id="map"></div>
      <table id="datatables" class="table table-bordered table-striped mt-4">
         <thead>
            <tr>
               <th>Nama Tower</th>
               <th>Lokasi Tower</th>
               <th>Status Tower</th>
               <th>Latitude</th>
               <th>Longtitude</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            {{-- @foreach ($users as $user )
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
            @endforeach --}}
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- Main Page --}}

@push('scripts')
<script>
   // $(function () {
   // $('#datatables').DataTable({
   //    "paging": true,
   //    "lengthChange": true,
   //    "searching": true,
   //    "ordering": true,
   //    "info": true,
   //    "autoWidth": true,
   //    "responsive": true,
   //    });
   // });

   var map = L.map('map').setView([-8.381392, 115.189139], 9);
   L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   }).addTo(map);

   var popup = L.popup();
   
   function onMapClick(e) {
      popup
      .setLatLng(e.latlng)
      .setContent("You clicked the map at " + e.latlng.toString())
      .openOn(map);
   }
   
   map.on('click', onMapClick);
</script>
@endpush