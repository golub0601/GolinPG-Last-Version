<?php include '../../includes/db.php'; ?>
<?php ob_start(); ?>

<?php 
 $image = $_POST['image'];
 $id = $_POST['id'];
 $name = $_POST['name'];
 if (isset($_POST['editOffice'])) {

                 
                 
                  
                  if(!basename($_FILES['office_image']['name'])){
                  $new_image = $image;
                  }
                  else{
                    $target_dir = "../../img/ColorOffice/";
                    $target_path = $target_dir . basename($_FILES['office_image']['name']);
                    $fileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                  

                        if (file_exists($target_path)) {
                         header('Location:  ../offices.php?added=0&err=exist');
                            }
        
                          
                        if ($_FILES["office_image"]["size"] > 500000) {
	                 header('Location:  ../offices.php?added=0&err=big');
        	                } 
                         
                        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
                              header('Location:  ../offices.php?added=0&err=notimg');
                          }
                    
                        
                        else{
                              $new_image = basename($_FILES['office_image']['name']);
                              if(move_uploaded_file($_FILES["office_image"]["tmp_name"], $target_path)){
                                  $query = "SELECT * FROM offices WHERE id = $id";
       	                          $send_query = mysqli_query($connection, $query);
      					 	                while ($row = mysqli_fetch_assoc($send_query)) {
      					 		                    $path_to_file = '/GolinPG/img/ColorOffice/'. $image;
      					                        unlink($_SERVER['DOCUMENT_ROOT'] . $path_to_file);
      					 	                }
                              }
                            }
                      }

                  if($_POST['city'] !== $name){
                    $name = $_POST['city'];
                  }
                  $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
                  $query_edit = "UPDATE offices ";
                  $query_edit.= "SET city = '$name', ";
                  $query_edit.= "image_source = '$new_image'";
                  $query_edit.= "WHERE id = '$id'";
                  $edit = mysqli_query($connection,$query_edit);
                  if (!$edit) {
                      die('No Edit Allowed! Because : <br>' . mysqli_error($connection));
                  }      
                   header('Location:  ../offices.php?edited=1');
                                   
                } 
                               
?>