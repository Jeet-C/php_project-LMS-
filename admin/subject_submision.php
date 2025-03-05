<?php 
session_start();
if (isset($_SESSION['us'])) {
	//echo $_SESSION['us'];

 include("common/db.php");
 if(isset($_POST['add_1'])) {
	$st=strtoupper($_POST['stream']);
	if($_POST['stream']!=""){

		$str="SELECT * FROM stream";
		$q=$con->query($str);
		if($q->num_rows>0){
			while ($row_1=$q->fetch_assoc()) {
				if($row_1['stream']==$st){
					header("location:subject_submision.php");
				}else{
					$ins_str="INSERT INTO stream SET stream='$st'";
					$con->query($ins_str);
				}	
			}
		}else{
			$ins_str="INSERT INTO stream SET stream='$st'";
			$con->query($ins_str);
		}	
    }
}

if(isset($_POST['add_2'])) {
	$se=strtoupper($_POST['semester']);
	if($_POST['semester']!=""){
		
		$sem="SELECT * FROM semester";
		$qu=$con->query($sem);
		if($qu->num_rows>0){
		while ($row_2=$qu->fetch_assoc()) {
			if($row_2['semester']==$se){
				header("location:subject_submision.php");
			}else{
				$ins_sem="INSERT INTO semester SET semester='$se'";
				$con->query($ins_sem);
			}
		}
		}else{
			$ins_sem="INSERT INTO semester SET semester='$se'";
			$con->query($ins_sem);
		}		
	}
}

if(isset($_POST['add_3'])) {
	 $se=strtoupper($_POST['subject']);
	 $stre=$_POST['stre'];
	 $seme=$_POST['seme'];
	if($_POST['subject']!="" && $_POST['stre']!="" && $_POST['seme']!=""){
		$sub="SELECT * FROM subject WHERE subject='$se' AND semester='$seme' AND stream='$stre'";
		$qu=$con->query($sub);
		if($qu->num_rows>0){
			header("location:subject_submision.php");		
		}else{
			$ins_sub="INSERT INTO subject SET subject='$se',semester='$seme',stream='$stre'";
			$con->query($ins_sub);
		}			
    }
}
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
									<h3>Default Layout</h3>
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
					<form action="" method="post">
						<div class="row">
							<div class="col-md-4">
								<label>
									<h4>Stream :</h4>
									<p><input type="text" id="str" name="stream" placeholder="Stream Name"></p>
									<p><button name="add_1" class="btn btn-primary">ADD</button></p>
								</label>
							</div>
							<div class="col-md-4">
								<label for="sm">
									<h4>Semester :</h4>
									<p><input type="text" id="sm" name="semester" placeholder="Semester Name"></p>
									<p><button name="add_2" class="btn btn-primary">ADD</button></p>
								</label>
							</div>

							<div class="col-md-4">

								<p><select name="stre">
										<option value="">-Select stream-</option>
										<?php
									  $str="SELECT * FROM stream";
									  $q=$con->query($str);
									  while ($row_1=$q->fetch_assoc()) {
									?>
										<option value="<?php echo $row_1['stream']; ?> ">
											<?php echo $row_1['stream']; ?>
										</option>
										<?php } ?>

									</select>

								<select name="seme">
										<option value="">-Select semester-</option>
										<?php
									  $sem="SELECT * FROM semester";
									  $qu=$con->query($sem);
									  while ($row_2=$qu->fetch_assoc()) {
									?>
										<option value="<?php echo $row_2['semester']; ?> ">
											<?php echo $row_2['semester']; ?>
										</option>
										<?php } ?>
									</select></p>
								<label for="sub">
									<h4>Subject :</h4>
									<p><input type="text" id="sub" name="subject" placeholder="Subject Name">
									<button name="add_3" class="btn btn-primary" >ADD</button></p>
								</label>
							</div>
						</div>
					</form>


					<br>
					
					<div class="container mt-3">
						<div class="row">
							<div class="col-sm-4">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>
												<h5>All Stream</h5>
											</th>
											<th>
												<h5>Delete</h5>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
			                              $str="SELECT * FROM stream";
			                              $q=$con->query($str);
			                              while ($row_1=$q->fetch_assoc()) {
				                        ?>
										<tr>
											<td>
												<h6>
													<?php echo $row_1['stream'];?>
												</h6>
											</td>
											<td>
												<a href="del.php?di=<?php echo $row_1['pid']; ?>"
													class="btn btn-danger">Delete</a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>

							<div class="col-sm-4">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>
												<h5>All Semester</h5>
											</th>
											<th>
												<h5>Delete</h5>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
			                              $sem="SELECT * FROM semester";
			                              $qu=$con->query($sem);
			                              while ($row_2=$qu->fetch_assoc()) {
			                            ?>
										<tr>
											<td>
												<h6>
													<?php echo $row_2['semester'];?>
												</h6>
											</td>
											<td>
												<a href="del.php?did=<?php echo $row_2['pid']; ?>"
													class="btn btn-danger">Delete</a>
											</td>
										</tr>
										<?php } ?>

									</tbody>
								</table>
							</div>
							
							<div class="col-sm-4">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>
												<h5>Subject's </h5>
											</th>
											<th>
												<h5>semester </h5>
											</th>
											<th>
												<h5>Stream </h5>
											</th>
											<th>
												<h5>Delete</h5>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
			                              $sub="SELECT * FROM subject";
			                              $qu=$con->query($sub);
			                              while ($row_3=$qu->fetch_assoc()) {
			                            ?>
										<tr>
											<td>
												<h6>
													<?php echo $row_3['subject'];?>
												</h6>
											</td>
											<td>
												<h6>
													<?php echo $row_3['semester'];?>
												</h6>
											</td>
											<td>
												<h6>
													<?php echo $row_3['stream'];?>
												</h6>
											</td>
											<td>
												<a href="del.php?d=<?php echo $row_3['pid']; ?>"
													class="btn btn-danger">Delete</a>
											</td>
										</tr>
										<?php } ?>

									</tbody>
								</table>
							</div>
						</div>

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
} ?>