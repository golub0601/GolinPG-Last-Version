<?php 
  include '../includes/db.php';
?>

<?php 
   session_start(); 
   ob_start();
?>
<?php if (isset($_SESSION['admin_name'])) {
  
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
        <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
        <li><a href="meetings.php"><i class="fa fa-calendar"></i> <span>MEETINGS</span></a></li>
        <li><a href="mail.php"><i class="fa fa-envelope"></i> <span>MAIL</span></a></li>
         <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>SECTIONS</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
            <ul class="treeview-menu">
            <li><a href="clients.php"><i class="fa fa-user-circle-o"></i> <span>CLIENTS</span></a></li>
            <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i> <span>ABOUT US</span></a></li>
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
        <small>ABOUT US</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-black-tie"></i> ADMIN</a></li>
        <li class="active">SECTIONS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container">
      <!-- notif -->
<?php if(isset($_GET['edited'])){
        echo '<div class="alert alert-success alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left: -10px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Section has been edited.
              </div>';
     }
?>
      <?php include 'includes/popEditAboutSection.php'; ?>
         <div class="row container">
            <?php
                  $query = "SELECT * FROM about_us";
                  $get_divs = mysqli_query($connection, $query);
                  while($row = mysqli_fetch_assoc($get_divs)){
                    $id = $row['id'];
                    $img = $row['img_source'];
                    $title = $row['title'];
                    $content = $row['content'];
            ?> 
            
            <div  class="col-md-10" style="font-size: 18px; color: white; background-color: #222d32 !important; margin-bottom: 15px;  padding: 10px;">
              <h3 style="color: #f9f8ef; text-align: center; padding-top: 15px; padding-bottom: 10px;">
                <?php echo $title; ?></h3>
              <p><?php echo $content; ?></p>
              <a onclick="document.getElementById('edit_about').style.display='block';" href="about.php?edit=<?php echo $id ;?>" class="btn-success btn"><i class="fa fa-edit"> EDIT</i></a>
            </div>
            <?php } ?>
            
            <?php include 'includes/popEditAboutSection.php'; ?>
       </div>    
    </section>
    <!-- /.content -->
 <?php include 'includes/footer.php'; ?>


<?php 
}
else{
  header('Location: ../login.php');
}
?>