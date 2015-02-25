<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	
<!-- slider -->
<link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">	
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel-autoscroll.min.js"></script>
<script type="text/javascript" src="js/jcarousel.responsive.js"></script>
<!-- vertical slider -->
<link rel="stylesheet" href="css/tinycarousel.css" type="text/css" media="screen"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/jquery.tinycarousel.js"></script>

<style>
.jcarousel li{width:210px !important; height:150px !important;}
.jcarousel li img{width:210px !important; height:150px !important;}
</style>	
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#slider2').tinycarousel({
				axis   : "y"
			});
			$('#slider1').tinycarousel({
				controls: false,
				interval: true, // move to the next block on interval.
				intervaltime: 6000, // interval time in milliseconds.
				animation: true, // false is instant, true is animate.
				duration: 16000,
				axis   : "x"
			});
		});
		
		function myfunction(){
			var bodycolor = $("#bodycolor").val();
			$("#addcolor").css('background',bodycolor);
		}
		$(function(){
		var url = window.location.pathname;
		var index = url.split("/");
		var filename = index[index.length - 1];
		
		if(filename){
		$('#templatemo_left_menu li.active').removeClass('active');
		$('#'+filename).addClass('active');
		}else{
		$('#index').addClass('active');
		}
		});
	</script>	
</head>
<?php include("includes/db.php"); ?>
<body id="addcolor">
	<!-- wrapper -->
	<div id="wrapper">
	<input type="color" name="favcolor" id="bodycolor" value="#50a6d2" onchange="myfunction()">
	<input type="color" name="favcolor1" id="contcolor" value="#8dd3fa" onchange="myfunction1()">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
						
				<!-- header -->
				<header class="header">
					<h1 id="logo"><a href="#">Prakash Engineers</a></h1>
					<nav id="navigation">
						<ul id="templatemo_left_menu">
							<li class="active" id="index"><a href="index">HOME</a></li>
							<li id="about"><a href="about" >ABOUT US</a></li>
							<li id="services"><a href="services" >SERVICES<span></span></a>
								<ul>
								<?php $serv = mysqli_query($con, "select * from services"); 
								while($servi = mysqli_fetch_array($serv)){ ?>
									<li><a href="services_details?id=<?php echo $servi['id']; ?>"><?php echo $servi['name']; ?></a></li>
								<?php } ?>
								</ul>
							</li>
							<li id="gallery_images"><a href="gallery_images" >GALLERY</a></li>
							<li id="contact"><a href="contact" >CONTACT</a></li>
							
						</ul>
					</nav>
					<div class="cl">&nbsp;</div>
				</header>