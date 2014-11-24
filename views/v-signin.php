<ol class="breadcrumb_menu">
	<div class="container breadcrumb">
		<li><a href="<?php echo $mainurl; ?>">Home</a></li>
		<li class="active">Login</li>
	</div>
</ol>
<div class="page_title">
	<div class="container">
		<h2 class="center"><?php echo $brand; ?> Login</h2>
	</div>
</div>


<div class="container">
	<div class="pricing-tables attached">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4">
			
				<form style="margin-bottom:50px;" method="post" action="dashboard.php" name="loginform">
					<div class="plan recommended">
						<div class="head">
							<h2>
								<?php 	// show potential errors / feedback (from login object)
									if (isset($login)) {
									    if ($login->errors) {
									        foreach ($login->errors as $error) {
									            echo $error;
									        }
									    }
									    if ($login->messages) {
									        foreach ($login->messages as $message) {
									            echo $message;
									        }
									    }
									} else {
										echo "Signup or Login";
									}
								?>
							</h2>
						</div>
						<ul class="item-list" style="margin-top: -20px;">
							<li>
								<div class="row" style="padding-top: 30px;">
									<div class="col-md-12">
										<p class="form">
											<label class="et_pb_contact_form_label">Email Address</label>
											<input required type="text" placeholder="Email Address" id="login_input_username" class="btn btn-login" name="user_name">
										</p>
									</div>
									<div class="col-md-12" style="margin-top:20px;">			
										<p class="form">
											<label class="et_pb_contact_form_label">Password</label>
											<input type="password" placeholder="password" id="login_input_password" class="btn btn-login" name="user_password">
										</p>
									</div>

								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-12">
									</div>
								</div>
							</li>								
						</ul>
						<button style="display: inline" type="submit" value="Login" name="login" class="btn btn-standard animate">login</button>
						<input type="button" style="display: inline; margin-right: 10px" name="complete1" class="btn btn-standard animate" value="Register" onClick="parent.location='register'">		
				 	</div>
				 </form>
			</div>			
	</div> <!-- login -->
</div>