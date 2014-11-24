<div class="banner">
	<!--<a href="#" class="unslider-arrow prev flip">
		<img src="https://stripe.com/img/home/carousel/arrow.png">
	</a>
	<a href="#" class="unslider-arrow next">
		<img src="https://stripe.com/img/home/carousel/arrow.png">
	</a>-->
    <ul style="padding: 0px !important;">
		<!--<li style="width: 25%; background-image: url(assets/img/bg-2.png); background-size: 100% 100%;">
			<div class="sizing">
				<h1>The jQuery slider that just slides.</h1>
				<p>No fancy effects or unnecessary markup, and it’s less than 3kb.</p>
			
				<a class="btn" href="#download">Download</a>
			</div>
		</li>
		
		<li style="width: 25%; background-image: url(assets/img/bg-2.png); background-size: 100% 100%;">
			<div class="sizing">
				<h1>Fluid, flexible, fantastically minimal.</h1>
				<p>Use any HTML in your slides, extend with CSS. You have full control.</p>
			
				<a class="btn" href="#download">Download</a>
			</div>
		</li>-->
		<?php 
			$bg = array(
				"Designed to make managing bookings, simple and hassle free.",
				"The beautiful booking system that’s simple, secure and affordable.",
				"A simple and flexible booking software that adjusts to your needs"
			);

			$i = rand(0, count($bg)-1);  
			$errorMessage = "$bg[$i]";
		?>
		<li style="width: 25%; background: rgba(0, 0, 0, 0.6); background-image: url(assets/img/bg-2.png); background-size: 100% 100%;">
			<div class="sizing">
				<h1>Clear, Clean, Customizable</h1>
				<p><?php echo $errorMessage ?></p>
			
				<a class="btn animate" href="register.php">Get Started Now</a>
			</div>
		</li>
		
		<!--<li style="width: 25%; background-image: url(assets/img/bg-2.png); background-size: 100% 100%;">
			<div class="sizing">
				<h1>We're here to help you</h1>
				<p>Any questions feel free to visit our support center or contact us.</p>
			
				<a class="btn" href="#download">Support Center</a>
			</div>
		</li>-->
	</ul>
</div>
<div class="container" style="margin-top:50px;">
	<div class="row section_info">
		<div class="col-md-4 links card">		
			<h2>Diverse</h2>
			<p class="center"><?php echo $brand; ?> supports card payments and multiple payment gateways, subscription and individual payments.</p>
		</div>
		<div class="col-md-4 links tag">		
			<h2>Simple</h2>
			<p class="center"><?php echo $brand; ?> has been developed to be as easy as possible to use for you and your clients. <br> Don't believe us?</p>
		</div>
		<div class="col-md-4 links web">		
			<h2>Everywhere</h2>
			<p class="center"><?php echo $brand; ?> is super easy to integrate into your site right now and work everywhere. Check out what you can do.</p>
		</div>
	</div>
	<hr style="margin-top:50px;">
</div>
<div class="container" style="margin-top:25px;">
	<div class="row section_info center">
		<h1>Trust us, you need see what this software can do.</h1>
				<a class="btn btn-standard animate" href="features.php">View the features</a>
	</div>
</div>

<script type="text/javascript">
	var slidey = $('.banner').unslider({
		speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 10000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: false,               //  Display dot navigation
		fluid: false              //  Support responsive design. May break non-responsive designs
	}),
    data = slidey.data('unslider');
    
        $('.unslider-arrow').click(function() {
        var fn = this.className.split(' ')[1];
        
        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        slidey.data('unslider')[fn]();
    });
	//  Start Unslider
	data.start();

	//  Pause Unslider
	data.stop();

	//  Move to a slide index, with optional callback
	data.move(2, function() {});
	//  data.move(0);

	//  Move to the next slide (or the first slide if there isn't one)
	data.next();

	//  Move to the previous slide (or the last slide if there isn't one)
	data.prev();

	//  Append the navigation dots manually
	data.dots();
    
</script>