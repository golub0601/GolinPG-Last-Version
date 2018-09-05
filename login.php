
 <?php 

 include 'includes/db.php';
 
 ?>



<?php include 'includes/header.php'; ?>

     
<section style="background-image: url(img/login_background.jpg); background-size: 100% 100%;">
<div class="container">
 <div id="login-row" class="row justify-content-center align-items-center">
  <div id="login-column" class="col-md-6" style="margin-bottom: 40px; margin-top: -40px;">  
     <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                       <form action="admin/login.php" method="post" class="form">
                            <div class="form-group">
                                <label for="email" class="text-white" style="font-weight: bold;">Email:</label><br>
                                <input type="email" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white" style="font-weight: bold;">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit_login" class="btn btn-info" value="LOGIN">
                            </div>
                        </form>
                    </div>
                </div>
  </div> 
 </div>
</div>
</section>

        
<?php include 'includes/footer.php'; ?>