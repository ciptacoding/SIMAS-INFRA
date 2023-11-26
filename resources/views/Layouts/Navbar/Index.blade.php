<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto d-flex align-items-center">

      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <i class="fas fa-envelope mr-2"></i> 4 new messages
               <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <i class="fas fa-users mr-2"></i> 8 friend requests
               <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <i class="fas fa-file mr-2"></i> 3 new reports
               <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
         </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown pl-4 pr-3">
         <a data-toggle="dropdown" href="#">
            <div class="user-panel d-flex align-items-center" style="padding-right: -18px;">
               <div class="text-secondary d-none d-md-inline-block">
                  <span class="d-block" style="margin-bottom: -10px">{{ Auth::user()->username }}</span>
                  <span class="text-xs">{{ Auth::user()->role->nama }}</span>
               </div>
               <div class="image">
                  @if (Auth::user()->foto)
                  <img src="{{ asset('storage/profiles/' . Auth::user()->foto) }}"
                     style="height: 32px; object-fit:cover" class="overflow-hidden rounded-lg" alt="user-image">
                  @else
                  <img src="{{ asset('img/person.png') }}" style="height: 32px; object-fit:cover"
                     class="overflow-hidden rounded-lg" alt="user-image">
                  @endif
               </div>
            </div>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
               <span>Profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <span>Password</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" onclick="handleLogout()" class="dropdown-item">
               <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
         </div>
      </li>

   </ul>
</nav>

@push('scripts')
<script>
   function handleLogout()
      {
         event.preventDefault();
         document.getElementById('logout-form').submit();
      }
</script>
@endpush