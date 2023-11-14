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
<h4>Detail Aset Tower</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/aset-tower">Aset-Tower</a></li>
<li class="breadcrumb-item active" aria-current="page">Detail-Aset-Tower</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('main-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <div class="card-body">
      <div class="row">
         <div class="col-md-8">
            <div id="map"></div>
         </div>
         <div class="col-md-4">
            <h4>Nama: {{ $asetTower->tower->nama_tower }}</h4>
            <h6>Lokasi: {{ $asetTower->tower->lokasi_tower }}</h6>
            <h6>Status: {{ $asetTower->tower->status_tower }}</h6>
            <h6>Sparepart: {{ $asetTower->nama_sparepart }}</h6>
            <h6>Keterangan: {{ $asetTower->keterangan }}</h6>
         </div>
      </div>
   </div>
</div>
@endsection
{{-- Main Page --}}

@push('scripts')
<script>
   var map = L.map('map').setView([-8.381392, 115.189139], 9);
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   }).addTo(map);

   const getMarker = () => {
      $.ajax({
         url: `${window.location.href}`,
         type: 'GET',
         dataType: 'JSON',
         success: function(data){
            var marker = L.marker([data.latitude, data.longtitude]).addTo(map);
            marker.bindPopup(`<b>${data.nama_tower}</b><br>${data.lokasi_tower}.`).openPopup();
         }
      })
   }

   getMarker();
</script>
@endpush