<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The HelpHand bootstrap Website Template |What :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
 <!--start-smoth-scrolling-->
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
<!--start-smoth-scrolling-->
<!-- webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- webfonts-->
<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
	<!--//End-top-nav-script-->
</head>
<body>
<!-- header -->
	<div class="what">
		<div class="header">
			<div class="container">
			<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" title="Help hand" />
							<h1>Helping Hand's</h1>
							</a>
					</div>
			        <!-- /logo -->
				<!-- top-nav -->
				<div class="top-nav">
					<span class="menu"> </span>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="what.html"> What we do</a></li>
							<li><a href="donate.html">  Donate </a></li>
							<li><a href="blog.html"> Blog</a></li>
							<li><a href="contact.html">Contact us</a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>
		<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
		<!-- script-for-nav -->
		<!-- /top-nav -->
			<div class="clearfix"> </div>
		</div>
<!-- /header -->
<!--/start-services-->
			 <div class="what-section">
			 	<h3>latest Updates of Our Donations</h3>
				 			<div class="container">
 				  <div class="ad728x90" style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- w3layouts_demo_728x90 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-9153409599391170"
				     data-ad-slot="8639520288"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({</script>
 				  </div>

		 			<div class="row serve-row">
		 			  <div class="clearfix"></div>
			</div>
<div>
<?php
include_once('connection.php');


		$sql ="SELECT * FROM latestupd ORDER BY upd_id Desc LIMIT 5";

$result=mysql_query($sql);

echo"<hr>";
	while($row = mysql_fetch_array($result))

	{
		echo "<center><font color='red'><strong>Organization Name :</strong> ".$row['title']."<br/><br/>" ;
		echo "<strong>Contents :</strong> ".$row['content']."<br/><br/>" ;
		echo "<strong>Updated Date :</strong> ".$row['date']."<br/><br/>" ;
		echo "<strong>Picture:<br></strong><img src='latestUpdates/".$row['image']."' width='500' height='200'" ;
		echo "</font></center><hr><br>";
	}	
	
?>
</div>
	 			</div>
			 </div>
	<!--/start-stories-->
<!-- Portfolio Starts Here -->
	<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
		<div class="container">
			<div class="ad728x90" style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- w3layouts_demo_728x90 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-9153409599391170"
				     data-ad-slot="8639520288"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		   </div>

			<div class="portfolio-top">
			<h3>DONATE</h3>
			<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web"> ShOW All</span></li>
						<li><span class="filter" data-filter="app">ELETRONICS</span></li>
						<li><span class="filter" data-filter="photo">CLOTH</span></li>
						<li><span class="filter" data-filter="card">FOOD GRAIN</span></li>
					</ul>
					<div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/d11.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/d1.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/search.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<h5>ipsum dolor</h5>
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>				
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/d21.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/d2.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/search.png" alt=""/></h2>
						  	 </div></a>

		                </div>
		                <div class ="small-text">
		                	<h5>ipsum dolor</h5>
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>		
					<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/d31.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/d3.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/search.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<h5>ipsum dolor</h5>
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>

					</div>				
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/d41.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/d4.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/search.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<h5>ipsum dolor</h5>
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p>
		                </div>
					</div>	
					<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/d51.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/d5.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/search.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<h5>ipsum dolor</h5>
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p>
		                </div>
					</div>			
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/d61.png" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
						     <img src="images/d6.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/search.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                 <div class ="small-text">
		                 	<h5>ipsum dolor</h5>
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>		
		</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
	<!-- Portfolio Ends Here -->
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
		// http://mixitup.io
		$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
			effects: ['fade'],
			easing: 'snap',
			// call the hover effect
			onMixEnd: filterList.hoverEffect()
		});				
	
	},
	
	hoverEffect: function () {
	
		// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
				$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
				$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
			function () {
				$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
				$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	
	}

};

// Run the show!
	filterList.init();
	
});	
</script>
<!--strat-image-cursuals-->
                  <div class="scroll-slider">
                  	<div class="container"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s1.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s4.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s2.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s3.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s4.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s1.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s2.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s2.png"></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clear"> </div>      
						  <!--strat-image-cursuals-->
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
								<!--End-image-cursuals-->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 1
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 2
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
				  			</div>				
						</div>

		<!--/start-footer-->
				<div class="footer">
						<div class="container">

						<div class="footer-grids">
							<div class="col-md-4 footer-grid-icons">
								<h3>Follow Us:</h3>
										<ul>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="fb" href="#"><span> </span></a></li>
											<li><a class="you" href="#"><span> </span></a></li>
											<li><a class="in" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
							</div>
							<div class="col-md-4 footer-grid-text">
								<h3>Join our news letter</h3>
								<p>Lorem Ipsum is simply dummy text of theprinting and typesetting industry.</p>
								form method="post" action="contact-post.html">
								 <a class="sign-btn" href="signup.html">Sign up</a>
							</div>
							<div class="col-md-4 copy-right">
								<p>&copy; Design by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
							</div>
							<div class="clearfix"> </div>	
						</div>							
					</div>
				</div>
					<!--//End-foote-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</body>
</html>