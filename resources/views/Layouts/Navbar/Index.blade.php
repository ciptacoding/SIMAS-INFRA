<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="#" class="nav-link">Contact</a>
      </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto d-flex align-items-center">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                     <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">Call me whenever you can...</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
               </div>
               <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                     <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">I got your message bro</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
               </div>
               <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                     <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">The subject goes here</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
               </div>
               <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
         </div>
      </li>
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
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
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown pl-4 pr-3">
         <a data-toggle="dropdown" href="#">
            <div class="user-panel d-flex align-items-center" style="padding-right: -18px;">
               <div class="text-secondary d-none d-md-inline-block">
                  <span class="d-block" style="margin-bottom: -10px">{{ Auth::user()->username }}</span>
                  <span class="text-xs">{{ Auth::user()->role->nama }}</span>
               </div>
               <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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