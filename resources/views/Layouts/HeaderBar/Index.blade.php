<header data-aos="fade-down" data-aos-duration="800" class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
	<div class="container-xl">

		{{-- Theme Button Toggle And Notificaiton Button On PC Device --}}
		<div class="navbar-nav flex-row order-md-last">
			<div class="d-none d-md-flex">

				{{-- Notification Bar--}}
				@include('Layouts.Notification.Index')
				{{-- Notification Bar --}}
			</div>

			{{-- profile desktop --}}
			@include('Layouts.Profile.Index')
			{{-- profile desktop --}}
		</div>
		{{-- Theme Button Toggle And Notificaiton Button On PC Device --}}

		{{-- breadcrumb --}}
		<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
			<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
			@yield('breadcrumb')
		</ol>
		{{-- breadcrumb --}}

	</div>
</header>