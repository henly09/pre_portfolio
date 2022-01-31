<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">

<link rel="icon" href="{{ asset('Images/p.png') }}">

	<title>Gallery</title>

</head>

<header style="background: linear-gradient( rgba(27, 23, 25, 0.91), rgba(27, 23, 25, 0.91) ), url('{{ asset('Images/objectives.png') }}');">

	<li class="trans">  </li>

	<nav>

	<p class="logo">MY PORTFOLIO </p>

			<ul class="navigation">
			
			<li> <a href="/">HOME</a> </li>
			<li> <a href="/Gallery">GALLERY </a> </li>
			<li> <a href="/Contacts">CONTACTS </a> </li>

		</ul>

	</nav>

<div class="wawets">

<div>

<p class="head-title1">Gallery:</p>

	<p class="description">	Here are some of my projects that are in beta stage and
		needed to be debug. Some of these are my projects since my first year of
		college. Most of these Pictures are captured in the middle of the process
		of creating these projects. So these picture of the projects are not 
		the images of the final output. </p>
	
</div>

<div class="video1">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="{{ asset('Images/introStudent.png') }}" style="width: 600px">
  <div class="text">Student Database Management</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="{{ asset('Images/introHR.png') }}" style="width: 600px">
  <div class="text">Human Resources System Management</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="{{ asset('Images/introHotel.png') }}" style="width: 600px">
  <div class="text">Hotel Reservation System</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="{{ asset('Images/BakeryIntro.png') }}" style="width: 600px">
  <div class="text">Bakery Ordering System</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
</div>
</div>
<script>
	var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</div>
</header>
<li class="trans2"></li>
<h1>&nbsp</h1>
<h1>&nbsp</h1>
<body style="background: linear-gradient( rgba(33, 28, 31, 0.73), rgba(33, 28, 31, 0.73) ), url('{{ asset('Images/grey.jpg') }}');">
<div class="figure1">
<p class="logo2"> Gallery </p>
		<figure class="fig1">
			<table>
			<tr>	
			<th colspan="1">	
				<img src="{{ asset('Images/school.png') }}" style="width:560px; height:280px; border-radius: 10px"> 
			</th>
			<th>
				<p class="Title"> Student Database Management </p>
			<p class="desc">
			&nbsp;&nbsp;&nbsp;&nbsp;A student database management system is automation of manual performance record management 
			which enables the user to assess necessary data at any place and any time through internet. 
			... The admin module allows admin to make changes in faculty and student academic and personal details.
			</p>
			</th>
			</tr>
			</table>
		</figure>
</div>
<div class="figure2">
	<figure class="fig2">
			<table>
			<tr>
			<th>
				<p class="Title"> Bakery Ordering System </p>
			<p class="desc">
			&nbsp;&nbsp;&nbsp;&nbsp;An online ordering platform eliminates data entry as customers place orders 
			themselves, selecting from a menu of product options. Since all orders go 
			straight to your system (and can even be synced with your inventory software), 
			you no longer have to manually enter any data into an excel sheet. When you
			 reduce your manual data entry, you reduce ordering and delivery errors.
			</p>
			</th>
			<th>	
				 <img src="{{ asset('Images/bakery.png') }}" style="width:560px; height:280px; border-radius: 10px"> 
			</th>
			</tr>
			</table>
		</figure>
</div>
<div class="figure3">
		<figure class="fig3">
			<table>
			<tr>	
			<th colspan="1">	
				 <img src="{{ asset('Images/hr.png') }}" style="width:560px; height:280px; border-radius: 10px"> 
			</th>
			<th>
				<p class="Title"> Human Resources System Management </p>
			<p class="desc">
			An HRSM, or Human Resources System Management, is a suite of 
			software applications used to manage human resources and related 
			processes throughout the employee lifecycle. An HRSM enables a 
			company to fully understand its workforce while staying compliant 
			with changing tax laws and labor regulations.
			</p>
			</th>
			</tr>
			</table>
		</figure>
</div>
<div class="figure4">
	<figure class="fig4">
			<table>
			<tr>
			<th>
				<p class="Title"> Hotel Reservation System </p>
			<p class="desc">
			A hotel reservation system is the mechanism through which guests can create secure online reservations. 
			... Through the hotel reservation system software, guests can choose how long they will stay, the type 
			of room they want, get add-ons, and pay securely online through a payment platform.
			</p>
			</th>
			<th>	
			 <img src="{{ asset('Images/hotel.png') }}" style="width:560px; height:280px; border-radius: 10px"> 
			</th>
			</tr>
			</table>
		</figure>
</div>
</body>
</div>
<footer>
<center>
<li class="trans2"> </li>
</center>
	<center>
	<table id= "footer_table">
			<tr>
				<th id="koi"> About Me ❓ </th>
				<th id="koi"> Sponsors 🎩 </th>
				<th id="koi"> Aliases 🕵️ </th>
				<th id="koi"> Contacts 📞 </th>
			</tr>
			<tr>
				<td id="poi"> Coverage </td>
				<td id="poi"> Nvdia </td>
				<td id="poi"> IGN:Henzz </td>
				<td id="poi"> Tweet: @HenzQwerty </td>
			</tr>
			<tr>
				<td id="poi"> Pricing </td>
				<td id="poi"> Intel </td>
				<td id="poi"> IGN:Mhaxter </td>
				<td id="poi"> fb.com/mhax.ter </td>
			</tr>
			<tr>
				<td id="poi"> Home </td>
				<td id="poi"> AMD </td>
				<td id="poi"> IGN:Pablo </td>
				<td id="poi"> gmail:monterahens </td>
			</tr>
			<tr>
				<td id="poi"> Buy </td>
				<td id="poi"> LinusTechTips </td>
				<td id="poi"> IGN:Charon </td>
				<td id="poi"> 09633473223 </td>
			</tr>
	</table>
	<table>
		<tr>
			<td id="go"> <a href="https://twitter.com/HenzQwerty" target="_blank"> <img src="{{ asset('Images/twit.png') }}" width="40" lenght="40"> </a></td>
			<td id="go"> <a href="https://www.facebook.com/mhax.ter/" target="_blank"><img src="{{ asset('Images/fb.png') }}" width="40" lenght="40"></a></td>
			<td id="go"> <a href="https://www.instagram.com/henzzmontera/" target="_blank"><img src="{{ asset('Images/ig.png') }}" width="40" lenght="40"></a></td>
			<td id="go"> <a href="https://gmail.com/" target="_blank"><img src="{{ asset('Images/gmail.png') }}" width="40" lenght="40"></a></td>
			<td id="go"> <a href="https://github.com/henly09" target="_blank"><img src="{{ asset('Images/github.png') }}" width="40" lenght="40"></a></td>
		</tr>
	</table>
	<div>
		<p class="copyright">@ 2022 HenzMontera™. All rights Reserved.</p>
	</div>
</center>
</footer>
</html>