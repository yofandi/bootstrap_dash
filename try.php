<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="assets/style.css">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="wrapper">
		<nav id="sidebar">

			<!-- <div id="dismiss">
				<i class="fas fa-arrow-left"></i>
			</div> -->

			<div class="sidebar-header">
				<h3>Bootstrap</h3>
				<strong>BS</strong>
			</div>
			

			<ul class="list-unstyled component">
				<!-- <p>Heading</p> -->
				<li class="active">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" title="Home">Home</a>

					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li><a href="#" title="Sub 1">Sub 1</a></li>
						<li><a href="#" title="Sub 1">Sub 2</a></li>
						<li><a href="#" title="Sub 1">Sub 3</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="About">About</a>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" title="Home">Pages</a>

					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li><a href="#" title="Sub 1">SubPage 1</a></li>
						<li><a href="#" title="Sub 1">SubPage 2</a></li>
						<li><a href="#" title="Sub 1">SubPage 3</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="portofolio">Portofolio</a>
				</li>
				<li>
					<a href="#" title="Contact">Contact</a>
				</li>
			</ul>
		</nav>

		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="btn btn-info">
						<i class="fas fa-align-left"></i><span>Toggle Sidebar</span>
					</button>
				</div>
			</nav>
		</div>

		<!-- dark overlay element -->
		<div class="overlay"></div>
	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

	<script src="assets/style.js"></script>
</body>
</html>