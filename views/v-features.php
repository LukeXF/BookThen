<style type="text/css">
	section > h1 {
	  letter-spacing: -0.05em;
	  color: #3f5b80;
	  padding-top: 25px;
	}

	.hot .padded {
		padding: 30px;
	}
</style>

<ol class="breadcrumb_menu">
	<div class="container breadcrumb">
		<li><a href="<?php echo $mainurl; ?>">Home</a></li>
		<li class="active">Features</li>
	</div>
</ol>
<div class="page_title">
	<div class="container">
		<h2 class="center"><?php echo $brand; ?> Features</h2>
		<ul class="features hot">
		    <a href="#section1"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-fastforward.png" />
				<div class="animate">Quick<br>Install</div>
		    </li></a>
		    <a href="#section2"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-paper.png" />
				<div class="animate">Works<br>Everywhere</div>
		    </li></a>
		    <a href="#section3"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-calendar2.png" />
				<div class="animate">Take<br>Bookings</div>
		    </li></a>
		    <a href="#section4"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-check.png" />
				<div class="animate">Notifications</div>
		    </li></a>
		    <a href="#section5"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-vault.png" />
				<div class="animate">Secure</div>
		    </li></a>
		    <a href="#section6"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-speed.png" />
				<div class="animate">Super<br>Fast</div>
		    </li></a>
		    <a href="#section7"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-price.png" />
				<div class="animate">Multiple<br>Gateways</div>
		    </li></a>
		    <a href="#section8"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-question.png" />
				<div class="animate">Full<br>Support</div>
		    </li></a>
		    <a href="#section9"><li>
		        <img src="http://demo.luke.sx/booking/assets/img/icon-stats.png" />
				<div class="animate">Dashboard</div>
		    </li></a>
		</ul>
	</div>
</div>

<div class="container">
	<h1 align="center">So, this page isn't finished yet.</h1>
	<h4 align="center">But Imagine if it was.</h4>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">	

			<div class="row" style="margin-top:20px;">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6 right">
							<a type="button" class="btn btn-standard animate" href="<?php echo $mainurl; ?>">Return Home</a>
						</div>
						<div class="col-md-6">
							<a type="button" class="btn btn-standard animate" onclick="goBack()" style="margin-right: 10px; float: left !important;">Go Back</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<article>
		<h1 id="section1">Quick Install</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section2">Works Everwhere</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section3">Take Bookings</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section4">Notifications</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section5">Secure</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section6">Super Fast</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section7">Payment Gateways</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section8">Full Support</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

	<article>
		<h1 id="section9">Easy to use Dashboard</h1>
		<p>Hey<br><br><br><BR></p>
	</article>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<script type="text/javascript">
function scrollNav() {
  $('.hot a').click(function(){  
    //Toggle Class
    $(".active").removeClass("active");      
    $(this).closest('li').addClass("active");
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 100
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}
scrollNav();
</script>