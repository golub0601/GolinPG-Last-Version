<?php include '../../includes/db.php'; ?>
<?php ob_start(); ?>

<?php 
 $image = $_POST['image'];
 $id = $_POST['id'];
 $content = $_POST['content'];
 if (isset($_POST['editPR&EM'])) {

                 
                 
                  
                  if(!basename($_FILES['section_image']['name'])){
                  $new_image = $image;
                  }
                  else{
                    $target_dir = "../../img/PR&EM/";
                    $target_path = $target_dir . basename($_FILES['section_image']['name']);
                    $fileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                  

                        if (file_exists($target_path)) {
                          header('Location: ../pr&em.php?edited=0&err=exist');    
                            }
        
                          
                        if ($_FILES["section_image"]["size"] > 500000) {
                           header('Location: ../pr&em.php?edited=0&err=big');    
                          } 
                         
                        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
                              header('Location: ../pr&em.php?edited=0&err=notimg');    
                        }
                    
                        
                        else{
                              $new_image = basename($_FILES['section_image']['name']);
                              if(move_uploaded_file($_FILES["section_image"]["tmp_name"], $target_path)){
                                  $query = "SELECT * FROM pr_and_em  WHERE id = $id";
                                  $send_query = mysqli_query($connection, $query);
                                  while ($row = mysqli_fetch_assoc($send_query)) {  
                                        $path_to_file = '/GolinPG/img/PR&EM/'. $image; 
                                        unlink($_SERVER['DOCUMENT_ROOT'] . $path_to_file);
                                  }
                              }
                            }
                      }

                  if($_POST['new_content'] !== $content){
                    $content = $_POST['new_content'];
                  }
                  $content = filter_var($content, FILTER_SANITIZE_SPECIAL_CHARS);
                  $query_edit = "UPDATE pr_and_em ";
                  $query_edit.= "SET content = '$content', ";
                  $query_edit.= "image_source = '$new_image'";
                  $query_edit.= "WHERE id = '$id'";
                  $edit = mysqli_query($connection,$query_edit);
                  if (!$edit) {
                      die('No Edit Allowed! Because : <br>' . mysqli_error($connection));
                  }      
                   header('Location: ../pr&em.php?edited=1');
                         
                                   
                } 
                               
?>