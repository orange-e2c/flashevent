<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orange e2c flashevent</title>

	<!--[if lt IE 9]>
        <link rel="stylesheet" href="vendors/boosted-v3.2.1/css/bootstrap-orangeIE82015.css" />
        <link rel="stylesheet" href="vendors/boosted-v3.2.1/css/bootstrap-orange-themeIE82015.css" />
        <link rel="stylesheet" href="vendors/boosted-v3.2.1/css/boostedIE82015.css">
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	<!--[if (gte IE 9) | (!IE)]><!-->
	<link rel="stylesheet" href="vendors/boosted-v3.2.1/css/bootstrap-orange2015.css" />
	<link rel="stylesheet" href="vendors/boosted-v3.2.1/css/bootstrap-orange-theme2015.css" />
	<link rel="stylesheet" href="vendors/boosted-v3.2.1/css/boosted2015.css">
	<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!--<link href="assets/css/style4.css" rel="stylesheet">-->
	<!--<![endif]-->
	<link href="assets/css/app.css" rel="stylesheet">

	<style>
		/* accessibility */
		
		table.tablesorter > thead > tr > th[aria-sort="descending"]:after {
			content: "sorted in descending order";
			border: 0 none;
			clip: rect(0px, 0px, 0px, 0px);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}
		/* accessibility */
		
		table.tablesorter > thead > tr > th[aria-sort="ascending"]:after {
			content: "sorted in ascending order";
			border: 0 none;
			clip: rect(0px, 0px, 0px, 0px);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px;
		}
	</style>

	<!-- Placed at the end of the document so the pages load faster -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="vendors/jquery/1.11.3/jquery.min.js"></script>
	<!-- jQuery validate -->
	<script src="vendors/jquery.validate/1.13.1/jquery.validate.min.js"></script>

</head>

<body role="document">

	<div class="skiplinks">
		<div class="skiplinks_section axs_hide">
			<ul>
				<li id="cdu_skiplink">
				</li>
				<li>
					<a href="#search" class="skiplinks_trigger">first section - search</a>
				</li>
				<li>
					<a href="#alerts" class="skiplinks_trigger">second section - alerts</a>
				</li>
				<li>
					<a href="#sysInfo" class="skiplinks_trigger">third section - systems information</a>
				</li>
			</ul>
		</div>
	</div>


	<header role="banner">
		
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">
		        <img src="assets/images/logo-orange.png" alt='' style="float:left"/>
		        <span class="navbar-brand-text" style="margin-top: 3rem;position: absolute;padding: 0 1rem 1rem;">flash event</span>
		      </a>
		    </div>
		  </div>
		</nav>

	</header>


	<main class="container" role="main" id="content">
		<div id="header" class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>événements</h1>
				</div>
			</div>
		</div>

		<div id="localNavigation" class="container">
			<nav class="navbar navbar-default nav-local" role="navigation" role="navigation">
				<div class=" navbar-collapse local" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#informations" data-toggle="tab">informations</a></li>
						<li><a href="#inscription" data-toggle="tab">inscription</a></li>
					</ul>
				</div>
			</nav>
		</div>



		<div class="tab-content" style="border:0 none;">

			<div class="tab-pane active" id="informations">
				<div class="container-fluid">
					<div class="row">
						<?php include( "informations.php"); ?>
					</div>
				</div>
			</div>

			<div class="tab-pane " id="inscription">
				<div class="container-fluid">
					<div class="row">
						<?php include( "inscription.php"); ?>
					</div>
				</div>
			</div>

		</div>

	</main>
	
	<!-- footer -->
	<footer id="footer" role="contentinfo">
		<div class="container">
			<p>
				<span class="col-md-2">© Orange 2014</span>
				<a class="col-md-2" href="#"><span>sitemap</span></a>
				<a class="col-md-2" href="#"><span>terms & conditions</span></a>
				<a class="col-md-2" href="#"><span>CSR</span></a>
				<a class="col-md-2" href="#"><span>cookies</span></a>
				<a class="col-md-2" href="#"><span>Foundation</span></a>
			</p>
		</div>
	</footer>

	<!-- Include all compiled plugins bootstrap, bootstrap accessibility plugin and boosted specific components (below), or include individual files as needed -->
	<script src="vendors/boosted-v3.2.1/js/boosted.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#myTable").tablesorter({
				sortList: [
					[1, 1]
				],
				headers: {
					// assign the secound column (we start counting zero) 
					0: {
						// disable it by setting the property sorter to false 
						sorter: false
					}
				}
			});
		});
	</script>

	<script type="text/javascript">
		// Surcharge des valeurs du script de la toolbar
		accessibilitytoolbar_custom = {
			idLinkModeContainer: "id_for_cdu_link",
			cssLinkModeClassName: "nav-item-cdu",
			idSkipLinkIdLinkMode: "cdu_skiplink",
			cssSkipLinkClassName: "skiplinks_trigger",
			callback: skiplinksAfterLoad
		};

		$(".skiplinks_trigger").focus(function() {
			$(".skiplinks_section").addClass("skiplinks_show").removeClass("axs_hide")
		});
		$(".skiplinks_trigger").blur(function() {
			$(".skiplinks_section").removeClass("skiplinks_show").addClass("axs_hide")
		});

		function skiplinksAfterLoad() {
			$(".skiplinks_trigger").focus(function() {
				$(".skiplinks_section").addClass("skiplinks_show").removeClass("axs_hide")
			});
			$(".skiplinks_trigger").blur(function() {
				$(".skiplinks_section").removeClass("skiplinks_show").addClass("axs_hide")
			});
		}
	</script>
	<script type="text/javascript" src="vendors/orange/js/toolbar-min.js"></script>

</body>

</html>
