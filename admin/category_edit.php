<?php
include "../include/config.php";
ob_start();
session_start();
$category_id = $_GET['id'];
$query = "SELECT * FROM `category` WHERE id='$category_id'";
$i = 0;
$result = $con->query($query);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
		$category_id = $row['id'];
		$category_name = $row['name'];
		$category_image = $row['image'];
}
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
	<!-- Meta data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template" name="description">
	<meta content="Spruko Technologies Private Limited" name="author">
	<meta name="keywords" content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website" />

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Title -->
	<title>Reallist – Clean & Modern Admin Dashboard Bootstrap 4 HTML Template</title>
	<link rel="stylesheet" href="../assets/fonts/fonts/font-awesome.min.css">

	<!-- Sidemenu Css -->
	<link href="../assets/css/sidemenu.css" rel="stylesheet" />

	<!-- Bootstrap Css -->
	<link href="../assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Dashboard Css -->
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link href="../assets/css/admin-custom.css" rel="stylesheet" />

	<!-- Select2 Plugin -->
	<link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

	<!-- WYSIWYG Editor css -->
	<link href="../assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

	<!-- p-scroll bar css-->
	<link href="../assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />

	<!-- Data table css -->
	<link href="../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatable/jquery.dataTables.min.css" rel="stylesheet" />

	<!---Font icons-->
	<link href="../assets/css/icons.css" rel="stylesheet" />

	<!-- file Uploads -->
	<link href="../assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />
</head>

