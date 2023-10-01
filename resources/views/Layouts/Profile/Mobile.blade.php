<div class="nav-item dropdown pe-4">
   <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
      <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
      <div class="d-none d-xl-block ps-2">
         <div>Hajinul Hakim</div>
         <div class="mt-1 small text-muted">Administrator</div>
      </div>
   </a>
   <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <a href="#" class="dropdown-item">Profile</a>
      <a href="#" onclick="#" class="dropdown-item">Logout</a>
      <form id="logout-form-profile" action="#" method="POST" class="d-none">
         @csrf
      </form>
   </div>
</div>

@push('scripts')
<script>
   function handleLogout(){
         event.preventDefault();
         document.getElementById('logout-form').submit();
      }
</script>
@endpush