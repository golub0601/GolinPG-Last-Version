<?php include '../includes/db.php'; ?>
<?php ob_start(); ?>




<!-- ============POP UP PR&EM SECTION========== -->

  <?php  
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $query_edit = "SELECT * FROM pr_and_em WHERE id = {$id} ";
            $edit = mysqli_query($connection, $query_edit);
            while ($row = mysqli_fetch_assoc($edit)) {
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
                $image = $row['image_source'];
  ?>

                <tr style="background-color: #f2cd29;" id="edit-pr&em">
                    <!-- form to edit PR or EM -->
                    <!-- ========== -->
                    <form action="includes/editPR&EM.php" method="post" enctype="multipart/form-data">

                      <input name="id" type="text" style="display: none;" value="<?php echo $id; ?>">
                      <input name="content" type="text" style="display: none;" value="<?php echo $content; ?>">
                      <input name="image" type="text" style="display: none;" value="<?php echo $image; ?>">

                    <td style="border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;">
                      <label for="content">EDIT:</label><br>
                      <td style="font-weight: bold; border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;">
                        <?php echo $title; ?>
                        <br>
                        <textarea style="font-size: 16px; border: none; resize: none; width: 80%; height:150px; border-radius: 15px;" name="new_content" class="form-control"><?php echo $content; ?></textarea>
                      </td>
                    </td>
                    <td style="border-top-right-radius: 28px; border-top-left-radius: 28px; width: 138.6px; text-align: center; padding-top: 40px; font-size: 16px;">
                      <label for="image">CHANGE IMAGE OF SECTION:</label> <br>
                      <img style=" margin-bottom: 10px; margin-top: 10px; height: 120px !important;" name="image" class="responsive" src="../img/PR&EM/<?php echo $image ?>"> <br>
                      <input style="border-radius: 5px;" type="file" name="section_image" id="section_image" class="form-control">
                    </td>
                    <td style="border-top-left-radius: 28px; border-top-right-radius: 28px; text-align: center; padding-top: 40px; font-size: 16px;"><input type="submit" class="btn btn-success btn-lg" name="editPR&EM" style="margin-top: 30%" value="EDIT">
                    </td>
                    </form>
                    <!-- ========== -->
                    <!-- /form to edit PR or EM -->
                </tr>


              <?php } 
                  }
              ?>
<!--=========== end of pop up PR&EM section =======-->



 