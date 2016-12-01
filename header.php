<?php
/**
 * Header
 *
 */
if (!defined("_VALID_PHP"))
    die('Direct access to this location is not allowed.');

require_once("init.php"); 

 
// Setting Breadcrumb value for page  frfr
$page = array(
    'main' => '',
    'Deep Dishy Admin' => ' | Deep Dishy Admin',
    'template' => ' | Email Template',
    'email' => ' | Templates ',
    'dashboard' => ' | Templates '
);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome To Hypeddit Administrator</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/notify.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support  -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
        <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 

    </head>
    <body>
	
		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="images/logo.gif" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->
  
			</div>
			<span id="extr-page-header-space">  <a class="btn btn-danger" href="logout.php">Logout</a> </span>
 

		</header> 
		
		<?php
			echo $msql        = 	"SELECT * FROM admin";
		$mres = 	mysql_query($msql);
		  if($mres==true){
				$res_row       = 	mysql_num_rows($mres);
				if($res_row>0){
						  $record=mysql_fetch_assoc($mres);
						 echo $art_email 		=  $record['id'];
				}
		 }	
		?>
		
		
		
		<aside id="left-panel">
 
			<nav> 
				<ul>
					<li class="active">
						<a href="" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>

					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">View  Tracks</span></a>
						<ul>
							<li>
								<a href="promotion_inprogress.php">Demos</a>
							</li>
							<li>
								<a href="promotion.php">Process</a>
							</li> 
						</ul>
					</li>
					
					
					<li>
						<a href="template.php"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Email View Templates</span></a>
					</li>
					<li>
						<a href="export-promotions.php"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">Export Report</span></a>	
					</li> 
					<li>
						<a href="reminder-setting.php"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">Reminder</span></a>	
					</li> 
					<li>
						<a href="hchartable.php"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Chart</span></a>
					</li>
					
				 
				</ul>
			</nav>
			

			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>
		<!-- END NAVIGATION -->
 




