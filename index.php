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
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <!--<![endif]-->
		<link href="assets/css/gabarit.css" rel="stylesheet">

		<style>/* accessibility */
			table.tablesorter > thead > tr > th[aria-sort="descending"]:after { 
				content:"sorted in descending order"; 
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
				content:"sorted in ascending order"; 
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

	</head>

	<body role="document">

		<div class="skiplinks" >
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
            <nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img id="orange_logo" src="assets/images/logo-orange.png" alt=''/>
						<span id="app_name">flash event <span class="sr-only">flash event</span></span>
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-menu nav-shift">
						<li class="nav-item"><a href="#" title="open the news menu">dashboard</a></li>
						<li class="nav-item"><a href="#" title="open the news menu">manage</a></li>
						<li class="nav-item"><a href="#" title="open the news menu">parameters</a></li>
						<li class="nav-item" id="id_for_cdu_link"></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<a href="#" class="dropdown-toggle active" data-toggle="dropdown">
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								<span class="hidden-xs hidden-sm">&nbsp;language</span>&nbsp;<b class="caret" aria-hidden="true"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">français</a></li>
								<li><a href="#">english</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="dropdown-toggle active" data-toggle="dropdown">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<span class="hidden-xs hidden-sm">&nbsp;hello 
									<span class="orange">admin</span>&nbsp;
								</span><b class="caret" aria-hidden="true"></b>

							</a>
							<ul class="dropdown-menu">
								<li><a href="#">logout</a></li>
								<li><a href="#">preferences</a></li>
							</ul>
						</li>
					</ul>
			</div>-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		</header>


	   <main id="content" class="container-fluid" role="main">

		<div class="row col-wrap">
			<div class="col-md-12 col" id="first">
				<div class="info-block">

					<h1 id="search" class="h2">évènements</h1>
					
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#informations" data-toggle="tab">informations</a></li>
						<li><a href="#inscriptions" data-toggle="tab">inscriptions</a></li>
					</ul>
					
					<div class="tab-content">
						
						<div class="tab-pane hide-when-small" id="informations">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</div>
						
						<div class="tab-pane active" id="inscriptions">
							<!-- TODO : include php news -->
							<?php
							include 'home.php';
							?>
							
							<form id="search-users" name="searchUsers" method="post" action="" class="form-horizontal">
								<div class="form-group">
									<label for="phone" class="col-sm-2 control-label">Phone <span class="star">*</span> </label>
									<div class="col-sm-10">
										<input class="form-control required" required="" aria-required="true" name="phone" id="phone" maxlength="3" type="tel">
									</div>
								</div>
								<div class="form-group">
									<label for="pro_check" class="col-sm-2 control-label">Pro ? <span class="star">*</span> </label>
									<div class="col-sm-10">
										<input id="pro_check" type="checkbox" class="checkbox"> 
									</div>
								</div>

								<div class="form-group">
									<label for="location" class="col-sm-2 control-label">Location <span class="star">*</span></label>
									<div class="col-sm-10">
										<select class="valid form-control" id="location" name="location">
											<option value="AF"> Afghanistan </option>
											<option value="AL"> Albania </option>
											<option value="DZ"> Algeria </option>
											<option value="AS"> American Samoa </option>
											<option value="AD"> Andorra </option>
											<option value="AO"> Angola </option>
											<option value="AI"> Anguilla </option>
											<option value="AQ"> Antarctica </option>
											<option value="AG"> Antigua and Barbuda </option>
											<option value="AR"> Argentina </option>
											<option value="AM"> Armenia </option>
											<option value="AW"> Aruba </option>
											<option value="AU"> Australia </option>
											<option value="AT"> Austria </option>
											<option value="AZ"> Azerbaijan </option>
											<option value="BS"> Bahamas </option>
											<option value="OT"> ... </option>
										</select>
									</div>
								</div>

								<div class="center">
									<button type="submit" class="btn btn-primary">search</button>
								</div>
							</form>

						</div>
					

					</div>
				</div>
			</div>

			
			
		</div>
		
		<div class="row base col-wrap">
			<!-- add a second row of wells or rounded corner divs immeadiately underneath - tips to create x same height columns -->
			<div class="col-md-6 col-base"><div class="info-block"></div></div>
			<div class="col-md-6 col-base"><div class="info-block"></div></div>
		</div>

		<div class="row">
			<div class="col-md-12" id="third">
				<div class="info-block">
					<h1 id="sysInfo" class="h2">systems information</h1>
					<div class="row test">
						<div class="col-lg-4 col-md-6">
							<div class="sub-block">
								<h2 class="h4">system A</h2>
								<table id="sys1" class="table">
									<thead class="cf">
										<tr>
											<th scope="col"></th>
											<th scope="col">id</th>
											<th scope="col">type</th>
											<th scope="col">status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="assets/images/Cancel.png" class="alert-img"/></td>
											<td>447765896321</td>
											<td>BT</td>
											<td><span class="error">stopped</span></td>
										</tr>
										<tr>
											<td><img src="assets/images/Ok.png" class="alert-img"/></td>
											<td>447765896327</td>
											<td>Warn</td>
											<td><span class="ok">ok</span></td>
										</tr>
										<tr>
											<td><img src="assets/images/Warning.png" class="alert-img"/></td>
											<td>447765896322</td>
											<td>MMK</td>
											<td><span class="warning">disfunction</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="sub-block">
								<h2 class="h4">system B</h2>
								<table id="sys2" class="table">
									<thead class="cf">
										<tr>
											<th scope="col"></th>
											<th scope="col">id</th>
											<th scope="col">type</th>
											<th scope="col">status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="assets/images/Cancel.png" class="alert-img"/></td>
											<td>447765896321</td>
											<td>BT</td>
											<td><span class="error">stopped</span></td>
										</tr>
										<tr>
											<td><img src="assets/images/Ok.png" class="alert-img"/></td>
											<td>447765896327</td>
											<td>Warn</td>
											<td><span class="ok">ok</span></td>
										</tr>
										<tr>
											<td><img src="assets/images/Warning.png" class="alert-img"/></td>
											<td>447765896322</td>
											<td>MMK</td>
											<td><span class="warning">disfunction</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="sub-block">
								<h2 class="h4">system C</h2>
								<table id="sys3" class="table">
									<thead class="cf">
										<tr>
											<th scope="col"></th>
											<th scope="col">id</th>
											<th scope="col">type</th>
											<th scope="col">status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="assets/images/Cancel.png" class="alert-img"/></td>
											<td>447765896321</td>
											<td>BT</td>
											<td><span class="error">stopped</span></td>
										</tr>
										<tr>
											<td><img src="assets/images/Ok.png" class="alert-img"/></td>
											<td>447765896327</td>
											<td>Warn</td>
											<td><span class="ok">ok</span></td>
										</tr>
										<tr>
											<td><img src="assets/images/Warning.png" class="alert-img"/></td>
											<td>447765896322</td>
											<td>MMK</td>
											<td><span class="warning">disfunction</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- fin de la row globale-->
	</main><!--/.container-->

	<footer role="contentinfo">
		<div class="container-fluid ">
			<p>
				<a href="#"><span>contact</span></a> 
				<a href="#" class="pull-right"><span>help</span></a> 
			</p>
		</div>
	</footer>


		<!-- Placed at the end of the document so the pages load faster -->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- jQuery validate -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins bootstrap, bootstrap accessibility plugin and boosted specific components (below), or include individual files as needed -->
    <script src="vendors/boosted-v3.2.1/js/boosted.min.js"></script>
	<script>
		$(document).ready(function() 
											{ 
												$("#myTable").tablesorter({ 
													sortList: [[1,1]],
													headers: { 
														// assign the secound column (we start counting zero) 
														0: { 
															// disable it by setting the property sorter to false 
															sorter: false 
														}
													} 
												}); 
											} 
										 );
	</script>

	<script type="text/javascript">
		// Surcharge des valeurs du script de la toolbar
		accessibilitytoolbar_custom={
			idLinkModeContainer:"id_for_cdu_link",
			cssLinkModeClassName:"nav-item-cdu",
			idSkipLinkIdLinkMode:"cdu_skiplink",
			cssSkipLinkClassName: "skiplinks_trigger",
			callback:skiplinksAfterLoad
		};

		$(".skiplinks_trigger").focus(function(){
			$(".skiplinks_section").addClass("skiplinks_show").removeClass("axs_hide")
		});
		$(".skiplinks_trigger").blur(function(){
			$(".skiplinks_section").removeClass("skiplinks_show").addClass("axs_hide")
		});  

		function skiplinksAfterLoad(){
			$(".skiplinks_trigger").focus(function(){
				$(".skiplinks_section").addClass("skiplinks_show").removeClass("axs_hide")
			});
			$(".skiplinks_trigger").blur(function(){
				$(".skiplinks_section").removeClass("skiplinks_show").addClass("axs_hide")
			});
		}
	</script>
	<script type="text/javascript" src="vendors/orange/js/toolbar-min.js"></script>

	</body>
</html>
