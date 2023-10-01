@extends('Layouts.Main')

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><a href="#">Overview</a></li>
@endsection

@section('Page-Title')
<div class="col">
   <div class="page-pretitle">
      Overview
   </div>
   <h2 class="page-title">
      Data Dashboard
   </h2>
</div>
@endsection

@section('Page-Body')

<div class="row row-cards">

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-yellow"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-yellow">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-hexagon" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                     <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741" />
                     <path
                        d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Pengguna</h3>
               <span class="fs-1 fw-bold text-yellow">
                  25
               </span>
               <p class="text-muted">
                  Total pengguna yang ditampilkan adalah seluruh pengurus maupun admin yang memiliki hak akses untuk
                  masuk
                  ke sistem.
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-blue"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-blue">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-stats" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                     <path d="M18 14v4h4" />
                     <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                     <path d="M15 3v4" />
                     <path d="M7 3v4" />
                     <path d="M3 11h16" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Periode Kepengurusan</h3>
               <span class="fs-1 fw-bold text-blue">
                  26
               </span>
               <p class="text-muted">
                  Total periode kepengurusan yang ditampilkan adalah seluruh periode pengurus dari awal terbentuknya UKM
                  PMK
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-pink"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-pink">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                     <path d="M4 6l8 0" />
                     <path d="M16 6l4 0" />
                     <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                     <path d="M4 12l2 0" />
                     <path d="M10 12l10 0" />
                     <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                     <path d="M4 18l11 0" />
                     <path d="M19 18l1 0" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Jenis Kegiatan</h3>
               <span class="fs-1 fw-bold text-pink">
                  29
               </span>
               <p class="text-muted">
                  Total jenis kegiatan yang ditampilkan diatas adalah seluruh kegiatan-kegiatan yang dilaksanakan rutin
                  atau pada acara tertentu.
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-lime"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-lime">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                     <path d="M3 7l9 6l9 -6" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Surat Masuk</h3>
               <span class="fs-1 fw-bold text-lime">
                  14
               </span>
               <p class="text-muted">
                  Total surat masuk yang ditampilkan merupakan seluruh pengarsipan surat masuk dari semua pihak internal
                  maupun eksternal.
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-red"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-red">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                     <path d="M3 6l9 6l9 -6" />
                     <path d="M15 18h6" />
                     <path d="M18 15l3 3l-3 3" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Surat Keluar</h3>
               <span class="fs-1 fw-bold text-red">
                  14
               </span>
               <p class="text-muted">
                  Total surat keluar yang ditampilkan diatas merupakan seluruh dokumen pengarsipan surat keluar dari
                  pihak
                  internal UKM PMK.
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-purple"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-purple">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-article" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                     <path d="M7 8h10" />
                     <path d="M7 12h10" />
                     <path d="M7 16h10" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Proposal</h3>
               <span class="fs-1 fw-bold text-purple">
                  19
               </span>
               <p class="text-muted">
                  Total proposal yang ditampilkan diatas merupakan seluruh dokumen pengarsipan proposal internal dari
                  UKM
                  PMK.
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-orange"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-orange">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-analytics" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                     <path d="M9 17l0 -5" />
                     <path d="M12 17l0 -1" />
                     <path d="M15 17l0 -3" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah LPJK</h3>
               <span class="fs-1 fw-bold text-orange">
                  23
               </span>
               <p class="text-muted">
                  Total LPJK yang ditampilkan adalah seluruh pengarsipan dokumen laporan pertanggungjawaban
                  keuangan pada UKM PMK.
               </p>
            </div>
         </div>
      </a>
   </div>

   <div class="col-lg-6 col-xl-4 col-xxl-3">
      <a href="#" style="text-decoration: none">
         <div class="card custom-cards">
            <div class="card-status-start bg-cyan"></div>
            <div class="card-stamp">
               <div class="card-stamp-icon bg-cyan">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                     <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                     <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                     <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                     <path d="M11 6l9 0" />
                     <path d="M11 12l9 0" />
                     <path d="M11 18l9 0" />
                  </svg>
               </div>
            </div>
            <div class="card-body">
               <h3 class="card-title">Jumlah Log Aktivitas</h3>
               <span class="fs-1 fw-bold text-cyan">
                  20
               </span>
               <p class="text-muted">
                  Total log aktivitas yang ditampilkan merupakan seluruh aktivitas yang dilakukan pengurus maupun admin
                  dari UKM
                  PMK
               </p>
            </div>
         </div>
      </a>
   </div>

</div>

<div class="card mt-5">
   <div class="card-body">
      <div id="chart-demo-area" class="chart-lg"></div>
   </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/apexcharts/dist/apexcharts.min.js" defer>
</script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
       window.ApexCharts && (new ApexCharts(document.getElementById('chart-demo-area'), {
         chart: {
           type: "area",
           fontFamily: 'inherit',
           height: 240,
           parentHeightOffset: 0,
           toolbar: {
             show: false,
           },
           animations: {
             enabled: true
           },
         },
         dataLabels: {
           enabled: true,
         },
         fill: {
           opacity: .16,
           type: 'solid'
         },
         stroke: {
           width: 2,
           lineCap: "round",
           curve: "smooth",
         },
         series: [{
           name: "series1",
           data: [15, 4, 9, 17, 14, 18, 24]
         }, {
           name: "series2",
           data: [23, 4, 10, 23, 14, 12, 19]
         }],
         tooltip: {
           theme: 'dark'
         },
         grid: {
           padding: {
             top: -20,
             right: 0,
             left: -4,
             bottom: -4
           },
           strokeDashArray: 4,
         },
         xaxis: {
           labels: {
             padding: 0,
           },
           tooltip: {
             enabled: false
           },
           axisBorder: {
             show: false,
           },
           type: 'datetime',
         },
         yaxis: {
           labels: {
             padding: 8
           },
         },
         labels: [
           '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27'
         ],
         colors: [tabler.getColor("primary"), tabler.getColor("purple")],
         legend: {
           show: true,
           position: 'bottom',
           offsetY: 12,
           markers: {
             width: 10,
             height: 10,
             radius: 100,
           },
           itemMargin: {
             horizontal: 8,
             vertical: 8
           },
         },
       })).render();
     });
</script>
@endpush
@endsection