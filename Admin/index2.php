<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Require meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard Admin Camerentz</title>

    <!-- Social network metas -->
    <meta name="author" content="@FikkriReza">
    <meta name="description" content="Open source responsive admin template with Bootstrap framework">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@FikkriReza">
    <meta name="twitter:creator" content="@FikkriReza">

    <meta property="fb:app_id" content="801699283982913">
    <meta property="og:url" content="https://rezafikkri.github.io/Reza-Admin">
    <meta property="og:title" content="Dashboard . Reza Admin">
    <meta property="og:description" content="Open source responsive admin template with Bootstrap framework">
    <meta property="og:image" content="https://rezafikkri.github.io/Reza-Admin/dist/img/rezaadmin.jpg">

	<!-- Bootstrap CSS first -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<!-- then Font Awesome -->
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- and Reza Admin CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/reza-admin.min.css">
	<!-- Favicon -->
	<link rel="icon" href="dist/img/Reza_Admin.ico">
</head>
<body>		
	<!-- navbar -->
	<nav class="navbar navbar-expand-sm navbar--white">
		<a class="navbar__sidebar-toggler" href="#"><span class="fa fa-bars"></span></a>
		<a class="navbar-brand ml-3" href="index.html"><img src="dist/img/Reza_Admin.svg" width="120" alt="logo reza"></a>
		<button class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button">
		    <span class="fa fa-navicon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item navbar__notification">
					<a class="nav-link" href="#">
						<span class="fa fa-bookmark"></span>
						<span class="navbar__notification-number navbar__notification-number--blue">2</span>
					</a>
				</li>
				<li class="nav-item navbar__notification">
					<a class="nav-link " href="#">
						<span class="fa fa-bell"></span>
						<span class="navbar__notification-number navbar__notification-number--orange">2</span>
					</a>
				</li>
				<li class="nav-item navbar__avatar dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						<img src="dist/img/reza.jpg" alt="avatar image">
						<span>Reza Sariful Fikri</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="" class="dropdown-item">Settings Account</a>
						<div class="dropdown-divider"></div>
						<a href="" class="dropdown-item dropdown-item--hover-red">Logout <span class="fa fa-sign-out"></span></a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!-- sidebar -->
	<aside class="sidebar">
		<ul class="sidebar__nav">
			<li class="sidebar__item sidebar__item--active"><a class="nav-link" href="index.html"><span class="fa fa-home"></span> Dashboard</a></li>

			<li class="sidebar__item"><a href="page/widgets.html"><span class="fa fa-th-large"></span> Widgets</a></li>
			<li class="sidebar__item"><a href="page/charts.html"><span class="fa fa-bar-chart-o"></span> Charts</a></li>
			<li class="sidebar__item"><a class="sidebar__btn-dropdown" href="#"><span class="fa fa-desktop"></span> UI Elements</a>
				<ul class="sidebar__dropdown">
					<li class="sidebar__dropdown-item"><a href="page/general.html">General</a></li>
					<li class="sidebar__dropdown-item"><a href="page/buttons.html">Buttons</a></li>
					<li class="sidebar__dropdown-item"><a href="page/icons.html">Icons</a></li>
				</ul>
			</li>


			<li class="sidebar__item"><a href="page/forms.html"><span class="fa fa-pencil-square-o"></span> Forms</a></li>
			<li class="sidebar__item"><a href="page/tables.html"><span class="fa fa-th-list"></span> Tables</a></li>
			<li class="sidebar__item"><a class="sidebar__btn-dropdown" href="#"><span class="fa fa-building"></span> Page</a>
				<ul class="sidebar__dropdown">
					<li class="sidebar__dropdown-item"><a href="page/login.html">Login</a></li>
					<li class="sidebar__dropdown-item"><a href="page/register.html">Register</a></li>
					<li class="sidebar__dropdown-item"><a href="page/forgot-password.html">Forgot Password</a></li>
					<li class="sidebar__dropdown-item"><a href="page/404.html">404</a></li>
					<li class="sidebar__dropdown-item"><a href="page/blank.html">Blank</a></li>
				</ul>
			</li>

			<li class="sidebar__item"><a href="docs/"><span class="fa fa-book"></span> Documentation</a></li>
		</ul>
	</aside>

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-md-12 mb-2">
				<div class="main__title">
					<h4>Dashboard</h4>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
				</div>				
			</header>

			<!-- info box -->
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--blue">
					<div class="info-box__icon"><span class="fa fa-shopping-cart"></span></div>
					<div class="info-box__description">
						<h2>Products</h2>
						<h1>520</h1>
						<time>12 Minutes ago</time>
					</div>
					<a title="Detail Products" class="info-box__btn-detail" href=""><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--green">
					<div class="info-box__icon"><span class="fa fa-users"></span></div>
					<div class="info-box__description">
						<h2>Members</h2>
						<h1>700</h1>
						<time>30 Minutes ago</time>
					</div>
					<a title="Detail Members" class="info-box__btn-detail" href=""><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--orange">
					<div class="info-box__icon"><span class="fa fa-shopping-bag"></span></div>
					<div class="info-box__description">
						<h2>Orders</h2>
						<h1>120</h1>
						<time>2 Minutes ago</time>
					</div>
					<a title="Detail Orders" class="info-box__btn-detail" href=""><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>

			<!-- charts -->
			<div class="mb-3 col-lg-8">
				<section class="chart">
					<div class="chart__header">
						<h6>Visitors, January 2020</h6>
					</div>
					<div class="chart__body">
						<canvas id="visitor_chart"></canvas>
					</div>
				</section>
			</div>
			<div class="mb-3 col-lg-4">
				<section class="chart">
					<div class="chart__header">
						<h6>Browser Usage, January 2020</h6>
					</div>
					<div class="chart__body">
						<canvas id="browser_usage_chart"></canvas>
					</div>
				</section>
			</div>

			<!-- table -->
			<div class="mb-3 col-12">
				<section class="main__box">
					<h5>Table Product</h5>
					<hr>
					<div class="form-row">
						<div class="col-12 col-lg-6">
                            <select name="limit" class="form form--focus-blue mt-0 mb-3">
                                <option>Limit ...</option>
                            </select>
                        </div>
						<div class="input-group col-12 col-lg-6 mt-0 mb-3">
							<input type="text" class="form form--focus-blue" name="search" placeholder="Search with Name ...">
							<div class="input-group__append">
								<a href="#" class="btn btn--blue"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>					
					<table class="table table--gray mb-3">
						<thead>
							<tr>
								<th width="10">No</th>
								<th>First Name</th>
								<th>Last Name</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td>Dian</td>
								<td>Pranata</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
								<td>Adelina</td>
								<td>Damayanti</td>
							</tr>
							<tr>
								<td class="text-center">3</td>
								<td>Reza Sariful</td>
								<td>Fikri</td>
							</tr>
							<tr>
								<td class="text-center">4</td>
								<td>Syawal</td>
								<td></td>
							</tr>
						</tbody>
					</table>
					<ul class="pagination pagination--blue">
						<li class="pagination__item pagination__item--disabled">
							<a href="#">Previous</a>
						</li>
						<li class="pagination__item"><a href="#">1</a></li>
						<li class="pagination__item pagination__item--active">
							<a href="#">2</a>
						</li>
						<li class="pagination__item"><a href="#">3</a></li>
						<li class="pagination__item">
							<a href="#">Next</a>
						</li>
					</ul>
				</section><!-- main__box -->
			</div>
		</div><!-- row -->
	</main>

	

	<!-- jQuery first, then Bootstrap JS, and Reza Admin JS-->
    <script src="dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/reza-admin.min.js"></script>

    <!-- Optional Javascript -->
    <script src="plugins/Chart.js/Chart.min.js"></script>

	<script type="text/javascript">
		// visitor charts
		const visitorChart = document.querySelector("#visitor_chart").getContext('2d');
		let configVisitorChart = {
			type: 'line',
		    data: {
		        labels: ['Sunday, 11','Monday, 12','Tuesday, 13','Wednesday, 14','Thursday, 15','Friday, 16'],
		        datasets: [{
		            label: 'Visitors',
		            data: [10,6,7,5,1,14],
		            fill: 'origin',
		            backgroundColor: 'rgba(37,151,224,.7)',
		            borderColor: '#2597e0'
		        }]
		    },
		    options: {
		    	maintainAspectRatio: false,
		    	legend: {
		    		display: false,
		        },
		        tooltips: {
                    titleFontFamily: 'sans-serif',
                    bodyFontFamily: 'sans-serif',
                    backgroundColor: '#fff',
                    titleFontColor: '#333',
                    bodyFontColor: '#333',
                    borderColor: '#e2e2e2',
                    borderWidth: '1',
                }
		    }
		}
		new Chart(visitorChart, configVisitorChart);

		// browser usage
		const browserUsageChart = document.querySelector("#browser_usage_chart").getContext('2d');
		let configBrowserUsageChart = {
			type: 'pie',
		    data: {
		        labels: ['Chrome','Mozilla','Uc Browser','Opera Mini'],
		        datasets: [{
		            data: [10,6,7,5],
		            backgroundColor: [
		            	"#1bd741",
	                    "#2597e0",
	                    "#f9a022",
	                    "#dd2525"
		            ]
		        }]
		    },
		    options: {
		    	maintainAspectRatio: false,
		    	legend: {
		    		display: true
		        },
		        tooltips: {
                    titleFontFamily: 'sans-serif',
                    bodyFontFamily: 'sans-serif',
                    backgroundColor: '#fff',
                    titleFontColor: '#333',
                    bodyFontColor: '#333',
                    borderColor: '#e2e2e2',
                    borderWidth: '1',
                }
		    }
		}
		new Chart(browserUsageChart, configBrowserUsageChart);

		// show more btn
		const showMoreBtn = document.querySelector("a.show-more-btn");
		if(showMoreBtn !== null) {
			showMoreBtn.addEventListener('click', function(e) {
				// not aktifkan fungsi default link
				e.preventDefault();

				let targetShowBtnMore = e.target;
				if(!targetShowBtnMore.classList.contains("show-more-btn")) targetShowBtnMore = e.target.parentElement;
				if(targetShowBtnMore.classList.contains("show-more-btn")) {
					targetShowBtnMore.nextElementSibling.classList.remove("d-none");
					setTimeout(function(){
						targetShowBtnMore.nextElementSibling.classList.add("d-none");
					}, 1000);
				}
			});
		}
	</script>
</body>
</html>