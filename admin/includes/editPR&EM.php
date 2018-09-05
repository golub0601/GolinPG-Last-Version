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
                          echo " <script>
                                  alert('That name of image exist!');
                                    window.location.href='../pr&em.php';
                                 </script>";
                            }
        
                          
                        if ($_FILES["section_image"]["size"] > 500000) {
                   
                           echo "<script>
                              alert('That image is too big!');
                              window.location.href='../pr&em.php';
                              </script>";
                          } 
                         
                        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
                              echo "<script>
                                    alert('That image is not png, jpg, gif or jpeg!');
                                    window.location.href='../pr&em.php';        
                                    </script>";
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
                   echo "<script>
                            alert('SECTION  HAS BEEN EDITED!');
                            window.location.href='../pr&em.php';
                         </script>";
                         
                                   
                } 
                               
?>