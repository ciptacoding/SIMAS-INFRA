<aside data-aos="fade-right" data-aos-duration="1200" class="navbar navbar-vertical navbar-expand-lg"
   data-bs-theme="dark" style="padding-left: 15px" id="sidebar">
   <div class="container-fluid">

      {{-- Hamburger Menu on device mobile and table --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
         aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      {{-- Hamburger Menu on device mobile and table --}}

      {{-- Logo start--}}
      <div class="mt-2 text-center">
         <div class="mt-1 d-none d-md-flex justify-content-center">
            <a href="#">
               <img src="./static/Logo-TELKOM.png" width="500" alt="Tabler" class="navbar-brand-image">
            </a>
         </div>
         <div class="mt-2 text-center d-flex flex-column">
            <span class="fs-1 fw-bold">SIMAS</span>
            <span class="fs-5">PT. TELKOM AREA BALI TIMUR</span>
         </div>
      </div>
      {{-- Logo end--}}

      {{-- header bar display on Mobile and Table --}}
      <div class="navbar-nav flex-row d-lg-none">
         {{-- Profile Mobile & Tablet--}}
         @include('Layouts.Profile.Mobile')
      </div>
      {{-- List Menu Sidebar --}}
      @include('Layouts.MenuBar.ListMenu')
   </div>
</aside>