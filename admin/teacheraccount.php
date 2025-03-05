<?php
session_start();
if (isset($_SESSION['us'])) {
	//echo $_SESSION['us'];


 include("common/db.php");
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Bootstrap Dashboards" />
	<meta name="keywords"
		content="Layout, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Lobipanel, Drag &amp; Drop, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="img/favicon.svg" />
	<title>Best Admin Dashboards - Layout</title>

	<!--
			**********************
			**********************
			Common CSS files
			**********************
			**********************
		-->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Icomoon Icons CSS -->
	<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

	<!-- Master CSS -->
	<link rel="stylesheet" href="css/main.min.css" />

	<!-- Daterange CSS -->
	<link rel="stylesheet" href="vendor/daterange/daterange.css" />
	  <!-- telwind css link -->
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>


	<!-- BEGIN .app-wrap -->
	<div class="app-wrap">

		<!-- BEGIN .app-heading -->
		<?php include("common/header.php"); ?>
		<!-- END: .app-heading -->

		<!-- BEGIN .app-container -->
		<div class="app-container">

			<!-- BEGIN .app-side -->
			<?php include("common/slidebar.php"); ?>

			<!-- END: .app-side -->

			<!-- BEGIN .app-main -->
			<div class="app-main">

				<!-- BEGIN .main-heading -->
				<header class="main-heading">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="page-icon">
									<i class="icon-layers"></i>
								</div>
								<div class="page-title">
									<h3>Insert Notes</h3>
									<h6 class="sub-heading">Welcome to this site</h6>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="daterange-container">
									<div id="reportrange" class="form-control">
										<span></span> <i class="icon-chevron-down down-arrow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- END: .main-heading -->

				<!-- BEGIN .main-content -->
				<div class="main-content">

				<div class="container mt-3">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Teacher Name</th>
									<th>email</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$see="SELECT * FROM teacher";
								$r=$con->query($see);
								while($row=$r->fetch_assoc()){
								?>
								<tr>
									<td>
										<?php echo $row['name']; ?>
									</td>
									<td>
										<?php echo $row['email']; ?>
									</td>
									
									<td><a href="techeraccountedit.php?eid=<?php echo $row['id']; ?>"
											class="btn btn-primary">Edit</a></td>
									<td><a href="delete.php?de=<?php echo $row['id']; ?>"
											class="btn btn-danger">Delete</a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

				</div>
				<!-- END: .main-content -->

				<!-- BEGIN .main-footer -->
				<?php include("common/footer.php"); ?>
				<!-- END: .main-footer -->

			</div>
			<!-- END: .app-main -->

		</div>
		<!-- END: .app-container -->

	</div>
	<!-- END: .app-wrap -->


	<!--
			**********************
			**********************
			Common JS files
			**********************
			**********************
		-->

	<!-- jQuery JS. -->
	<script src="js/jquery.js"></script>

	<!-- Tether Js, then other JS. -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendor/unifyMenu/unifyMenu.js"></script>
	<script src="vendor/onoffcanvas/onoffcanvas.js"></script>
	<script src="js/moment.js"></script>

	<!-- News Ticker JS -->
	<script src="vendor/newsticker/newsTicker.min.js"></script>
	<script src="vendor/newsticker/custom-newsTicker.js"></script>

	<!-- Slimscroll JS -->
	<script src="vendor/slimscroll/slimscroll.min.js"></script>
	<script src="vendor/slimscroll/custom-scrollbar.js"></script>

	<!-- Daterange JS -->
	<script src="vendor/daterange/daterange.js"></script>
	<script src="vendor/daterange/custom-daterange.js"></script>

	<!-- Common JS -->
	<script src="js/common.js"></script>

</body>

</html>
<?php } 
else{
	header("location:../index.php");
}?>