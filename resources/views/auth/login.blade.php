<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Twitter -->
		{{-- <meta name="twitter:site" content="">
		<meta name="twitter:creator" content=""> --}}
		{{-- <meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="DashForge">
		<meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template"> --}}
		{{-- <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png"> --}}
		<!-- Facebook -->
		{{-- <meta property="og:url" content="http://themepixels.me/dashforge"> --}}
		{{-- <meta property="og:title" content="DashForge"> --}}
		{{-- <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template"> --}}
		{{-- <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
		<meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png"> --}}
		{{-- <meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="600"> --}}
		<!-- Meta -->
		{{-- <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
		<meta name="author" content="ThemePixels"> --}}
		<!-- Favicon -->
		{{-- <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png"> --}}
		<title>TeleSpot - Marketing Application</title>
		<!-- vendor css -->
		<link href="../../lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- DashForge CSS -->
		<link rel="stylesheet" href="../../assets/css/dashforge.css">
		<link rel="stylesheet" href="../../assets/css/dashforge.auth.css">
	</head>
	<body>
		<header class="navbar navbar-header navbar-header-fixed">
			<a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
			<div class="navbar-brand">
				<a href="/" class="df-logo">tele<span>spot</span></a>
			</div>
			<!-- navbar-brand -->
			<div id="navbarMenu" class="navbar-menu-wrapper">
				<div class="navbar-menu-header">
					<a href="/" class="df-logo">tele<span>spot</span></a>
					<a id="mainMenuClose" href=""><i data-feather="x"></i></a>
				</div>
			</div>
		</header>
		<!-- navbar -->
		<div class="content content-fixed content-auth">
			<div class="container">
				<div class="media align-items-stretch justify-content-center ht-100p pos-relative">
					<div class="media-body align-items-center d-none d-lg-flex">
						<div class="mx-wd-600">
							<img src="https://i.pinimg.com/originals/6b/1b/22/6b1b22573f9f3d4bba11a9fa5cb45652.png" class="img-fluid" alt="">
						</div>
						<div class="pos-absolute b-0 l-0 tx-12 tx-center">
							Разработка Солижанова Хожиакбара и ИТ компании <a href="https://spacemos.uz/" target="_blank">Spacemos Inc.</a>
						</div>
					</div>
					<!-- media-body -->
					<div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
						<div class="wd-100p">
							<h3 class="tx-color-01 mg-b-5">Войти</h3>
							<p class="tx-color-03 tx-16 mg-b-40">Приветствуем, войдите чтобы продолжить</p>
							<form method="post" action="{{ route('login') }}">
                                @csrf
								<x-jet-validation-errors class="mb-4" />
								@if (session('status'))
								<div class="mb-4 font-medium text-sm text-green-600">
									{{ session('status') }}
								</div>
								@endif
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="vash@email.com">
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-between mg-b-5">
										<label class="mg-b-0-f">Пароль</label>
										{{-- <a href="" class="tx-13">Forgot password?</a> --}}
									</div>
									<input type="password" class="form-control" name="password" placeholder="Ваш пароль">
								</div>
								<button class="btn btn-brand-02 btn-block" type="submit">Войти</button>
							</form>
							{{-- <div class="divider-text">or</div>
							<button class="btn btn-outline-facebook btn-block">Sign In With Facebook</button>
							<button class="btn btn-outline-twitter btn-block">Sign In With Twitter</button> --}}
							<div class="tx-13 mg-t-20 tx-center">Ещё не зарегистрированы? <a href="/register">Создать аккаунт</a></div>
						</div>
					</div>
					<!-- sign-wrapper -->
				</div>
				<!-- media -->
			</div>
			<!-- container -->
		</div>
		<!-- content -->
		<footer class="footer">
			<div>
				<span>&copy; 2019 DashForge v1.0.0. </span>
				<span>Created by <a href="http://themepixels.me">ThemePixels</a></span>
			</div>
			<div>
				<nav class="nav">
					<a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
					<a href="../../change-log.html" class="nav-link">Change Log</a>
					<a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
				</nav>
			</div>
		</footer>
		<script src="../../lib/jquery/jquery.min.js"></script>
		<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../../lib/feather-icons/feather.min.js"></script>
		<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../../assets/js/dashforge.js"></script>
		<!-- append theme customizer -->
		<script src="../../lib/js-cookie/js.cookie.js"></script>
		<script src="../../assets/js/dashforge.settings.js"></script>
		<script>
			$(function(){
			  'use script'
			
			  window.darkMode = function(){
			    $('.btn-white').addClass('btn-dark').removeClass('btn-white');
			  }
			
			  window.lightMode = function() {
			    $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
			  }
			
			  var hasMode = Cookies.get('df-mode');
			  if(hasMode === 'dark') {
			    darkMode();
			  } else {
			    lightMode();
			  }
			});
		</script>
	</body>
</html>