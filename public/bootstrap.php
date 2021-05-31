<?php

function csv_head() {
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Encsé (encse)" />

	<link href="style.css" media="all" rel="Stylesheet" type="text/css"/>
<?php
}

function csv_header(){
?>
<div id="container">
	<div id="top">
		<div id="top-content">
			<div id="logo">
				<h1> <?php
$url = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url);
$dir = '';
for ($i = 1; $i < count($parts) - 1; $i++) {
 $dir .= "/" . $parts[$i] ;
}
 ?> <a href="http://csokavar.hu<?php echo $dir; ?>"><?php echo $dir; ?></a></h1>
			</div>
		</div>
	</div> <!-- top -->

	<div id="main">
		<div id="main-content"> 
<?php
}
function csv_footer() {
?>
</div> <!-- main-content -->
	</div> <!-- main -->


	<div id="footer">
		<p><a href="http://www.csokavar.hu/">Encsé Művek</a> - 2009</p>
		<p>Kapcsolat: <a href="mailto:encse@csokavar.hu">encse@csokavar.hu</a></p>
	</div>

	</div> <!--container -->

	<script>
 	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	 ga('create', 'UA-203054-9', 'auto');
  	 ga('send', 'pageview');

	</script>
<?php
}
?>
