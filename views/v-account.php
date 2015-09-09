<?php
	$bookedLessons = 0;
	$currency = "£";
	$paymentsThisMonth = 0;
	$clientsName = "Students";
?>

<div class="page_title">
	<div class="container">
		<h2 class="left">YourBrand</h2>
		<ul class="nav nav-tabs nav-tabs-right">
			<li role="presentation" class="active"><a class="animate" href="#"><img class="nav-tabs-icons" src="assets/img/icon-home.png"></i>Summary</a></li>
			<li role="presentation"               ><a class="animate" href="#"><img class="nav-tabs-icons" src="assets/img/icon-calendar3.png"></i>Schedule</a></li>
			<li role="presentation"               ><a class="animate" href="#"><img class="nav-tabs-icons" src="assets/img/icon-book.png"></i>Bookings</a></li>
			<li role="presentation"				  ><a class="animate" href="#"><img class="nav-tabs-icons" src="assets/img/icon-profile.png"></i>Clients</a></li>
		</ul>
	</div>
</div>

<div class="container">
	<div class="row">

		<div class="col-md-1" style="padding-top:20px;">
			<div class="avatar">
				<img class="avatar" src="<?php echo $grav_url; ?>">
				<!--<a class="logout" href="?logout">Logout Safely</a>-->
			</div>
		</div>

		<div class="col-md-11">
			<h2>
				Hello there <?php echo $_SESSION['user_name']; ?>, 
				today's date is <?php echo date('l jS \of F'); ?>. 
				You have <?php echo $bookedLessons ?> lessons booked for today. 
				This month's bookings total is <?php echo $currency . $paymentsThisMonth; ?>.

			</h2>
		</div>
	</div>

	<hr>

	<div class="row">

		<div class="col-md-2 col-xs-4">
			<div class="backing"><h1>7</h1><span>Overall <?php echo $clientsName; ?></span></div>
		</div>

		<div class="col-md-2 col-xs-4">
			<div class="backing"><h1>5</h1><span><?php echo $clientsName; ?> this month</span></div>
		</div>

		<div class="col-md-2 col-xs-4">
			<div class="backing"><h1>12</h1><span>Total active classes</span></div>
		</div>

		<div class="col-md-2 col-xs-4">
			<div class="backing"><h1>48</h1><span>Lessons booked</span></div>
		</div>

		<div class="col-md-2 col-xs-4">
			<div class="backing"><h1>£129</h1><span>Overall earnings</span></div>
		</div>

		<div class="col-md-2 col-xs-4">
			<div class="backing"><h1>£35</h1><span><?php echo date('F');?> earnings</span></div>
		</div>


		<!--<div class="col-md-4">
			<p class="form">
				<?php /*
					// Sets the date joined into a human format
					$userjoined = strtotime($_SESSION['user_date']);
					$userjoined_1 = date( 'l jS F Y', $userjoined );
					$userjoined_2 = date( 'H:ia', $userjoined ); */
				?>
				<label class="et_pb_contact_form_label">Date Registered</label>
				<input type="text" class="input et_pb_contact_name" readonly=readonly value="<?php echo $userjoined_1 . " " . $userjoined_2; ?>" name="et_pb_contact_name">
			</p>
		</div>-->

	</div>



	<div class="row">

		<div class="col-md-4 display-timetable">	
			<div class="display-head">	
				<h3>Today - <?php echo date('l jS'); ?></h3>
			</div>
			<div class="display-content">

				<div class="display-lesson row display-lesson-completed">
					<div class="col-md-6"><span><b>9:00AM-10:00AM</b></span></div>
					<div class="col-md-6"><span>Morning Yogo</span></div>
				</div>
				<div class="display-lesson row">
					<div class="col-md-6"><span><b>12:00AM-12:15PM</b></span></div>
					<div class="col-md-6"><span>Lunch Bruv</span></div>
				</div>
				<div class="display-lesson row">
					<div class="col-md-6"><span><b>2:00PM-4:00PM</b></span></div>
					<div class="col-md-6"><span>Really Big Hoops</span></div>
				</div>
				<div class="display-lesson row">
					<div class="col-md-6"><span><b>8:15PM-9:50PM</b></span></div>
					<div class="col-md-6"><span>Mixed Ariel</span></div>
				</div>

			</div>

		</div>


		<div class="col-md-5 display-timetable">		
			<div class="display-head">
				<h3>< <?php echo date("F");  ?> ></h3>
			</div>
			<div class="display-content">

				<div class="display-calendar row">
					<div class="col-md-1">1</div>
					<div class="col-md-1">2</div>
					<div class="col-md-1">3</div>
					<div class="col-md-1">4</div>
					<div class="col-md-1">5</div>
					<div class="col-md-1 calendar-selected">6</div>
					<div class="col-md-1">7</div>
					<div class="col-md-1 calendar-selected">8</div>
					<div class="col-md-1">9</div>
					<div class="col-md-1">10</div>
					<div class="col-md-1">11</div>
					<div class="col-md-1">12</div>
					<div class="col-md-1">13</div>
					<div class="col-md-1 calendar-selected">14</div>
					<div class="col-md-1">15</div>
					<div class="col-md-1">16</div>
					<div class="col-md-1">17</div>
					<div class="col-md-1">18</div>
					<div class="col-md-1">19</div>
					<div class="col-md-1">20</div>
					<div class="col-md-1">21</div>
					<div class="col-md-1">22</div>
					<div class="col-md-1">23</div>
					<div class="col-md-1">24</div>
					<div class="col-md-1">25</div>
					<div class="col-md-1">26</div>
					<div class="col-md-1">27</div>
					<div class="col-md-1">28</div>
					<div class="col-md-1">29</div>
					<div class="col-md-1">30</div>
					<div class="col-md-1">21</div>
				</div>
			</div>
		</div>


		<div class="col-md-3 display-timetable">	
			<div class="display-head">	
				<h3>Info</h3>
			</div>
			<div class="display-content">

			</div>
		</div>


		<!--<div class="col-md-4">
			<p class="form">
				<?php /*
					// Sets the date joined into a human format
					$userjoined = strtotime($_SESSION['user_date']);
					$userjoined_1 = date( 'l jS F Y', $userjoined );
					$userjoined_2 = date( 'H:ia', $userjoined ); */
				?>
				<label class="et_pb_contact_form_label">Date Registered</label>
				<input type="text" class="input et_pb_contact_name" readonly=readonly value="<?php echo $userjoined_1 . " " . $userjoined_2; ?>" name="et_pb_contact_name">
			</p>
		</div>-->

	</div>



	</div>
</div>