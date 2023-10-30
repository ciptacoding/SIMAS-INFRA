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
            <h3>150</h3>

            <p>New Orders</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
         <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
         </div>
         <div class="icon">
            <i class="ion ion-stats-bars"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
         <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
         </div>
         <div class="icon">
            <i class="ion ion-person-add"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
         <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
         </div>
         <div class="icon">
            <i class="ion ion-pie-graph"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
         </div>
         <div class="icon">
            <i class="ion ion-stats-bars"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
         <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
         </div>
         <div class="icon">
            <i class="ion ion-person-add"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-dark">
         <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
         </div>
         <div class="icon">
            <i class="ion ion-pie-graph"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
</div>
<!-- second row -->
@endsection