<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container-fluid px-3 px-xl-5">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="{{asset('assets/plugin_tenp/logo.png')}}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{asset('assets/plugin_tenp/logo.png')}}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

				<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item 1 Demos -->
					{{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sig In / Register</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item active" href="{{route('login')}}">Sig In</a></li>
                            <li> <a class="dropdown-item active" href="{{route('login')}}">Register</a></li>
						</ul>
					</li> --}}

					<!-- Nav item 2 Pages -->
					{{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page 2</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Course</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="">Sample Page 2</a></li>
								</ul>
							</li>

						</ul>
					</li> --}}

					<!-- Nav item 3 Account -->
					{{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page 3</a>
						<ul class="dropdown-menu" aria-labelledby="accounntMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href=""><i class="bi bi-grid-fill fa-fw me-1"></i>Sample Pgae 3</a> </li>
								</ul>
							</li>

							
						</ul>
					</li> --}}

					<!-- Nav item 4 Megamenu-->
					{{-- <li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page 4</a>
						<div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
							<div class="row p-4 g-4">
								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Get started</h6>
									<hr>
									<ul class="list-unstyled">
										<li> <a class="dropdown-item" href="#">Market research</a> </li>
										<li> <a class="dropdown-item" href="#">Advertising</a> </li>
										<li> <a class="dropdown-item" href="#">Consumer behavior</a> </li>
										<li> <a class="dropdown-item" href="#">Digital marketing</a> </li>
										<li> <a class="dropdown-item" href="#">Marketing ethics</a> </li>
										<li> <a class="dropdown-item" href="#">Social media marketing</a> </li>
										<li> <a class="dropdown-item" href="#">Public relations</a> </li>
										<li> <a class="dropdown-item" href="#">Advertising</a> </li>
										<li> <a class="dropdown-item" href="#">Decision science</a> </li>
										<li> <a class="dropdown-item" href="#">SEO</a> </li>
										<li> <a class="dropdown-item" href="#">Business marketing</a> </li>
									</ul>
								</div>
								
								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Degree</h6>
									<hr>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">Contact management</a>
										<p class="mb-0 small text-truncate-2">Speedily say has suitable disposal add boy. On forth doubt miles of child.</p>
									</div>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">Sales pipeline</a>
										<p class="mb-0 small text-truncate-2">Speedily say has suitable disposal add boy. On forth doubt miles of child.</p>
									</div>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">Security & Permission</a>
										<p class="mb-0 small text-truncate-2">Speedily say has suitable disposal add boy. On forth doubt miles of child.</p>
									</div>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Certificate</h6>
									<hr>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Google SEO certificate</a>
											<p class="mb-0 small">No prerequisites</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Business Development Executive(BDE)</a>
											<p class="mb-0 small">No prerequisites</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Facebook social media marketing</a>
											<p class="mb-0 small">Expert advice</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Creative graphics design</a>
											<p class="mb-0 small">No prerequisites</p>
										</div>
									</div>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Download Eduport</h6>
									<hr>
									<!-- Image -->
									<img src="https://eduport.webestica.com/assets/images/element/14.svg" alt="">

									<!-- Download button -->
									<div class="row g-2 justify-content-center mt-3">
										<!-- Google play store button -->
										<div class="col-6 col-sm-4 col-xxl-6">
											<a href="#"> <img src="https://eduport.webestica.com/assets/images/client/google-play.svg" class="btn-transition" alt="google-store"> </a>
										</div>
										<!-- App store button -->
										<div class="col-6 col-sm-4 col-xxl-6">
											<a href="#"> <img src="https://eduport.webestica.com/assets/images/client/app-store.svg" class="btn-transition" alt="app-store"> </a>
										</div>
									</div>
								</div>

								<!-- Action box -->
								<div class="col-12">
									<div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3" role="alert">
										<!-- Avatar -->
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img rounded-circle" src="https://eduport.webestica.com/assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Info -->
										The personality development class starts at 2:00 pm, click to <a href="#" class="alert-link">Join Now</a>
									</div>
								</div>
							</div>
						</div>
					</li> --}}

				</ul>
				<!-- Nav Main menu END -->

				<!-- Nav Search START -->
				<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
			</div>
			<!-- Main navbar END -->

			<!-- Profile START -->
			<div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="{{asset('img/profile/default.jpg')}}" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3 mb-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="{{asset('img/profile/default.jpg')}}" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">-</a>
								<p class="small m-0">-</p>
							</div>
						</div>
					</li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Links -->
					<li><a class="dropdown-item bg-danger-soft-hover" href="{{route('login')}}"><i class="bi bi-power fa-fw me-2"></i>Sign In</a></li>
					<li><a class="dropdown-item bg-danger-soft-hover" href="{{route('register')}}"><i class="bi bi-power fa-fw me-2"></i>register</a></li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Dark mode options START -->
					<li>
						<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg> Light
							</button>
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg> Dark
							</button>
							<button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg> Auto
							</button>
						</div>
					</li> 
					<!-- Dark mode options END-->
				</ul>
			</div>
			<!-- Profile START -->
		</div>
	</nav>
	<!-- Nav END -->
</header>
<!-- Header END -->