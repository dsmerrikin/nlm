<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Norwood Landscape Management</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<script src="js/html5shiv.js" type="text/javascript"></script>
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="http://use.edgefonts.net/rochester.js"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
	<script type="text/javascript">	
		$(function($){
		   $("#phone").mask("(999) 999-9999");
		});
	</script>
</head>
<body onload="setHeight()">
	<div id="container">
		<header></header>
		<a href="index.html" class="nlmlogo"></a>
		<nav>
			<div class="nav_fill">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="services.html">Landscape Services</a></li>
					<li><a href="seasonal.html">Snow Removal</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="team.html">Team</a></li>
					<li><a href="history.html">History</a></li>
					<li class="active"><a class="current" href="contact.html">Contact Us</a></li>
					<li><a href="newsletters.html">Newsletters</a></li>
					<div style="clear:both;"></div>
				</ul>
			</div>
		</nav>
		<div class="nav_bottom"></div>
		<div style="clear:both;"></div>
		<div id="banner"></div>
		<div id="content-wrapper">
			<div id="content">
				<h2>Contact Us</h2>
				<p>We would love to hear from you so please drop us a line and tell us what you think, what you need, or anything else on your mind regarding our services. We aim to please!</p>
				<div class="contactBox contactLeft">
					<h3>Write, Call, or Email Us</h3>
					<p class="company">Norwood Landscape Company<br />103 Sumner Street<br />Brockton, MA 02301</p>
					<p>Telephone: (508) 857-2314</p>
					<ul>
						<li><span>Mark Norwood</span><a href="mailto:mnorwood@norwoodlandscape.com">mnorwood@norwoodlandscape.com</a></li>
						<li><span>Patrick Casey</span><a href="mailto:pcasey@norwoodlandscape.com">pcasey@norwoodlandscape.com</a></li>
					</ul>
					<img src="images/contact_us_plant.jpg" width="116px" height="138px" alt="contact_plant" id="contactPlant" />
					<div style="clear:both;"></div>
				</div>
				<div class="contactBox contactRight">
					<h3>Send Us a Message</h3>
					<div id="contactForm">
					<form id="form1" class="contactform" name="form1" method="post" action="formtoemailpro.php">
						<label>
						<span class="asterisk">*</span> Name:</label>
						<input id="name" type="text" maxlength="20" size="20" name="name">
						<label>
						Company:</label>
						<input id="company" type="text" maxlength="20" size="20" name="company">						
						<label>
						Phone:</label>
						<input id="phone" type="text" maxlength="35" size="20" name="phone">						
						<label>
						<span class="asterisk">*</span> Email:</label>
						<input id="email" type="text" maxlength="35" size="20" name="email">
						<label>Message:</label>
						<textarea id="message" rows="5" cols="35" name="message"></textarea>						
						<input id="submit" type="submit" value="SUBMIT" name="submit">			
					</form>
			</div>
				</div>
				<div style="clear:both;"></div>
			</div>

		</div>
		<footer>
				<img src="images/twitter_logo.png" width="27px" height="27px" alt="twitter_logo">
				<span class="flink"><a href="https://twitter.com/NLCtogo">Follow us on Twitter</a></span>
				<div style="clear:both;"></div>
		</footer>
	</div>
	<div id="product_footer">
		<p>&copy; Copyright <span id="copyyear"></span>, All Rights Reserved</p>
		<p>Norwood Landscape Management</p>
		<p><a href="" onclick="window.open('http://www.dmerrikin.com','mywindow','width=800,height=600')">Website by Derek Merrikin</a></p>
	</div>

</body>
<script type="text/javascript">
	function setHeight(){
		var cheight = new Array();
		cheight[0] = $(".contactLeft").height();
		cheight[1] = $(".contactRight").height();
		var cmax = Math.max.apply( Math, cheight);
		$(".contactbox").height(cmax);
	}
</script>
<script>
$(document).ready(function() {
	var thisyear = new Date().getFullYear()
	$("#copyyear").text(thisyear);
});
</script>
</html>