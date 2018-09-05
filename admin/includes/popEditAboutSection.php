<?php include '../includes/db.php'; ?>
<?php ob_start(); ?>




<!-- ============POP UP EDIT ABOUT SECTION========== -->

  <?php  
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $query_edit = "SELECT * FROM about_us WHERE id = {$id} ";
            $edit = mysqli_query($connection, $query_edit);
            while ($row = mysqli_fetch_assoc($edit)) {
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
  ?>
          <div id="edit-about" class="container" style="align-items: center !important;">
            <a href="about.php"><img src="../img/x.svg" id="close-edit_about"></a>
          <form action="" method="POST">
            <h3 style="font-weight: bold;">EDIT the <?php echo $title; ?></h3>
              <div class="form-group">
                  <!-- <input type="text" class="content-field" name="content" value="">    -->
                  <textarea name="content" class="content-field"><?php echo $content; ?></textarea>
              </div>
              <div class="form-group">
                  <input class="btn btn-success" type="submit" name="editAbout" value="EDIT">    
              </div>
          </form>
          </div>
              <?php } 
                  }
              ?>

              <?php 
              if (isset($_POST['editAbout'])) {
                  $id = $_GET['edit'];
                  $content = $_POST['content'];
                  $query_edit = "UPDATE about_us ";
                  $query_edit.= "SET content = '$content' ";
                  $query_edit.= "WHERE id = '$id'";
                  $edit = mysqli_query($connection,$query_edit);
                  if (!$edit) {
                      die('No Edit Allowed! Because : <br>' . mysqli_error($connection));
                  }
                  header("Location: about.php");
              }
               ?>
<!--=========== end of pop up about us section =======-->