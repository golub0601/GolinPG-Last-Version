<?php include '../includes/db.php'; ?>
<?php ob_start(); ?>




<!-- ============POP UP EDIT OFFICE ========== -->

  <?php  
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $query_edit = "SELECT * FROM offices WHERE id = {$id} ";
            $edit = mysqli_query($connection, $query_edit);
            while ($row = mysqli_fetch_assoc($edit)) {
                $id = $row['id'];
                $name = $row['city'];
                $image = $row['image_source'];
  ?>

                <tr id="edit-client">
                  
                    <!-- form to edit office -->
                    <!-- ========== -->
                    <form action="includes/editOffice.php" method="post" enctype="multipart/form-data">
                    <td style="border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;">
                      
                      <input name="id" type="text" style="display: none;" value="<?php echo $id; ?>">
                      <input name="name" type="text" style="display: none;" value="<?php echo $name; ?>">
                      <input name="image" type="text" style="display: none;" value="<?php echo $image; ?>">

                      <label for="name">EDIT CITY OF OFFICE:</label><br>
                      <input type="text" style="width: 80%; border-radius: 5px;" value="<?php echo $name; ?>" name="city" class="form-control">
                    </td>
                    <td style="border-top-right-radius: 28px; border-top-left-radius: 28px; width: 138.6px; text-align: center; padding-top: 40px; font-size: 16px;">
                      <label for="image">CHANGE IMAGE OF OFFICE:</label> <br>
                      <img style=" margin-bottom: 10px; margin-top: 10px; height: 120px !important;" class="responsive" src="../img/ColorOffice/<?php echo $image ?>"> <br>
                      <input style="border-radius: 5px;" type="file" name="office_image" id="office_image" class="form-control">
                    </td>
                    <td style="border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;"><input type="submit" class="btn btn-success btn-lg" name="editOffice" style="margin-top: 30%" value="EDIT OFFICE">
                    </td>
                    </form>
                    <!-- ========== -->
                    <!-- /form to edit ofice -->
                </tr>


              <?php } 
                  }
              ?>
<!--=========== end of pop up edit office =======-->



 