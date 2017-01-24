
<?php
require_once('../classes/Path.php'); 
require_once('../classes/Login.php');
require_once('../classes/Register.php');
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Techvedic</title>
<link href="<?php echo CSS_ROOT;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>fontello.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>nprogress.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>custom.min.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>style.css" rel="stylesheet">
<body class="footer_fixed">
<div class="nav_menu">
   <div class="containerTwo">
     <ul class="breadcrumb">
	  <li><a href="#">Home</a></li>
	  <li class="active"><a href="#">Contact</a></li>
	 </ul>
   </div>
</div>
<div class="containerTwo mrLogin">
  <div class="row">
    <div class="col-sm-6 col-xs-12 pdLogin">
      <div class="x_panel tile noBorder">
        <div class="x_title">
          <h2>Login to the support portal <br>
            <span class="p-xs">Enter the details below</span></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content"> 
          <!-- start -->
          <div id="click">
<?php 
if(isset($_POST['Login'])){
  $Login_result=new Login($_POST['username'],$_POST['password']); 
}
?>          
            <form action="" method="post" class="margin-top-10 checkList">
              <input type="text" name="username" class="form-control margin-bottom-20" placeholder="Your E-mail address" required />
              <input type="password" name="password" class="form-control margin-bottom-20" placeholder="Password" required />
              <div class="row">
                <div class="col-md-6 padding-top-5">
                  <p class="padding-top-10">
                    <input type="checkbox" id="remember" />
                    <label for="remember">Remember me on this computer</label>
                  </p>
                </div>
                <div class="col-md-6 text-right visible-sm-right-left">
                  
                    <button type="button" id="click_to_hide" class="btn btn-danger margin-top-10 noBorderRadius "> forgot your password?</button>
              
                 <input type="submit" name="Login" value="Login" class="btn btn-dark noBorderRadius margin-top-10">
                 
                </div>
              </div>
            </form>
          </div>
          <div id="password" style="display:none;">
            <form action="#" class="margin-top-10 checkList">
              <h2>Forgot Password</h2>
              <p>Give us your email address and instructions to reset your password will be emailed to you.</p><br>
              <p id="forgot_password_result"></p>
              <input type="email" id="forgot_password_email" name="forgot_password_email" class="form-control margin-bottom-20" placeholder="Your e-mail address" />
              <div class="row">
                <div class="col-md-6 padding-top-5">
                  <p>
                    <button type="button" style="display:none;" id="cancel" class="btn btn-dark noBorderRadius">cancel</button>
                  </p>
                </div>
                <div class="col-md-6 text-right visible-sm-right-left">
                  <p>
                    <button type="button" name="forgot_password" id="forgot_password" class="btn btn-danger margin-top-10 noBorderRadius">Reset my password</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <!-- end --> 
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xs-12 pdLogin">
      <div class="x_panel tile noBorder">
        <div class="x_title">
          <h2>Sign up</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p>Once you sign up, you will have complete access to our solutions and FAQs, ask questions and learn from our user community.</p>
          
<?php 
if(isset($_POST['Register'])){
  $register_result=new Register($_POST['firstname'],$_POST['username'],$_POST['password'],$_POST['email']); 
}
?> 

          <form action="" method="post" class="margin-top-20 checkList">
		   <div class="Signups margin-bottom-20">
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required />
           </div>
		    <div class="Signups margin-bottom-20">
			  <input id="signup_email" type="email"  name="email" class="form-control margin-bottom-20" placeholder="Your e-mail address" required />
			</div>
           <p id="email_result"></p>
			 <div class="Signups margin-bottom-20">
			   <input id="signup_username" type="text" name="username" class="form-control" placeholder="UserName" required />
			</div>
			 <p  id="username_result"></p>
			 <div class="Signups margin-bottom-20">
             <input type="password" name="password" class="form-control" placeholder="password" required />
			</div>
            <input type="submit" name="Register" class="btn btn-success noBorderRadius margin-bottom-20" value="Register">
            &nbsp;
            <button type="reset" class="btn btn-dark noBorderRadius margin-bottom-20">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
    <div class="pull-right">
       Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
</footer>
<?php include('../include/footer.php');?>

</body>
</html>