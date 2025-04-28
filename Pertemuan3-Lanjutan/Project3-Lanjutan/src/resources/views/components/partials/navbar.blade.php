<head>
	<meta charset="utf-8">
	<title>{{ $title ?? 'Pemweb' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/brands.css') }}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/solid.css') }}">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
	@livewireStyles

	<style>
		.custom-navbar {
			position: absolute;
			top: 20px;
			right: 20px;
			z-index: 9999;
		}

		.navbar-menu {
			position: absolute;
			top: 70px;
			right: 20px;
			background: white;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
			width: 200px;
			padding: 10px;
		}
	</style>
</head>