<header class="navigation bg-light py-2">
	<div class="container">
		<div class="navbar-wrapper">
			<nav class="navbar navbar-light">
				<a class="navbar-brand" href="{{ route('home') }}">
					<img loading="preload" decoding="async" class="img-fluid" width="160" src="{{ asset('front/images/logo.png') }}" alt="Logo">
				</a>

				<!-- Tombol garis tiga selalu tampil -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Menu collapsible -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
						<li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>