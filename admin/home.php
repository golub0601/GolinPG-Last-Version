<?php include '../includes/db.php'; ?>
<?php session_start(); ?>


<?php //changing password
  if (isset($_POST['submit_password'])) {
    
    
    
    if (password_verify($_POST['old_password'], $_SESSION['admin_password'])) {
      if ($_POST['new_password'] !== $_POST['password_again']) {
        $message = "Fields for new password do not match.\\n Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";        
      }
      else {

        $new_password = password_hash($_POST['new_password'],PASSWORD_BCRYPT, array('cost' => 12));

        $admin_id = $_SESSION['admin_id'];
        $query = "UPDATE admins SET password = '$new_password' WHERE id = $admin_id ";
        $send_query = mysqli_query($connection, $query);
        $_SESSION['admin_password'] = $new_password;
        $message = "New password is set.";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
    else {
      $message = "Incorect old password.\\nTry again.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
 
 ?>
<?php include 'includes/head.php'; ?>
<div class="wrapper">

  <!-- Main Header -->
  <?php include 'includes/header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin_images/<?php echo $_SESSION['admin_image'];?>/160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['admin_name']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="home.php"><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
        <li><a href="meetings.php"><i class="fa fa-calendar"></i> <span>MEETINGS</span></a></li>
        <li><a href="mail.php"><i class="fa fa-envelope"></i> <span>MAIL</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>SECTIONS</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
            <ul class="treeview-menu">
            <li><a href="clients.php"><i class="fa fa-user-circle-o"></i> <span>CLIENTS</span></a></li>
            <li><a href="about.php"><i class="fa fa-info-circle"></i> <span>ABOUT US</span></a></li>
            <li><a href="offices.php"><i class="fa fa-laptop"></i> <span>OFFICES</span></a></li>
            <li><a href="pr&em.php"><i class="fa fa-microphone"></i> <span>PR & EM</span></a></li> 
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN
        <small>HOME</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-black-tie"></i> ADMIN</a></li>
        <li class="active">HOME</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      
       <!-- profile box -->
       <div class="cardP">
          <img class="img-circle" src="admin_images/<?php echo $_SESSION['admin_image'];?>/160x160.jpg" alt="John" style="width:80%; margin-top: 23px;">
          <h1><?php echo $_SESSION['admin_name']; ?></h1>
          <p class="titleT">Admin of site</p>
          <p>Welcome</p>
         
          <p><button onclick="document.getElementById('pop').style.display='block';" id="but">Change Password</button></p>


          <!-- ============POP UP change password========== -->

  <div id="pop" class="container">
  <img id="close-pop" onclick="document.getElementById('pop').style.display='none'" src="../img/x.svg" alt=""><br>
  <img src="img/GolinPG.svg" alt="" style="margin: 30px;">
  <h3 style="color: #f2cd29; text-align: center; font-weight: bold; ">Change Your Password</h3>  
  <form id="change" action="home.php" method="post">
      <input placeholder="Old Password" type="password" class="form-control" tabindex="1" name="old_password" required><br>
      <input placeholder="New Password" type="password" class="form-control" tabindex="2" name="new_password" required><br>
      <input placeholder="Repeat New Password"  class="form-control" type="password" tabindex="3" name="password_again" required><br>
      <br>
      <br>
      <div class="form-group" style="clear: both; text-align: center; ">
          <input style="padding-right: 50px; padding-left: 50px; background-color: #f2cd29; color: black; font-weight: bold;" class="btn btn-primary"  type="submit" name="submit_password" value="CHANGE PASSWORD">
        </div>
  </form>
</div>

     <!--=========== end of pop up change password =======-->
        </div> 
        <!-- /end of profile box -->

    </section>
    <!-- /.content -->
 <?php include 'includes/footer.php'; ?>