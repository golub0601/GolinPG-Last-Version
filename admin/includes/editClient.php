<?php include '../../includes/db.php'; ?>
<?php ob_start(); ?>

<?php 
 $image = $_POST['image'];
 $id = $_POST['id'];
 $name = $_POST['name'];
 if (isset($_POST['editClient'])) {

                 
                 
                  
                  if(!basename($_FILES['client_image']['name'])){
                  $new_image = $image;
                  }
                  else{
                    $target_dir = "../../img/Fotke clients/";
                    $target_path = $target_dir . basename($_FILES['client_image']['name']);
                    $fileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                  

                        if (file_exists($target_path)) {
                      header('Location:  ../clients.php?added=0&err=exist');
                            }
        
                          
                        if ($_FILES["client_image"]["size"] > 500000) {
                   
                           header('Location:  ../clients.php?added=0&err=big'); 
                          } 
                         
                        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
                              header('Location:  ../clients.php?added=0&err=notimg'); 
                          }
                    
                        
                        else{
                              $new_image = basename($_FILES['client_image']['name']);
                              if(move_uploaded_file($_FILES["client_image"]["tmp_name"], $target_path)){
                                  $query = "SELECT * FROM clients_imgs WHERE id = $id";
                                  $send_query = mysqli_query($connection, $query);
                                  while ($row = mysqli_fetch_assoc($send_query)) {
                                        $path_to_file = '/GolinPG/img/Fotke clients/'. $image;
                                        unlink($_SERVER['DOCUMENT_ROOT'] . $path_to_file);
                                  }
                              }
                            }
                      }

                  if($_POST['new_name'] !== $name){
                    $name = $_POST['new_name'];
                  }
                  $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
                  $query_edit = "UPDATE clients_imgs ";
                  $query_edit.= "SET company = '$name', ";
                  $query_edit.= "image_source = '$new_image'";
                  $query_edit.= "WHERE id = '$id'";
                  $edit = mysqli_query($connection,$query_edit);
                  if (!$edit) {
                      die('No Edit Allowed! Because : <br>' . mysqli_error($connection));
                  }      
                   header('Location:  ../clients.php?edited=1');
                                   
                } 
                               
?>