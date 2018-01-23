<!DOCTYPE HTML>

<html>
	<head>
		<title>What is my IP | TechMuzz</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="A quick tool to find your IP Address online for free" />
		<meta name="keywords" content="IP Address, IP Address of my PC, My IP address, what is my IP, how to find ip address,whatismyip,find ip address online, free online IP address" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39693139-2', 'auto');
  ga('send', 'pageview');

</script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		
	</head>
	<body class="loading">
	
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>IP Address</h1>
						
						<h1>
						<?php
$ip = getenv("REMOTE_ADDR") ; 
Echo $ip;
?></h1>
<?php $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    echo "<h1>City :".$details->city."</br> Country : ".$details->country."</br> Longitude/Lattitude:</br> ".$details->loc."</h1>"; ?>
						<nav>
							<ul>
								<li><a href="https://twitter.com/techmuzz" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/techmuzz" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="mailto:info@techmuzz.com?Subject=Your%20subject" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; TechMuzz &nbsp;&bull;&nbsp; Powered By <a href="http://www.techmuzz.com" >TechMuzz</a>&nbsp;&bull;&nbsp; Design: <a href="http://html5up.net" rel="nofollow">HTML5 UP</a>.</span>
					</footer>
				
			</div>
		</div>
	</body>
</html>