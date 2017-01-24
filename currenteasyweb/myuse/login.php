<?php require_once('header.php');?>
    
    
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><a href="courses.html">Login</a></h6>
                  
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->

         <div class="row margin-top-10 margin-bottom-5" style="margin-left: 0; margin-right: 0">

              <div class="padding-bottom-10">
                        <div class="modal-body">                          
<?php 
if(isset($_POST['Login'])){
  $Login_result=new Login($_POST['username'],$_POST['password']); 
}
?>  
                         </p><br>
                            <div class="row">

<form action="" method="post">
                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                    <label  for="username">Username/Email</label>
                                 <input type="text"  name="username"  id="username" class="form-control" name="username" required />
                                </div>

                           
                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                    <label for="password">Password</label>
                                    <input type="password"  name="password" id="password" class="form-control" name="password" required />

                                </div>

                                      <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                <input type="submit" name="Login" value="Login"   class="btn btn-primary">
                                Didn't have an account , <a  href="signup.php" >  Create Account</a>
                                </div>

</form>
                            </div>

                        </div>
                        <div class="modal-footer">
                        <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                         <!--  <button type="button" class="btn btn-primary">Login</button> -->
                        </div>

                      
                  
              </div>
          </div>

              

            </div> <!-- /.col-md-8 -->


    
        </div> <!-- /.row -->
    </div> <!-- /.container -->

<?php require_once('footer.php');?>