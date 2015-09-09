<?php
	date_default_timezone_set('UTC');
	
	$mainurl = "http://booket.co.uk";
	$brand = "Booket";
	// Sets the values for the navbar
	$navbar = array(
		"Features" =>   array(
			"active" => "",
			"url" => "features",
			"submenu" => array()
		),

		"Pricing" => array(
			"active" => "",
			"url" => "pricing",          
			"submenu" => array()
		)

	);
	// Sets the values for the navbar
	$navbar2 = array(
		"Support" =>   array(
			"active" => "",
			"url" => "support",
			"submenu" => array()
		),

		"$navlogin" => array(
			"active" => "",
			"url" => "dashboard",          
			"submenu" => array()
		)

	)
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Booket</title>

<!-- ////////////////////////////////////
	HEADER LINKS
///////////////////////////////////// -->

	<meta name="description" content="A beatiful booking system designed for ease of use.">
	<meta name="author" content="Luke Brown">
	<meta charset="utf-8">


	<script src="//use.typekit.net/ldz4taj.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://isotope.metafizzy.co/isotope.pkgd.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//unslider.com/unslider.min.js"></script>
	<script type="text/javascript">
$(window).load(function() {
    var $container = $('.account-features');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('a.magic').click(function() {
        $('.btn-magic .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});

$('#shuffle').click(function() {
    $container.isotope('shuffle');
    addEvenClasses();
});
	</script>

	<link rel="shortcut icon" href="assets/img/favicon.ico" />
	<link rel="stylesheet"    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet"    href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet"    href="assets/css/style.css">

</head>


<!-- ////////////////////////////////////
	BEGIN BODY
///////////////////////////////////// -->

<body>
