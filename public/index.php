<!DOCTYPE html>
<?php require('./bootstrap.php'); ?>
<html>
<head>
	<?php csv_head(); ?>

	<title>Nagy adóvarázslat</title>
	<script src="js/jquery.js"></script> 
	<script src="js/jb.js"></script> 

<style>
.index
{
	font-size: small;
	position:relative;
	bottom: .5em;
}
.answer{
	text-align: center;
}
</style>

</head>
<body>
	<?php csv_header(); ?>

	<h2>Nagy adóvarázslat</h2>
	<p>Ez a kis program egy adószámból kiszámítja<a class="index" href="#link-1">1</a> a tulajdonos születésnapját. A számítás az Ön számítógépén történik. Az adatokat nem küldjük el az internetre.<p>
	<p>Az Ön csodálatos adóazonosítója:</p>
	<div class="form">
		<input type="text" size="10" id="q" value="" />
		<input type="submit" id="query" value="search" />
		<script type="text/javascript">$('#query').click(function(){performQuery($('#q').val());});</script>
	</div>
	<div id="resultsPanel"></div>


	<h3>Források</h3>
	<p id="link-1">1: <a href="http://www.complex.hu/kzldat/t9600020.htm/t9600020_5.htm#kagy29">http://www.complex.hu/kzldat/t9600020.htm/t9600020_5.htm#kagy29</a></p>

	<?php csv_footer(); ?>
</body>
</html>



