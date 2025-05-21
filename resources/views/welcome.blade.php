<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>TheQuest - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset ('user/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('user/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('user/css/magnific-popup.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('user/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('user/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('user/css/slicknav.min.css') }}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset ('user/css/style.css') }}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<h2 class="text-white">Daily games</h2>
		</a>
		<ul class="main-menu">
			<li><a href="/">Home</a></li>
			<li><a href="single-post.html">Log out</a></li>
		</ul>
		<div class="header-add">
			<img src="img/add.jpg" alt="">
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg" data-setbg="img/forza.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2>Daily Games</h2>
							<a href="" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="img/re.jpg">

				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2>Daily games</h2>
							<a href="#" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 blog-posts">
				@foreach ($game->take(1) as $data)
					<div class="blog-post featured-post">
					<a href="{{route('penjelasan', ['id' => $data->id])}}">
					@if ($data->foto)
                                <img src="{{ asset('storage/game/' . $data->foto) }}"
                                     alt="foto"
                                     class="img-fluid">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="width: 200px; height: 150px;">
                                    Tidak ada foto
                                </div>
                            @endif
						<p> judul :  {{ $data->judul }}</p>
						<p>Penulis : {{ $data->penulis }}</p>
						<p> Genre : {{ $data->genre->genre }}</p>
						<div class="post-date">April 1, 2019</div>
						<h3>The best games of 2019</h3>
						<p>{{ $data->deskripsi }}</p>
						<div class="post-metas">
						</div>
					</div>
					@endforeach
					<div class="row">
						<div class="col-md-6">
							@foreach ($game->skip(1)->take(1) as $data)
							<div class="blog-post">
								<a href="{{route('penjelasan', ['id' => $data->id])}}">
							@if ($data->foto)
                                <img src="{{ asset('storage/game/' . $data->foto) }}"
                                     alt="foto"
                                     class="img-fluid">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="width: 200px; height: 150px;">
                                    Tidak ada foto
                                </div>
                            @endif
							</a>
								<p> judul :  {{ $data->judul }}</p>
						        <p> Penulis : {{ $data->penulis }}</p>
						        <p> Genre : {{ $data->genre->genre }}</p>
								<div class="post-date">April 1,2019</div>
								<h4>The best games of 2019</h4>
								<p>{{ $data->deskripsi }}</p>
								<div class="post-metas">
								</div>
							</div>
						</div>
						@endforeach
						<div class="col-md-6">
						@foreach ($game->skip(2)->take(1) as $data)
							<div class="blog-post">
							<a href="{{route('penjelasan', ['id' => $data->id])}}">
							@if ($data->foto)
                                <img src="{{ asset('storage/game/' . $data->foto) }}"
                                     alt="foto"
                                     class="img-fluid">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="width: 200px; height: 150px;">
                                    Tidak ada foto
                                </div>
                            @endif
							    <p> judul :  {{ $data->judul }}</p>
						        <p> Penulis : {{ $data->penulis }}</p>
						        <p> Genre : {{ $data->genre->genre }}</p>
								<div class="post-date">April 1,2019</div>
								<p>{{ $data->deskripsi }}</p>
								<div class="post-metas">
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-4 sidebar">
					<div class="sb-widget">
						<div class="latest-news-widget">
							@foreach ($game->skip(3)->take(1) as $data)
							<div class="ln-item">
							<a href="{{route('penjelasan', ['id' => $data->id])}}">
							@if ($data->foto)
                                <img src="{{ asset('storage/game/' . $data->foto) }}"
                                     alt="foto"
                                     class="img-fluid">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="width: 200px; height: 150px;">
                                    Tidak ada foto
                                </div>
                            @endif
								<div class="ln-text">
								    <p> judul :  {{ $data->judul }}</p>
						            <p> Penulis : {{ $data->penulis }}</p>
						            <p> Genre : {{ $data->genre->genre }}</p>
									<div class="ln-date">April 1, 2019</div>
									<p>{{ $data->deskripsi }}</p>
								</div>
							</div>
							@endforeach
							<div class="ln-item">
								@foreach ($game->skip(4)->take(1) as $data)
								<a href="{{route('penjelasan', ['id' => $data->id])}}">
							@if ($data->foto)
                                <img src="{{ asset('storage/game/' . $data->foto) }}"
                                     alt="foto"
                                     class="img-fluid">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="width: 200px; height: 150px;">
                                    Tidak ada foto
                                </div>
                            @endif
								<div class="ln-text">
								    <p> judul :  {{ $data->judul }}</p>
						            <p> Penulis : {{ $data->penulis }}</p>
						            <p> Genre : {{ $data->genre->genre }}</p>
									<div class="ln-date">April 1, 2019</div>
									<p>{{ $data->deskripsi }}</p>
								</div>
							</div>
							@endforeach
							<div class="ln-item">
							@foreach ($game->skip(5)->take(1) as $data)
							<a href="{{route('penjelasan', ['id' => $data->id])}}">
							@if ($data->foto)
                                <img src="{{ asset('storage/game/' . $data->foto) }}"
                                     alt="foto"
                                     class="img-fluid">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center"
                                     style="width: 200px; height: 150px;">
                                    Tidak ada foto
                                </div>
                            @endif
								<div class="ln-text">
								    <p> judul :  {{ $data->judul }}</p>
						            <p> Penulis : {{ $data->penulis }}</p>
						            <p> Genre : {{ $data->genre->genre }}</p>
									<div class="ln-date">April 1, 2019</div>
									<p>{{ $data->deskripsi }}</p>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="sb-widget">
						<a href="#" class="add">
							<img src="img/add-2.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Blog list section -->

	<!-- Blog list section end -->

	<!-- Video section -->

	<!-- Video section end -->

	<!-- Footer section -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="about-widget">
							<img src="img/logo.png" alt="">
							<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Usfull Links</h2>
						<ul>
							<li><a href="">Games</a></li>
							<li><a href="">testimonials</a></li>
							<li><a href="">Reviews</a></li>
							<li><a href="">Characters</a></li>
							<li><a href="">Latest news</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Services</h2>
						<ul>
							<li><a href="">About us</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Become a writer</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">FAQ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Careeres</h2>
						<ul>
							<li><a href="">Donate</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Subscriptions</a></li>
							<li><a href="">Careers</a></li>
							<li><a href="">Our team</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget fw-latest-post">
						<h2 class="fw-title">Usfull Links</h2>
						<div class="latest-news-widget">
							<div class="ln-item">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
							<div class="ln-item">
								<div class="ln-text">
									<div class="ln-date">April 1, 2019</div>
									<h6>10 Amazing new games</h6>
									<div class="ln-metas">
										<div class="ln-meta">By Admin</div>
										<div class="ln-meta">in <a href="#">Games</a></div>
										<div class="ln-meta">3 Comments</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><a href=""><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="#"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="#"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="#"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="#"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset ('user/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset ('user/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('user/js/jquery.slicknav.js') }}"></script>
	<script src="{{ asset ('user/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset ('user/js/circle-progress.min.js') }}"></script>
	<script src="{{ asset ('user/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset ('user/js/main.js') }}"></script>

	</body>
</html>
