<?php include '../includes/db.php'; ?>
<?php ob_start(); ?>




<!-- ============POP UP EDIT CLIENT SECTION========== -->

  <?php  
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $query_edit = "SELECT * FROM clients_imgs WHERE id = {$id} ";
            $edit = mysqli_query($connection, $query_edit);
            while ($row = mysqli_fetch_assoc($edit)) {
                $id = $row['id'];
                $name = $row['company'];
                $image = $row['image_source'];
  ?>

                <tr id="edit-client">
                    <!-- form to edit client -->
                    <!-- ========== -->
                    <form action="includes/editClient.php" method="post" enctype="multipart/form-data">

                      <input name="id" type="text" style="display: none;" value="<?php echo $id; ?>">
                      <input name="name" type="text" style="display: none;" value="<?php echo $name; ?>">
                      <input name="image" type="text" style="display: none;" value="<?php echo $image; ?>">

                    <td style="border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;">
                      <label for="name">EDIT NAME OF CLIENT:</label><br>
                      <input type="text" style="width: 80%; border-radius: 5px;" value="<?php echo $name; ?>" name="new_name" class="form-control">
                    </td>
                    <td style="border-top-right-radius: 28px; border-top-left-radius: 28px; width: 138.6px; text-align: center; padding-top: 40px; font-size: 16px;">
                      <label for="image">CHANGE IMAGE OF CLIENT:</label> <br>
                      <img style=" margin-bottom: 10px; margin-top: 10px; height: 120px !important;" name="image" class="responsive" src="../img/Fotke clients/<?php echo $image ?>"> <br>
                      <input style="border-radius: 5px;" type="file" name="client_image" id="client_image" class="form-control">
                    </td>
                    <td style="border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;"><input type="submit" class="btn btn-success btn-lg" name="editClient" style="margin-top: 30%" value="EDIT">
                    </td>
                    </form>
                    <!-- ========== -->
                    <!-- /form to edit client -->
                </tr>


              <?php } 
                  }
              ?>
<!--=========== end of pop up edit client section =======-->



 