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
<h4>Data Tower</h4>
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
      <h3 class="card-title">Peta Dan Tabel Tower</h3>
   </div>
   <div class="card-body">
      <div id="map" class="mb-4"></div>
      <table id="datatables" class="table table-bordered table-striped mt-4">
         <thead>
            <tr>
               <th>Nama Tower</th>
               <th>Lokasi Tower</th>
               <th>Latitude</th>
               <th>Longtitude</th>
               <th>Status Tower</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($towers as $tower )
            <tr>
               <td>{{ $tower->nama_tower }}</td>
               <td>{{ $tower->lokasi_tower }}</td>
               <td>{{ $tower->latitude }}</td>
               <td>{{ $tower->longtitude }}</td>
               <td>
                  <span class="{{ $tower->status_tower === 'aktif' ? 'badge badge-success' : 'badge badge-danger' }}">
                     {{ $tower->status_tower}}
                  </span>
               </td>
               <td><a href="#" class="btn btn-sm btn-warning"><i class="fas fa-tools"></i> Edit</a>
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

   var map = L.map('map').setView([-8.381392, 115.189139], 9);
   L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
   maxZoom: 19,
   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   }).addTo(map);

   function getMarkers() {
      $.ajax({
         url: '/markers',
         type: 'GET',
         dataType: 'json',
         success: function(data){
            for(const item of data){
               var marker = L.marker([item.latitude, item.longtitude]).addTo(map);
               marker.bindPopup(`<b>${item.nama_tower}</b><br>${item.lokasi_tower}.`).openPopup();
            }
         }
      });
   }

   getMarkers();

   var popup = L.popup();
   
   function onMapClick(e) {
      popup
      .setLatLng(e.latlng)
      .setContent("<p class='mb-1'>Apakah anda ingin menambah tower pada lokasi ini?</p>" 
      + e.latlng.toString() + 
      `<br> <button class='mt-1 btn btn-sm btn-primary'><a href='/tambah-tower/${e.latlng.lat}/${e.latlng.lng}' class='text-white'>Tambah Tower</a></button>`)
      .openOn(map);
   }
   
   map.on('click', onMapClick);
</script>
@endpush