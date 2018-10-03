<?php include '../includes/db.php'; ?>
<?php session_start(); ?>
<?php ob_start(); ?>


<?php if (isset($_SESSION['admin_name'])) {
  
?>

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
            <li class="active"><a href="clients.php"><i class="fa fa-user-circle-o"></i> <span>CLIENTS</span></a></li>
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
        <small>CLIENTS</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-black-tie"></i> ADMIN</a></li>
        <li class="active">SECTIONS</li>
      </ol>
    </section>

    <!-- Main content -->
   <!-- notif -->
     <?php
     if(isset($_GET['deleted'])){
        echo '<div class="alert alert-info alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <h4>Client has been deleted.</h4>
              </div>';
     }
     if(isset($_GET['edited'])){
        echo '<div class="alert alert-success alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Client has been edited.
              </div>';
     }
     if(isset($_GET['added'])){
      if($_GET['added']==1){
        echo '<div class="alert alert-success alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Client has been added.
              </div>';
       }
       else{
        if($_GET['err']=='notimg'){
            echo '<div class="alert alert-danger alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 That image is not png, jpg, gif or jpeg!
              </div>';    
        }
        if($_GET['err']=='big'){
            echo '<div class="alert alert-danger alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Image is too big. Please use another image.
              </div>';    
        }
        if($_GET['err']=='exist'){
            echo '<div class="alert alert-danger alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 That name of image alredy exist.Please use another image or name.
              </div>';    
        }
       if($_GET['err']=='noimg'){
        echo '<div class="alert alert-danger alert-dismissible fade in" style="margin:20px; margin-right:120px; margin-left:120px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             That is not an image!
          </div>';    
        }
       }       
      }
    ?>
    
    <?php include 'includes/deleteClient.php'; ?>
    <section class="content container-fluid">
          <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-bordered table-striped dataTable">
                <thead>
                  <tr>
                    <!-- form to add client -->
                    <!-- ========== -->
                    <form action="includes/addClient.php" method="post" enctype="multipart/form-data">
                    <th style="text-align: center;">
                      <label for="name">NAME OF NEW CLIENT:</label>
                      <input style="border-radius: 5px;" type="text" name="client_name" class="form-control">
                    </th>
                    <th style="text-align: center;">
                      <label for="name">IMAGE OF NEW CLIENT:</label>
                      <input style="border-radius: 5px;" type="file" name="client_image" id="client_img" class="form-control">
                    </th>
                    <th style="text-align: center;"><button type="submit" class="btn btn-primary" name="add_client">ADD</button></th>
                    </form>
                    <!-- ========== -->
                    <!-- /form to add client -->
                  </tr>
                <tr>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 157px;">NAME </th>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 138.6px;">IMAGE </th>
                  <th style="text-align: center;" class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 106.6px;">ACTIONS </th>
                </tr>
                </thead>
                <?php include_once 'includes/popEditClient.php'; ?>
                <tbody>
                  <?php
                   $query = "SELECT * FROM clients_imgs";
                   $send_query = mysqli_query($connection, $query);
                   if (!$send_query) {
                     die(mysqli_error($connection));
                   }
                   while($row = mysqli_fetch_assoc($send_query)){
                     $id = $row['id'];
                     $name = $row['company'];
                     $image = $row['image_source'];
                   ?> 
                <tr>
                  <td style="text-align: center; padding-top: 40px; font-size: 16px;"><?php echo $name; ?></td>
                  <td style="text-align: center;"><img class="responsive" style="height: 120px;" src="../img/Fotke clients/<?php echo $image; ?>" alt=""></td>
                  <td style="text-align: center; padding-top: 40px;">
                    <a class="btn btn-warning btn-lg" href="clients.php?edit=<?php echo $id ;?>">EDIT</a>   
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalToDelete<?php echo $id;?>">
                      DELETE 
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalToDelete<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Do you really want to DELETE <?php echo $name; ?>?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">NO!</button>
                            <a href="clients.php?delete=<?php echo $id ;?>" class="btn btn-danger">DELETE</a>
                          </div>
                        </div>
                      </div>
                    </div>
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

 
<?php 
}
else{
  header('Location: ../login.php');
}
?>