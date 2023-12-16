@extends('Layouts.Main')

@section('title')
<h1 class="m-0">Dashboard</h1>
@endsection

@section('main-page')
<!-- Small boxes (Stat box) -->

<!-- first row -->
<div class="row">
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
         <div class="inner">
            <h3>{{ $pengguna }}</h3>

            <p>Pengguna</p>
         </div>
         <div class="icon">
            <i class="fas fa-user-friends"></i>
         </div>
         <a href="/pengguna" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
         <div class="inner">
            <h3>{{ $dataTower }}</h3>

            <p>Data Tower</p>
         </div>
         <div class="icon">
            <i class="fas fa-broadcast-tower"></i>
         </div>
         <a href="/tower" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
         <div class="inner">
            <h3>{{ $asetTower }}</h3>

            <p>Aset Tower</p>
         </div>
         <div class="icon">
            <i class="fas fa-satellite-dish"></i>
         </div>
         <a href="/aset-tower" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
         <div class="inner">
            <h3>{{ $team }}</h3>

            <p>Data Team</p>
         </div>
         <div class="icon">
            <i class="fas fa-users-cog"></i>
         </div>
         <a href="/teams" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
</div>
<!-- first row -->

<!-- second row -->
<div class="row">
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-secondary">
         <div class="inner">
            <h3>{{ $maintenance }}<sup style="font-size: 20px">%</sup></h3>

            <p>Maintenance</p>
         </div>
         <div class="icon">
            <i class="fas fa-cogs"></i>
         </div>
         <a href="/maintenances" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
         <div class="inner">
            <h3>{{ $maintenance }}</h3>

            <p>Notifikasi</p>
         </div>
         <div class="icon">
            <i class="fas fa-bell"></i>
         </div>
         <a href="/notifications" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-dark">
         <div class="inner">
            <h3>{{ $laporan }}</h3>

            <p>Data Laporan</p>
         </div>
         <div class="icon">
            <i class="fas fa-envelope-open-text"></i>
         </div>
         <a href="/laporan-maintenance" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
</div>
<!-- second row -->
@endsection