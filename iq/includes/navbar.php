<!-- Start header -->
<header class="header-one">
	<!-- Start header top -->
	<div class="top-bar fix ">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-xl-8 col-lg-8 col-md-9">
					<div class="header-info">
						<span><i class="fa fa-clock-o"></i>
							<span id=dateEL></span>
							<script>
								setInterval(function() {
									let date = new Date();
									dateEL.innerHTML = date.toString().substring(0, date.toString().search(/GMT/i))
								}, 500)

							</script>
						</span>
						<a href="tel:+201067149417">
							<span><i class="fa fa-phone"></i>+2010 6714 9417</span>
						</a>
						<a href="mailto:mo7mad369@gmail.com">
							<span><i class="fa fa-envelope"></i>mo7mad369@gmail.com</span>
						</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-3">
					<div class="header-social-icons header-social-icons-black">
						<ul>
							<li><a target="_blank" href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a target="_blank" href="https://web.whatsapp.com/send?phone=+201067149417&text="><i class="fa fa-whatsapp"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End header top -->
	<div id="sticker" class="header-menu-area header-area header-area-4">
		<div class="container">
			<div class="row header-bg">
				<div class="col-xl-2 col-lg-2 col-md-3 d-flex align-items-center">
					<div class="logo">
						<a href="index.php"><img src="img/logo/iq.png" alt=""></a>
					</div>
				</div>
				<div class="col-xl-10 col-lg-10 col-md-9">
					<div class="header-right">
						<!-- search option start -->
					</div>

					<div class="header_menu f-right">
						<nav id="mobile-menu">
							<ul class="main-menu">
								<li class="home"><a href="/">Home</a></li>
								<li class="menu-item-has-children"><a href="#">Pages</a>
									<ul class="submenu">
										<li><a href="about.html">About</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="review.html">Reviews</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="error.html">Error</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="signup.html">Signup</a></li>
									</ul>
								</li>
								<li><a href="/Services">Services</a></li>
								<li class="menu-item-has-children"><a href="#">projects</a>
									<ul class="submenu">
										<li><a href="project.html">Projects 01</a></li>
										<li><a href="project-details.html">Projects Details</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">Blog</a>
									<ul class="submenu">
										<li><a href="blog.html">Blog Grid</a></li>
										<li><a href="blog-sidebar.html">Blog Sidebar</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li class="contact"><a href="/contact">Contact</a>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-12">
					<div class="mobile-menu"></div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End header area -->
<main>
