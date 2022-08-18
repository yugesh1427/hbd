<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Hearty Queen's Bday🥰</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/2.7.6/idangerous.swiper.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

	<div id="container4">
		<span id="text2"></span>
		<span id="text3"></span>
	</div>
	
	<svg id="filters">
		<defs>
			<filter id="threshold">
				<feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
										0 1 0 0 0
										0 0 1 0 0
										0 0 0 255 -140" />
			</filter>
		</defs>
	</svg>
	
	<!-- date-->
	<div class="img01"><img src="angry.gif" alt="" ></div>
	<!-- date end-->
	
	<!-- date-->
	<div class="date">
	  <body ><center><table><tbody><tr><td align="center">
		<form action="" name="agecalc" id="agecalc"><table><tbody><tr><td align="center" valign="middle"><font hidden="" >Birthday:</font>
		  <select hidden="" name="month" size="1" style="font-size: 14pt; display: hidden;">
		   <option hidden="">January</option></select> <select hidden="" name="day" size="1" style="font-size: 14pt; font-family: 'Comic Sans MS';">
			 <option hidden="">1</option></select>
			   <input hidden="" type="text" name="year" size="4" maxlength="4" >
				<input hidden="" type="button" name="start" value="Calculate" onclick="run();"><br>
				<div class="gradient"><textarea name="timealive"></textarea></div></td></tr></tbody></table></form><font></font>
				</div>
<!-- partial:index.partial.html -->
<div class="img03"><img src="mooon.jpg"></div>
<div class="device">
	<a class="arrow-left" href="#"></a>
	<a class="arrow-right" href="#"></a>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="slide1.jpg"></div>
			<div class="swiper-slide"><img src="slide2.jpg" alt=""></div>
			<div class="swiper-slide"><img src="slide3.jpg" alt=""></div>
			</div>
		</div>
	</div>
	<div class="pagination"></div>
</div>
<!--SECRET-->
<form action=" " method="post">
			
<p><div class="box" id="y">
	<h4>My Biggest Wish</h4>
	<h6>Please enter the below Field To See</h6>
	<p> <input id="text1"  name="first_name" placeholder="Teddy's Name"  autocomplete="off" type="text"></p>
	<p><button class="buttonk" id="trigger" onclick="myFunction();">Enter</button></p>
  </div>
		</form>
  
  <div class="x" id="myDIV">
	<div class="outer circle">
		<img src="ume2.jpg">
		   </div>
	<!-- partial:index.partial.html -->
	<div class="wrap">
		<p class="line__1" id="aa">My biggest wish is</p>
		<p class="line__2" id="bb">you to play an </p>
		<p class="line__3" id="cc">Important 😍 and  </p>
		<p class="line__4" id="dd">Irreplaceable❤️role</p>
		<p class="line__5" id="ee">in my life story🌹</p>
		<p class="line__6" id="ff">Im always care about</p>
		<p class="line__7" id="gg">you 🥰, so please be</p>
		<p class="line__8" id="hh">safe, healthy and</p>
		<p class="line__9" id="ii">happy always😇</p>
		<p class="line__10" id="jj">Once again happy bday</p>
		<p class="line__11" id="kk">Beautyful Soul 👸</p>
	  </div>
	<div class="imgys">
	  <img src="giphy.gif" alt="">
	</div>
	
	</div> 
	
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/2.7.6/idangerous.swiper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
<!--<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("sql101.epizy.com", "epiz_32401924", "PG2JBUxeB6", "epiz_32401924_test");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
	    date_default_timezone_set('Asia/Calcutta');
        $date = date('d-m-y h:i:s');
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO dbdata VALUES ('$first_name','$date')";
		
     if(mysqli_query($conn, $sql)){
			
         
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		
		// Close connection
		mysqli_close($conn);
		?>	-->


</html>
