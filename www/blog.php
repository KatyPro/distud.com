<?PHP  
require_once('regist/lib/functions.php');
header("Content-Type: text/html; charset=windows-1251");
session_start();
$uselogin = login($_SESSION['login'],$_SESSION['password']);
	if(!$uselogin){
	header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
		<title>Galaxy a Corporate Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<!-- //js -->
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Galaxy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
	<div class="container">
		<div class="header-part">
			<div class="head-logo">
				<a href="index.html"><img src="images/logo.png" alt=" "></a>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li><a href="#home" class="scroll">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#team" class="scroll">Team</a></li>
						<li><a href="#price" class="scroll">Pricing</a></li>
						<li><a href="#blog" class="scroll">Blog</a></li>
					</ul>
					<script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
					</script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!-- //header -->
<!-- banner-bottom -->
	<div class="banner-bottom1">
	<div class="container">
		<h2>Lacinia eget consecteture sed convallis</h2>
		<div class="banner-bottom1-left">
			<img src="images/b.jpg" alt=" " />
			<p>Sed porttitor lactus nibh.Vivamus magna justo.Lacinia eget consecteture sed,convallis att
				tellus.Curabitur aliquet quam id dui posuere blandit.Cras ultricies ligula sed magna...
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitationDonec sollicitudin molestie malesuada. Nulla quis lorem ut libero mal suada 
				feugiat. Curabitur aliquet quam uis loremUt enim ad minim cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit 
				anim id est laborum.Donec sollicitudin molestie masuada. Curabitur aliquet quam id duiposuere blandit. Donec sollicitudin 
				molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscingelit. Curabitur aliquet quam id dui 
				posuere blandit. Proin eget tortor risus.Sed porttitor lactus nibh.Vivamus magna justo.
				Lacinia eget consecteture sed,convallis att
				tellus.Curabitur aliquet quam id dui posuere blandit.Cras ultricies ligula sed magna</p>
			
		</div>
		<div class="banner-bottom1-right">
			<div class="banner-bottom1-right1">
				<h3>CATEGORIES</h3>
				<ul>
					<li><a href="#">Pellentesque in ipsum</a></li>
					<li><a href="#">Vivamus magna justo</a></li>
					<li><a href="#">Cras ultricies ligula</a></li>
					<li><a href="#">Orci porta dapibus</a></li>
					<li><a href="#">est oben dis</a></li>
					<li><a href="#">Curabitur aliquet quam uis lorem</a></li>
					<li><a href="#">Nulla quis lorem ut libero</a></li>
				</ul>
			</div>
			<div class="banner-bottom1-right1">
				<h3>ARCHIEVE</h3>
				<ul>
					<li><a href="#">December 2014</a></li>
					<li><a href="#">March 2015</a></li>
					<li><a href="#">April 2015</a></li>
					<li><a href="#">June 2015</a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="tags">
				<div class="tags-left">
					<ul>
						<li><a href="#"><small class="para"> </small><span>January 3,2015</span></a></li>
						<li><a href="#"><small class="para1"> </small><span>admin</span></a></li>
						<li><a href="#"><small class="para2"> </small><span>No Comments</span></a></li>
						<li><a href="#"><small class="para3"> </small><span>View posts</span></a></li>
					</ul>
				</div>
				<div class="tags-right">
					<ul>
						<li><a href="#"><small class="para4"> </small><span>Permalink</span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
		</div>
		<div class="responses">
			<h3>RESPONSES</h3>
			<div class="response">
				<div class="f1">
					<span> </span>
				</div>
				<div class="response-text">
					<ul>
						<li>Admin</li>
						<li>3 January 2015 at 11am</li>
					</ul>
					<p>It is a long established fact that a reader will be distracted by
					the readable content of a page when looking at its layout.
					The point of using Lorem Ipsum is that it has a more-or-less</p>
					<a href="#">Reply</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="response">
				<div class="f1">
					<span> </span>
				</div>
				<div class="response-text">
					<ul>
						<li>Admin</li>
						<li>3 January 2015 at 11am</li>
					</ul>
					<p>It is a long established fact that a reader will be distracted by
					the readable content of a page when looking at its layout.
					The point of using Lorem Ipsum is that it has a more-or-less</p>
					<a href="#">Reply</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="comments">
			<h3>leave a comment</h3> 
			<form>
				<input type="text" placeholder="Name" required=" ">
				<input type="text" placeholder="Email" required=" ">
				<input type="text" placeholder="Phone Number" required=" ">
				<textarea placeholder="Message" required=" "></textarea>
				<input type="submit" value="send">
			</form>
		</div>
	</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="footer-left">
			<div class="footer-left-text">
				<p>Design by<a href="http://w3layouts.com/"> w3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="footer-right">
			<ul>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
				<li><a href="#" class="dribble"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
<!-- //footer -->