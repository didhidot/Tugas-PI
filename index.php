<?php
ini_set("display_errors",0);

// Definisi database
include("includes/defines.php");

// Kumpulan fungsi
include("includes/fungsi.php");

// Koneksi ke database
include("includes/connect.php");

// Membuat session login
cekSession();
?>



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php
			// Memanggil jquery AJAX
			getAjax();
		?>
<title>Penjualan Pulsa</title>
<link type="text/css" rel="stylesheet" href="css/menu.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<script type="text/javascript" src="js/JFCore.js"></script>
		
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>

</head>
<body>
<center>
			
				
<div class="wrap2">
<!-- tab style-1 -->
<div style="float:right">
				
					<!-- Form pencarian nominal -->
					
				</div>
				<div class="navigasi">
				
					<!-- Menampilkan menu -->
					<?php getMenu(); ?>
				</div>
<div class="row2">
	<div class="ajib columns">
		<div class="tab style-1">
    				
    					<ul>
    						<li class="active">
			    				<div class="form">		
										<!-- Menampilkan page/halaman dinamis -->
					<?php getPage($_REQUEST['page']); ?>
							    </div>
							</li>
    						<li><div class="top-grids">
					      			ajiibb
      							</div>   		
								<div class="clear"> </div>
							</li>
    						<li>
    							<div class="settings">
	    							<a href="#single.html"><h5><img src="images/arrow1.png" title="" alt="">Profile</h5></a>
	    							<a href="#single.html"><h5><img src="images/arrow1.png" title="" alt="">Edit</h5></a>
	    							<a href="#single.html"><h5><img src="images/arrow1.png" title="" alt="">Create Account</h5></a>
	    							<a href="#single.html"><h5><img src="images/arrow1.png" title="" alt="">Login</h5></a>
	    							<a href="#single.html"><h5><img src="images/arrow1.png" title="" alt="">Signup</h5></a>
    							</div>
    						</li>
    						<li>
					    		<div class="top-grids">
					      			<div class="top-grid1">
					      				<img src="images/f1.jpg" title="" alt="">
					      			</div>
					      			<div class="top-grid2">
						      			<a href="#single.html"><h4>Saketh<h4></h4></a>
						      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					      			</div>
					      			 <div class="top-grid1">
					      				<img src="images/f2.jpg" title="" alt="">
					      			</div>
					      			<div class="top-grid2">
						      			<a href="#single.html"><h4>Amar<h4></h4></a>
						      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					      			</div>
					      			 <div class="top-grid1">
					      				<img src="images/f3.jpg" title="" alt="">
					      			</div>
					      			<div class="top-grid2">
						      			<a href="#single.html"><h4>Akil<h4></h4></a>
						      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					      			</div>
					      			 <div class="top-grid1">
					      				<img src="images/f4.jpg" title="" alt="">
					      			</div>
					      			<div class="top-grid2">
						      			<a href="#single.html"><h4>Naveen<h4></h4></a>
						      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					      			</div>
					      		</div>    		
								<div class="clear"> </div>
    						</li>
    					</ul>
		
		</div>
</div>            
</div>			
</div>				
				
				
				
				
				
					
								
			
		</center>
<div class="wrap">
<!-- tab style-1 -->
		
</div>
<div class="wrap">
	<!--footer-->
<div class="footer">
	<p>Ini adalah <a href="#single.html">Pemrograman Internet</a></p>
</div>
<div class="clear"> </div>
</div>
    </body>
</html>





