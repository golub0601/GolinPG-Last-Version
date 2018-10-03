<?php include '../includes/db.php'; ?>
<?php session_start(); ?>


<?php if (isset($_SESSION['admin_name'])) {
  
?>


<?php 
  if (isset($_GET['delete'])) {
    $del_id = $_GET['delete'];
    $query = "DELETE FROM meetings WHERE id = {$del_id} ";
    $result = mysqli_query($connection, $query);
    header("Location: meetings.php");
  }
    if (isset($_GET['cancel'])) {
    $can_id = $_GET['cancel'];
    $query= "UPDATE meetings SET ";
    $query.= "taken_by = 'It is not taken' ";
    $query.="WHERE id = $can_id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('something wrong' . mysqli_error($connection)); 
    }
    header("Location: meetings.php");
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
          <p><?php echo $_SESSION['admin_name'];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
       <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
        <li class="active"><a href="meetings.php"><i class="fa fa-calendar"></i> <span>MEETINGS</span></a></li>
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
        <small>MEETINGS</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-black-tie"></i> ADMIN</a></li>
        <li class="active">MEETINGS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12" id="printableTable">
          <div class="box">
            <div class="box-header">
              <h2  style="font-weight: bold;" class="box-title">Table of accepted meetings</h2>
              <button style="margin: 3px; margin-left: 30px;" class="btn btn-info" onclick="printDiv()">Print table</button>
              <div class="box-tools">
              <form action="meetings.php" method="post">
                <div class="input-group input-group-xs" style="width: 150px;">
                  <input class="form-control" type="date" id="start" name="from_date"
               value="2018-07-22"
               min="2018-01-01" max="2018-12-31" />
                  <input class="form-control" type="date" id="end" name="to_date"
               value="2018-07-22"
               min="2018-01-01" max="2018-12-31" />

                  <div class="input-group-btn">
                    <button type="submit" name="filter" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Number</th>
                  <th>E-mail</th>
                  <!-- <th>Change status</th> -->
                </tr>
                
                <?php 
                  $admin = $_SESSION['admin_name'];
                  if(isset($_POST['filter'])){
                      $from_date = $_POST['from_date'];
                      $to_date = $_POST['to_date'];

                       $query = "SELECT * FROM meetings WHERE day BETWEEN '$from_date}' AND '$to_date' AND taken_by = '$admin' ORDER BY day";
                      
                      }
                  else{
                       $query = "SELECT * FROM meetings WHERE taken_by = '$admin' ORDER BY day";
                  }
                  
                  $result = mysqli_query($connection, $query);
                   while($row = mysqli_fetch_assoc($result)){
                     $id = $row['id'];
                     $name = $row['name'];
                     $company = $row['company'];
                     $email = $row['email'];
                     $number = $row['phone_number'];
                     $date = $row['day'];
                     $time = $row['time_of'];

                     echo '<tr>
                             <td>' . $id . '</td>
                             <td>' . $name .'</td>
                             <td>' . $company . '</td>
                             <td>' . $date . '</td>
                             <td>' . $time . '</td>
                             <td><span class="label label-success">Approved</span></td>
                             <td>' . $number . '</td>
                             <td>' . $email . '</td>
                             <td>
                                <a href="meetings.php?delete=' . $id . '" style="margin-right:5px;" type="button" class="btn btn-danger">Delete</a><a href="meetings.php?cancel=' . $id . '" type="button" class="btn btn-warning">Cancel</a>
                             </td>
                           </tr> ';
                  }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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