<body class="app sidebar-mini">

	<!--Loader-->
	<div id="global-loader">
		<img src="../assets/images/loader.svg" class="loader-img" alt="">
	</div>
	<div class="page">
		<div class="page-main">
			<div class="app-header1 header py-1 d-flex">
				<div class="container-fluid">
					<div class="d-flex">
						<a class="header-brand" href="index.html">
							<img src="../assets/images/brand/logo.png" class="header-brand-img" alt="Reallist logo">
						</a>
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
						<div class="header-navicon">
							<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
								<i class="fa fa-search"></i>
							</a>
						</div>
						<div class="header-navsearch">
							<a href="#" class=" "></a>
							<form class="form-inline mr-auto">
								<div class="nav-search">
									<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search">
									<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon full-screen-link">
									<i class="fe fe-maximize-2" id="fullscreen-button"></i>
								</a>
							</div>
							<div class="dropdown d-none d-md-flex country-selector">
								<a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
									<img src="../assets/images/us_flag.jpg" alt="img" class="avatar avatar-xs mr-1 align-self-center">
									<div>
										<strong class="text-dark">English</strong>
									</div>
								</a>
								<div class="language-width dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/french_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
										<div>
											<strong>French</strong>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/germany_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
										<div>
											<strong>Germany</strong>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/italy_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
										<div>
											<strong>Italy</strong>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/russia_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
										<div>
											<strong>Russia</strong>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/spain_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
										<div>
											<strong>Spain</strong>
										</div>
									</a>
								</div>
							</div>
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class=" nav-unread badge badge-danger  badge-pill">4</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a href="#" class="dropdown-item text-center">You have 4 notification</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div>
											<strong>2 new Messages</strong>
											<div class="small text-muted">17:50 Pm</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg">
											<i class="fa fa-calendar"></i>
										</div>
										<div>
											<strong> 1 Event Soon</strong>
											<div class="small text-muted">19-10-2019</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg">
											<i class="fa fa-comment-o"></i>
										</div>
										<div>
											<strong> 3 new Comments</strong>
											<div class="small text-muted">05:34 Am</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg">
											<i class="fa fa-exclamation-triangle"></i>
										</div>
										<div>
											<strong> Application Error</strong>
											<div class="small text-muted">13:45 Pm</div>
										</div>
									</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">See all Notification</a>
								</div>
							</div>
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class=" nav-unread badge badge-warning  badge-pill">3</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/faces/male/41.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
										<div>
											<strong>Blake</strong> I've finished it! See you so.......
											<div class="small text-muted">30 mins ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/faces/female/1.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
										<div>
											<strong>Caroline</strong> Just see the my Admin....
											<div class="small text-muted">12 mins ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/faces/male/18.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
										<div>
											<strong>Jonathan</strong> Hi! I'am singer......
											<div class="small text-muted">1 hour ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<img src="../assets/images/faces/female/18.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
										<div>
											<strong>Emily</strong> Just a reminder that you have.....
											<div class="small text-muted">45 mins ago</div>
										</div>
									</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">View all Messages</a>
								</div>
							</div>
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  app-selector">
									<ul class="drop-icon-wrap">
										<li>
											<a href="#" class="drop-icon-item">
												<i class="icon icon-speech text-dark"></i>
												<span class="block"> E-mail</span>
											</a>
										</li>
										<li>
											<a href="#" class="drop-icon-item">
												<i class="icon icon-map text-dark"></i>
												<span class="block">map</span>
											</a>
										</li>

										<li>
											<a href="#" class="drop-icon-item">
												<i class="icon icon-bubbles text-dark"></i>
												<span class="block">Messages</span>
											</a>
										</li>
										<li>
											<a href="#" class="drop-icon-item">
												<i class="icon icon-user-follow text-dark"></i>
												<span class="block">Followers</span>
											</a>
										</li>
										<li>
											<a href="#" class="drop-icon-item">
												<i class="icon icon-picture text-dark"></i>
												<span class="block">Photos</span>
											</a>
										</li>
										<li>
											<a href="#" class="drop-icon-item">
												<i class="icon icon-settings text-dark"></i>
												<span class="block">Settings</span>
											</a>
										</li>
									</ul>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">View all</a>
								</div>
							</div>
							<div class="dropdown ">
								<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
									<img src="../assets/images/faces/male/25.jpg" alt="profile-img" class="avatar avatar-md brround">
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
									<a class="dropdown-item" href="profile.html">
										<i class="dropdown-icon icon icon-user"></i> My Profile
									</a>
									<a class="dropdown-item" href="emailservices.html">
										<i class="dropdown-icon icon icon-speech"></i> Inbox
									</a>
									<a class="dropdown-item" href="editprofile.html">
										<i class="dropdown-icon  icon icon-settings"></i> Account Settings
									</a>
									<a class="dropdown-item" href="login.html">
										<i class="dropdown-icon icon icon-power"></i> Log out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar menu-->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar doc-sidebar">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div>
							<img src="../assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
							<a href="editprofile.html" class="profile-img">
								<span class="fa fa-pencil" aria-hidden="true"></span>
							</a>
						</div>
						<div class="user-info">
							<h2>Rubin Carmody</h2>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="index.html">Dashboard 1</a></li>
							<li><a class="slide-item" href="index2.html">Dashboard 2</a></li>
							<li><a class="slide-item" href="index3.html">Dashboard 3</a></li>
							<li><a class="slide-item" href="index4.html">Dashboard 4</a></li>
							<li><a class="slide-item" href="index5.html">Dashboard 5</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Admin settings</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="admin-pricing.html">Admin Pricing</a></li>
							<li><a class="slide-item" href="Ads.html">Ads List</a></li>
							<li><a class="slide-item" href="comments.html">Comments</a></li>
							<li><a class="slide-item" href="email-users.html">Email-Users</a></li>
							<li><a class="slide-item" href="media-gallery.html">Media Gallery</a></li>
							<li><a class="slide-item" href="newad.html">New Ad</a></li>
							<li><a class="slide-item" href="newuser.html">New User</a></li>
							<li><a class="slide-item" href="favourite-ads.html">Favourite-Ads</a></li>
							<li><a class="slide-item" href="payment-orders.html">Payment Orders</a></li>
							<li><a class="slide-item" href="payments-adpacks.html">Payment Adpacks</a></li>
							<li><a class="slide-item" href="payment-settings.html">Payment Settings</a></li>
							<li><a class="slide-item" href="payments-membership.html">Payment Membership</a></li>
							<li><a class="slide-item" href="profile-admin.html">Profile Admin</a></li>
							<li><a class="slide-item" href="settings.html">Settings</a></li>
							<li><a class="slide-item" href="users-all.html">All Users</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-rocket"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="cards.html" class="slide-item">Cards design</a>
							</li>
							<li>
								<a href="chats.html" class="slide-item">Default Chat</a>
							</li>
							<li>
								<a href="notify.html" class="slide-item">Notifications</a>
							</li>
							<li>
								<a href="email.html" class="slide-item">Email</a>
							</li>
							<li>
								<a href="emailservice.html" class="slide-item">Email Inbox</a>
							</li>
							<li>
								<a href="sweetalert.html" class="slide-item">Sweet alerts</a>
							</li>
							<li>
								<a href="rangeslider.html" class="slide-item">Range slider</a>
							</li>
							<li>
								<a href="scroll.html" class="slide-item">Content Scroll bar</a>
							</li>
							<li>
								<a href="counters.html" class="slide-item">Counters</a>
							</li>
							<li>
								<a href="loaders.html" class="slide-item">Loaders</a>
							</li>
							<li>
								<a href="time-line.html" class="slide-item">Time Line</a>
							</li>
							<li>
								<a href="rating.html" class="slide-item">Rating </a>
							</li>
							<li>
								<a href="users-list.html" class="slide-item">User List</a>
							</li>
							<li>
								<a href="search.html" class="slide-item">Search page</a>
							</li>
							<li>
								<a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label">Widget</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar"></i><span class="side-menu__label">Calendar</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="calendar.html" class="slide-item">Default calendar</a>
							</li>
							<li>
								<a href="calendar2.html" class="slide-item">Full calendar</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="chart-chartist.html" class="slide-item">Chartjs Charts </a>
							</li>
							<li>
								<a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a>
							</li>
							<li>
								<a href="chart-echart.html" class="slide-item">Echart Charts</a>
							</li>
							<li>
								<a href="chart-flot.html" class="slide-item">Flot Charts</a>
							</li>
							<li>
								<a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
							</li>
							<li>
								<a href="sparklinechart.html" class="slide-item">Sparkline Chart</a>
							</li>
							<li>
								<a href="chart-morris.html" class="slide-item">Morris Charts</a>
							</li>
							<li>
								<a href="charts.html" class="slide-item">C3 Bar Charts</a>
							</li>
							<li>
								<a href="chart-line.html" class="slide-item">C3 Line Charts</a>
							</li>
							<li>
								<a href="chart-donut.html" class="slide-item">C3 Donut Charts</a>
							</li>
							<li>
								<a href="chart-pie.html" class="slide-item">C3 Pie charts</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cubes"></i><span class="side-menu__label"> Elements</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="alerts.html" class="slide-item">Alerts</a>
							</li>
							<li>
								<a href="buttons.html" class="slide-item">Buttons</a>
							</li>
							<li>
								<a href="colors.html" class="slide-item">Colors</a>
							</li>
							<li>
								<a href="avatars.html" class="slide-item">Avatar-Square</a>
							</li>
							<li>
								<a href="avatar-round.html" class="slide-item">Avatar-Rounded</a>
							</li>
							<li>
								<a href="avatar-radius.html" class="slide-item">Avatar-Radius</a>
							</li>
							<li>
								<a href="dropdown.html" class="slide-item">Drop downs</a>
							</li>
							<li>
								<a href="thumbnails.html" class="slide-item">Thumbnails</a>
							</li>
							<li>
								<a href="mediaobject.html" class="slide-item">Media Object</a>
							</li>
							<li>
								<a href="list.html" class="slide-item">List</a>
							</li>
							<li>
								<a href="tags.html" class="slide-item">Tags</a>
							</li>
							<li>
								<a href="pagination.html" class="slide-item">Pagination</a>
							</li>
							<li>
								<a href="navigation.html" class="slide-item">Navigation</a>
							</li>
							<li>
								<a href="typography.html" class="slide-item">Typography</a>
							</li>
							<li>
								<a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
							</li>
							<li>
								<a href="badge.html" class="slide-item">Badges</a>
							</li>
							<li>
								<a href="jumbotron.html" class="slide-item">Jumbotron</a>
							</li>
							<li>
								<a href="panels.html" class="slide-item">Panels</a>
							</li>
							<li>
								<a href="modal.html" class="slide-item">Modal</a>
							</li>
							<li>
								<a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
							</li>
							<li>
								<a href="progress.html" class="slide-item">Progress</a>
							</li>
							<li>
								<a href="carousel.html" class="slide-item">Carousels</a>
							</li>
							<li>
								<a href="Accordion.html" class="slide-item">Accordions</a>
							</li>
							<li>
								<a href="tabs.html" class="slide-item">Tabs</a>
							</li>
							<li>
								<a href="headers.html" class="slide-item">Headers</a>
							</li>
							<li>
								<a href="footers.html" class="slide-item">Footers</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-th-large"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="form-elements.html" class="slide-item">Form Elements</a>
							</li>
							<li>
								<a href="form-wizard.html" class="slide-item">Form-wizard Elements</a>
							</li>
							<li>
								<a href="wysiwyag.html" class="slide-item">Text Editor</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="tables.html" class="slide-item">Default table</a>
							</li>
							<li>
								<a href="datatable.html" class="slide-item">Data Table</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="side-menu__item" href="maps.html"><i class="side-menu__icon fa fa-map-marker"></i><span class="side-menu__label"> Maps</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-codepen"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="icons.html" class="slide-item">Font Awesome</a>
							</li>
							<li>
								<a href="icons2.html" class="slide-item">Material Design Icons</a>
							</li>
							<li>
								<a href="icons3.html" class="slide-item">Simple Line Iocns</a>
							</li>
							<li>
								<a href="icons4.html" class="slide-item">Feather Icons</a>
							</li>
							<li>
								<a href="icons5.html" class="slide-item">Ionic Icons</a>
							</li>
							<li>
								<a href="icons6.html" class="slide-item">Flag Icons</a>
							</li>
							<li>
								<a href="icons7.html" class="slide-item">pe7 Icons</a>
							</li>
							<li>
								<a href="icons8.html" class="slide-item">Themify Icons</a>
							</li>
							<li>
								<a href="icons9.html" class="slide-item">Typicons Icons</a>
							</li>
							<li>
								<a href="icons10.html" class="slide-item">Weather Icons</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-database"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="profile-1.html" class="slide-item">Profile</a>
							</li>
							<li>
								<a href="editprofile-1.html" class="slide-item">Edit Profile</a>
							</li>
							<li>
								<a href="gallery.html" class="slide-item">Gallery</a>
							</li>
							<li>
								<a href="about.html" class="slide-item">About Company</a>
							</li>
							<li>
								<a href="company-history.html" class="slide-item">Company History</a>
							</li>
							<li>
								<a href="services.html" class="slide-item">Services</a>
							</li>
							<li>
								<a href="faq.html" class="slide-item">FAQS</a>
							</li>
							<li>
								<a href="terms.html" class="slide-item">Terms and Conditions</a>
							</li>
							<li>
								<a href="empty.html" class="slide-item">Empty Page</a>
							</li>
							<li>
								<a href="construction.html" class="slide-item">Under Construction</a>
							</li>
							<li>
								<a href="blog.html" class="slide-item">Blog</a>
							</li>
							<li>
								<a href="invoice.html" class="slide-item">Invoice</a>
							</li>
							<li>
								<a href="pricing.html" class="slide-item">Pricing Tables</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-shopping-cart"></i><span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="shop.html" class="slide-item">Products</a>
							</li>
							<li>
								<a href="shop-des.html" class="slide-item">Product Details</a>
							</li>
							<li>
								<a href="cart.html" class="slide-item">Shopping Cart</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-chain-broken"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="login.html" class="slide-item">Login</a>
							</li>
							<li>
								<a href="register.html" class="slide-item">Register</a>
							</li>
							<li>
								<a href="forgot-password.html" class="slide-item">Forgot password</a>
							</li>
							<li>
								<a href="lockscreen.html" class="slide-item">Lock screen</a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-diamond"></i><span class="side-menu__label">Error pages</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li>
								<a href="400.html" class="slide-item">400 Error</a>
							</li>
							<li>
								<a href="401.html" class="slide-item">401 Error</a>
							</li>
							<li>
								<a href="403.html" class="slide-item">403 Error</a>
							</li>
							<li>
								<a href="404.html" class="slide-item">404 Error</a>
							</li>
							<li>
								<a href="500.html" class="slide-item">500 Error</a>
							</li>
							<li>
								<a href="503.html" class="slide-item">503 Error</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="app-sidebar-footer">
					<a href="emailservices.html">
						<span class="fa fa-envelope" aria-hidden="true"></span>
					</a>
					<a href="profile.html">
						<span class="fa fa-user" aria-hidden="true"></span>
					</a>
					<a href="editprofile.html">
						<span class="fa fa-cog" aria-hidden="true"></span>
					</a>
					<a href="login.html">
						<span class="fa fa-sign-in" aria-hidden="true"></span>
					</a>
					<a href="chat.html">
						<span class="fa fa-comment" aria-hidden="true"></span>
					</a>
				</div>
			</aside>

			<div class="app-content  my-3 my-md-5">
				<div class="side-app">
					<div class="page-header">
						<h4 class="page-title">New Category</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Settings</a></li>
							<li class="breadcrumb-item active" aria-current="page">New Category</li>
						</ol>

					</div>
					<div class="row row-cards">
						<div class="col-md-12">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Create New Category</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group ">
													<label class="form-label">Enter Category</label>
													<input type="text" class="form-control w-100" name="category_name" placeholder="" required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Upload Images</label>
													<input type="file" class="dropify" data-height="180" name="category_image" accept="image/png, image/gif, image/jpeg, image/jpg" />
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-center">
										<button type="submit" class="btn btn-primary waves-effect waves-light" name="submit_add_category">Add Category</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row row-cards">
						<div class="col-md-12">
							<div class="card">

								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Sr No.</th>
													<th>Name</th>
													<th>Image</th>
													<th>Edit</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query = "SELECT * FROM `category`";
												$i = 0;
												$result = $con->query($query);
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) {
														$category_id = $row['id'];
														$category_name = $row['name'];
														$category_image = $row['image'];
														$i++;

														echo '
															<tr>
													<td>' . $i . '</td>
													<td>' . $category_name . '</td>
													<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/category/' . $category_image . '"></span></td>
													<td>
													<i class="fa fa-pencil-square-o" ></i> edit
													</td>
													</tr>
															';
													}
												}
												?>



											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row align-items-center flex-row-reverse">
					<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
						Copyright © 2019 <a href="#">Reallist</a>. Designed by <a href="#">Spruko</a> All rights reserved.
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>


	<!-- Dashboard js -->
	<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
	<script src="../assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
	<script src="../assets/js/vendors/selectize.min.js"></script>
	<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
	<script src="../assets/js/vendors/circle-progress.min.js"></script>
	<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

	<!-- Data tables -->
	<script src="../assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/js/datatable.js"></script>

	<!-- Fullside-menu Js-->
	<script src="../assets/plugins/toggle-sidebar/sidemenu.js"></script>


	<!--Select2 js -->
	<script src="../assets/plugins/select2/select2.full.min.js"></script>

	<!-- WYSIWYG Editor js -->
	<script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
	<script src="../assets/js/formeditor.js"></script>

	<!-- p-scroll bar Js-->
	<script src="../assets/plugins/pscrollbar/pscrollbar.js"></script>
	<script src="../assets/plugins/pscrollbar/pscroll.js"></script>

	<!--Counters -->
	<script src="../assets/plugins/counters/counterup.min.js"></script>
	<script src="../assets/plugins/counters/waypoints.min.js"></script>

	<!-- Custom Js-->
	<script src="../assets/js/admin-custom.js"></script>

	<!-- Inline js -->
	<script src="../assets/js/select2.js"></script>
	<script src="../assets/js/formelements.js"></script>

	<!-- file uploads js -->
	<script src="../assets/plugins/fileuploads/js/dropify.js"></script>

	<?php
	if (isset($_POST['submit_add_category'])) {
		$name = $_POST['category_name'];
		$file_name = time();
		$source_file = $_FILES['category_image']['tmp_name'];
		$dest_file = "../assets/images/category/";
		$extension = pathinfo($_FILES["category_image"]["name"], PATHINFO_EXTENSION);
		move_uploaded_file($source_file, $dest_file . $file_name . "." . $extension)
			or die("Error!!");
		$file_name = "$file_name.$extension";
		$query = "INSERT INTO `category`(`name`,`image`) VALUES ('$name','$file_name')";
		$con->query($query);
		$mysqli->close();
	}
	?>

</body>

</html>