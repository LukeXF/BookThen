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
            <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
            
                <form style="margin-bottom:50px;" method="post" action="register.php" name="registerform">
                    <div class="plan recommended">
                        <div class="head">
                            <h2>
                                <?php   // show potential errors / feedback (from login object)
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
                                    <div class="col-md-4">  
                                        <p class="form">
                                            <label class="et_pb_contact_form_label">First Name</label><br>
                                            <input id="login_input_username" class="btn btn-login" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="First Name" />
                                        </p>
                                    </div>

                                    <div class="col-md-4">  
                                        <p class="form">
                                            <label class="et_pb_contact_form_label">Last Name</label><br>
                                            <input type="text"  class="btn btn-login" placeholder="Last Name">
                                        </p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="form">
                                            <label class="et_pb_contact_form_label">Email Address</label><br>
                                            <input id="login_input_email" class="btn btn-login" type="email" name="user_email" required placeholder="email address" />
                                        </p>
                                    </div>

                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-4">  
                                        <p class="form">
                                            <label class="">What is this account mainly for?</label>
                                            <select class="form btn btn-login">
                                                <option>Personal - $14</option>
                                                <option>Professional - $24</option>
                                                <option>Business - $44</option>
                                            </select>           
                                        </p>
                                    </div>

                                    <div class="col-md-4">  
                                        <p class="form">
                                            <label class="et_pb_contact_form_label">Password</label>
                                            <input id="login_input_password_new" class="btn btn-login" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="password"/>
                                        </p>
                                    </div>

                                    <div class="col-md-4">  
                                        <p class="form">
                                            <label class="et_pb_contact_form_label">Confirm</label>
                                            <input id="login_input_password_repeat" class="btn btn-login" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="confirm password" />
                                        </p>
                                    </div>

                                </div>
                            </li>                               
                        </ul>
                        <button style="display: inline" type="submit"  name="register" value="Register" class="btn btn-standard form-button red">Register</button>
                    </div>
                 </form>




            </div>          
    </div> <!-- login -->
</div>

<div class="container">
        <h1 class="et_pb_contact_main_title">Register with us</h1>
       
    </div>


