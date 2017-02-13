<!DOCTYPE html>
<html>
<head>
	<title>Envisimple</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="/lib/w3.css">
	<style>
.mySlides {display:none;}
</style>
<script>
	jQuery(document).ready(function ($) {

  
    setInterval(function () {
        moveRight();
    }, 3000);


  var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    

</script>

</head>
<body>
	<div class="menu01 animated bounceInDown">
		<div class="main1024">
			<div class="logo01"><img src="img/logoW.png"></div>
			<ul class="ul-menu01">
				<a href="index.php"><li class="li-menu01">HOME</li></a>
				<a href="product.php"><li class="li-menu01">PRODUCT
				<ul class="li-menu01-list animated bounceInDown">
					<li class="list-menu-sub hoverr">MOUSE
					<ul class="list-menu-sub-brand animated bounceIn">
						<li class="list-menu-sub-brand-01">Steelseries</li>
						<li class="list-menu-sub-brand-01">Razer</li>
						<li class="list-menu-sub-brand-01">Roccat</li>
						<li class="list-menu-sub-brand-01">Tt Esports</li>
						<li class="list-menu-sub-brand-01">Logitech</li>
						<li class="list-menu-sub-brand-01">Cm Storm</li>
						<li class="list-menu-sub-brand-01">Microsoft</li>
						<li class="list-menu-sub-brand-01">Zowie</li>
						<li class="list-menu-sub-brand-01">Corsair</li>
						<li class="list-menu-sub-brand-01">Gview</li>
						<li class="list-menu-sub-brand-01">Gigabyte</li>
						<li class="list-menu-sub-brand-01">Ducky</li>
						<li class="list-menu-sub-brand-01">Fnatic gear</li>
					</ul>
					</li>
					<li class="list-menu-sub hoverrr">KEYBOARD
						<ul class="list-menu-sub-brand animated bounceIn">
						<li class="list-menu-sub-brand-01">Steelseries</li>
						<li class="list-menu-sub-brand-01">Razer</li>
						<li class="list-menu-sub-brand-01">Roccat</li>
						<li class="list-menu-sub-brand-01">Tt Esports</li>
						<li class="list-menu-sub-brand-01">Logitech</li>
						<li class="list-menu-sub-brand-01">Cm Storm</li>
						<li class="list-menu-sub-brand-01">Zowie</li>
						<li class="list-menu-sub-brand-01">Corsair</li>
						<li class="list-menu-sub-brand-01">Gview</li>
						<li class="list-menu-sub-brand-01">Gigabyte</li>
						<li class="list-menu-sub-brand-01">Ducky</li>
					</ul>
					</li>
					<li class="list-menu-sub">HEADPHONE
						<ul class="list-menu-sub-brand animated bounceIn">
						<li class="list-menu-sub-brand-01">ASTRO</li>
						<li class="list-menu-sub-brand-01">Sennheiser</li>
						<li class="list-menu-sub-brand-01">Tritton</li>
						<li class="list-menu-sub-brand-01">Creative</li>
						<li class="list-menu-sub-brand-01">Plantronics</li>
						<li class="list-menu-sub-brand-01">Cm Storm</li>
						<li class="list-menu-sub-brand-01">MIONIX</li>
						<li class="list-menu-sub-brand-01">Zowie</li>
						<li class="list-menu-sub-brand-01">Turtle Beach</li>
						<li class="list-menu-sub-brand-01">Asus</li>
						<li class="list-menu-sub-brand-01">Ozone</li>
						<li class="list-menu-sub-brand-01">Cougar</li>
					</ul>
					</li>
					<li class="list-menu-sub">MOUSEPAD
						<ul class="list-menu-sub-brand animated bounceIn">
						<li class="list-menu-sub-brand-01">Razer</li>
						<li class="list-menu-sub-brand-01">Sennheiser</li>
						<li class="list-menu-sub-brand-01">Tritton</li>
						<li class="list-menu-sub-brand-01">Creative</li>
						<li class="list-menu-sub-brand-01">Corsair</li>
						<li class="list-menu-sub-brand-01">Cm Storm</li>
						<li class="list-menu-sub-brand-01">Mad Catz</li>
						<li class="list-menu-sub-brand-01">Zowie</li>
						<li class="list-menu-sub-brand-01">Turtle Beach</li>
						<li class="list-menu-sub-brand-01">Asus</li>
						<li class="list-menu-sub-brand-01">Ozone</li>
						<li class="list-menu-sub-brand-01">Cougar</li>
					</ul>
					</li>
					<li class="list-menu-sub">Joysticks
						<ul class="list-menu-sub-brand animated bounceIn">
						<li class="list-menu-sub-brand-01">Razer</li>
						<li class="list-menu-sub-brand-01">Corsair</li>
						<li class="list-menu-sub-brand-01">Cm Storm</li>
						<li class="list-menu-sub-brand-01">Microsoft</li>
						<li class="list-menu-sub-brand-01">Asus</li>
						<li class="list-menu-sub-brand-01">Neolution</li>
						<li class="list-menu-sub-brand-01">Cougar</li>
					</ul>
					</li>
					<li class="list-menu-sub">keycap keyboard</li>
					<li class="list-menu-sub">Microphone</li>
				</ul>
				</li>
				</a>
				<a href="preview.php"><li class="li-menu01">PREVIEW</li></a>
				<li class="li-menu01">INSURANCE</li>
				<li class="li-menu01">ORDER STATUS</li>
				<li class="li-menu01">CONTACT</li>
			</ul>
		</div>
		<a class="login01" href="#popup1">LOGIN</a>
		<div id="popup1" class="overlay">
	<div class="popup">
		
		<a class="close" href="#">&times;</a>
		<div class="logo-login animated rubberBand"></div>
		<div class="box-user">
			<div class="text-login">Username :</div> 
			<input type="text" class="username-input">
			<div class="text-login">Password :</div> 
			<input type="password" class="username-input">
		</div>
		<div class="button-login">
			<div class="button-box-login">LOGIN</div>
			<div class="button-box-register">REGISTER</div>
		</div>
	</div>
</div>
	</div>
	<div class="vdo-tr">
			<iframe width="100%" height="960px" src="https://www.youtube.com/embed/0VRK_bsE6nw?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0" frameborder="0" allowfullscreen ></iframe>
	</div>
	<div class="contener01">
	<div class="main1024">
	<div class="new-pro">
	<div class="new-product">NEW PRODUCT</div>
	<div class="new-product-line"></div>

	<div class="w3-content w3-section" style="max-width:500px">
	<div class="box-list-product01 mySlides animated bounceIn">
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro1.png"></div>
			<div class="newproduct-name">Ducky One non <br>backlit /Red SW</div>
			<div class="newproduct-price">2,790.-</div>
		</div>
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro5.png"></div>
			<div class="newproduct-name">SteelSeries Siberia 840 </div>
			<div class="newproduct-price">13,490.-</div>
		</div>
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro3.png"></div>
			<div class="newproduct-name">Razer Seirēn Microphone</div>
			<div class="newproduct-price">7,490.-</div>
		</div>
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro4.png"></div>
			<div class="newproduct-name">razer blackwidow <br>ultimate 2016 <br>Orange SW</div>
			<div class="newproduct-price">3,990.-</div>
		</div>
	</div>
	<div class="box-list-product01 mySlides animated bounceIn">
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro6.png"></div>
			<div class="newproduct-name">SteelSeries Rival 300 CS:GO Hyper Beast Edition</div>
			<div class="newproduct-price">2,190.-</div>
		</div>
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro7.png"></div>
			<div class="newproduct-name">Microsoft XBOX 360 Controller Black (PC/Xbox 360) </div>
			<div class="newproduct-price">1,690.-</div>
		</div>
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro8.png"></div>
			<div class="newproduct-name">Razer blackwidow ultimate chroma Green SW (Thai)</div>
			<div class="newproduct-price">6,390.-</div>
		</div>
		<div class="box-newproduct ">
			<div class="newproduct-img"><img src="img/pro9.png"></div>
			<div class="newproduct-name">Neolution E-Sport TITAN FULL (Red SW)</div>
			<div class="newproduct-price">2,790.-</div>
		</div>
	</div>


	<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	</div>


	</div>
	<div class="preview-02">
		<div class="new-product">PREVIEW</div>
		<div class="new-product-line"></div>
		<div class="box-preview01">
			<div id="slider" class="wi1024">
  				<!-- <a href="#" class="control_next">></a>
  				<a href="#" class="control_prev"><</a> -->
  				<ul>
    				<li>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					
    				</li>
    				<li>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					
    				</li><li>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					
    				</li><li>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					<div class="pre-box01">
    						<div class="pre-box01-img"><img src="img/pro1.png"></div>
    						<div class="pre-box01-text">Ducky One non backlit /Red SW</div>
    					</div>
    					
    				</li>
  				</ul>  
				</div>

				<!-- <div class="slider_option">
  				<input type="checkbox" id="checkbox" value="A">
  				<label for="checkbox">Autoplay Slider</label> -->
			</div> 

		</div><!-- box-preview01 -->
		<div class="new-product">VDO-REVIEW</div>
		<div class="new-product-line"></div>
		<div class="vdo-preview01">
			<div class="vdo-preview01-1">
				<div class="vdo-preview01-1-l"><iframe width="650" height="450" src="https://www.youtube.com/embed/5l8-dJVesNA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
				<div class="vdo-preview01-1-r">
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/eJdF3qTSTA0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/PgavPkLNS9k?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/_tssKALv3qo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/k61ET_TTEUY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/Ml3-pUWNWfs?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/dr241Ur1yyg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
					<div class="preview01-1-r-box"><iframe width="200" height="150" src="https://www.youtube.com/embed/Hb-p-xrK_BU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
	</div>


	</div>
	</div>

	<div class="footer01">
		<div class="main1024">
			<div class="foot-menu01">
			<a href="#">HOME </a>|
			<a href="#">PRODUCT </a>|
			<a href="#">PREVIEW </a>|
			<a href="#">INSURANCE </a>|
			<a href="#">ORDER STATUS </a>|
			<a href="#">CONTACT</a>
				
			</div>
			<div class="foot-menu011">ชั้น 5 ห้อง 5114 พันธุทิพย์ (งามวงศ์วาน) เบอร์ติดต่อ: 0800426747 อีเมล์: Envisimple@yahoo.com  <br>Copyright © 2012. ENVI SIMPLE</div>
		</div>
	</div>
</body>
</html>