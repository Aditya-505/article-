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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}"/>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header-section">
        <a href="index.html" class="site-logo">
            <img src="img/logo.png" alt="logo">
        </a>
        <ul class="main-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="single-post.html">Log out</a></li>
        </ul>
        <div class="header-add">
            <img src="img/add.jpg" alt="">
        </div>
    </header>

    <!-- Page Top Section -->
    <section class="page-top-section set-bg" data-setbg="img/header-bg/1.jpg">
        <div class="container">
            <h2>Hollow Knight</h2>
        </div>
    </section>

    <!-- Character Section 2 -->
    <section class="characters-section character-two">
        <div class="container">
        <div class="row align-items-center">
    <div class="col-md-5">
        <div class="character-img">
            <img src="{{ asset('img/the hollow.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="col-md-7">
        <div class="character-info">
            <img src="img/game-characters/title-icon.png" alt="">
            <h2>Character</h2>
            <h5>Users: 4.8</h5>
            <h5>MetaCritic: 4.5</h5>
            <p>
            In the Hollow Knight world, the main characters are The Knight, an insectoid warrior, and Hornet, who is also a key player in the story.
             Other significant characters include The Pale King, Ze'mer, and the other
             members of The Five Great Knights, such as Ogrim, Dryya, and Isma. There are also various other NPCs and bosses 
             that contribute to the game's lore and challenges, including Hive Queen Vespa, Lord Fool, and Nosk
            </p>
            <div class="progress-warp d-flex justify-content-between">
                <div class="cp-item">
                    <div class="circle-progress" data-cpid="id-4" data-cpvalue="75" data-cpcolor="#10ddb4"></div>
                    <h4>Strengths</h4>
                </div>
                <div class="cp-item">
                    <div class="circle-progress" data-cpid="id-5" data-cpvalue="90" data-cpcolor="#10ddb4"></div>
                    <h4>Power</h4>
                </div>
                <div class="cp-item">
                    <div class="circle-progress" data-cpid="id-6" data-cpvalue="80" data-cpcolor="#10ddb4"></div>
                    <h4>Weapons</h4>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>

    <!-- Character Section 3 -->
    <section class="characters-section character-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="character-info">
                        <img src="img/game-characters/title-icon.png" alt="">
                        <h2>The Story</h2>
                        <h5>Users: 4.8</h5>
                        <h5>MetaCritic: 4.5</h5>
                        <p>
                        In Hollow Knight, the Pale King sought to contain the Radiance, a corrupting, invasive force, by creating a Vessel, 
                        the Hollow Knight, to seal it away in the Temple of the Black Egg. However, the Radiance persisted,
                        leading to the Infection that plagues Hallownest. The Knight, another Vessel, is drawn to Hallownest and must work
                         to reseal the Radiance or destroy it, ultimately affecting the fate of the kingdom and the Vessel siblings. 
                        </p>
                        <div class="progress-warp">
                            <div class="cp-item">
                                <div class="circle-progress" data-cpid="id-7" data-cpvalue="75" data-cpcolor="#10ddb4"></div>
                                <h4>Strengths</h4>
                            </div>
                            <div class="cp-item">
                                <div class="circle-progress" data-cpid="id-8" data-cpvalue="90" data-cpcolor="#10ddb4"></div>
                                <h4>Power</h4>
                            </div>
                            <div class="cp-item">
                                <div class="circle-progress" data-cpid="id-9" data-cpvalue="80" data-cpcolor="#10ddb4"></div>
                                <h4>Weapons</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="character-img">
                <img src="img/game-characters/3.png" alt="">
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <div class="footer-section">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="about-widget">
                            <img src="img/logo.png" alt="">
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                        </div>
                    </div>
                </div>
                <!-- Useful Links -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">Useful Links</h2>
                        <ul>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Services -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">Services</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Become a Writer</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Careers -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">Careers</h2>
                        <ul>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Latest News -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget fw-latest-post">
                        <h2 class="fw-title">Latest News</h2>
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

            <!-- Copyright -->
            <div class="copyright">
                <p>
                    &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
                    <i class="fa fa-heart" aria-hidden="true"></i> by 
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>

        <!-- Social Links -->
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

    <!-- Scripts -->
    <script src="{{ asset('user/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>

</body>
</html>
