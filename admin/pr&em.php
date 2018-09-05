<?php include '../includes/db.php'; ?>
<?php session_start(); ?>
<?php ob_start(); ?>


<?php include 'includes/head.php'; ?>
<title>Admin GolinPG | CLIENTS</title>
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
            <li><a href="about.php"><i class="fa fa-info-circle"></i> <span>ABOUT US</span></a></li>
            <li><a href="offices.php"><i class="fa fa-laptop"></i> <span>OFFICES</span></a></li>
            <li class="active"><a href="pr&em.php"><i class="fa fa-microphone"></i> <span>PR & EM</span></a></li>   
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
        <small>PR & EM</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-black-tie"></i> ADMIN</a></li>
        <li class="active">SECTIONS</li>
      </ol>
    </section>

    <!-- Main content -->
    
    
    <section class="content container-fluid">
          <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-bordered table-striped dataTable">
                <thead>
                  <?php include_once 'includes/popEditPR&EM.php'; ?>
                <tr>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:120px;" >TITLE</th>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:157px;">CONTENT</th>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:138.6px;">IMAGE</th>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" >ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                   $query = "SELECT * FROM pr_and_em";
                   $send_query = mysqli_query($connection, $query);
                   if (!$send_query) {
                     die(mysqli_error($connection));
                   }
                   while($row = mysqli_fetch_assoc($send_query)){
                     $id = $row['id'];
                     $title = $row['title'];
                     $content = $row['content'];
                     $image = $row['image_source'];
                   ?> 
                <tr>
                  <td style="text-align: center; padding-top: 40px; font-size: 16px;">
                    <?php echo $title; ?>
                  </td>
                  <td style="text-align: center; padding-top: 40px; font-size: 16px;">
                    <?php echo $content; ?>
                  </td>
                  <td style="text-align: center;">
                    <img class="responsive" style="height: 120px;" src="../img/PR&EM/<?php echo $image; ?>">
                  </td>
                  <td style="text-align: center; padding-top: 40px;">
                    <a class="btn btn-warning btn-lg" href="pr&em.php?edit=<?php echo $id ;?>">EDIT</a>
                  </td>
                </tr>
                 <?php } ?>
              </tbody>
            </table></div>
          </div>
        </div>
    


    </section>
    <!-- /.content -->
 <?php include 'includes/footer.php'; ?>