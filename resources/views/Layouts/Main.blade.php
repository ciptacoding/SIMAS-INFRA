<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Dashboard - SIMAS</title>
   <!-- CSS files -->
   <style>
      @import url('https://rsms.me/inter/inter.css');

      :root {
         --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }

      body {
         font-feature-settings: "cv03", "cv04", "cv11";
      }

      #sidebar {
         background-color: #dc4e41 !important;
      }
   </style>
   <link href="{{ asset('dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   @stack('styles')
   {{-- @notifyCss --}}
</head>

<body>

   <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>

   {{-- alert flash message--}}
   {{-- <div class="position-absolute top-0 end-0" style="z-index: 100">
      <x-notify::notify />
   </div> --}}
   {{-- alert flash message --}}

   <!-- Sidebar -->
   @include('Layouts.MenuBar.Sidebar')
   <!--Sidebar-->

   <!-- HeaderBar -->
   @include('Layouts.HeaderBar.Index')
   <!-- HeaderBar-->

   <div class="page-wrapper">

      <!-- Page header -->
      <div class="page-header d-print-none">
         <div class="container-xl">
            <div class="row g-2 align-items-center">

               {{-- page title --}}
               @yield('Page-Title')
               {{-- page title --}}

               <!-- Page title actions -->
               <div class="col-auto ms-auto d-print-none">
                  @yield('Button-Add')
               </div>
            </div>
         </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
         <div class="container-xl">
            @yield('Page-Body')
         </div>
      </div>

      <!--Footer-->
      @include('Layouts.Footer.Index')
      <!--Footer-->
   </div>
   </div>


   {{-- @notifyJs --}}
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
   <!-- Libs JS -->
   <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
   <script src="{{ asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
   <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
   <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
   <!-- Tabler Core -->
   <script src="{{ asset('dist/js/tabler.min.js?1684106062') }}" defer></script>
   <script src="{{ asset('dist/js/demo.min.js?1684106062') }}" defer></script>
   <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   @stack('scripts')
</body>

</html>