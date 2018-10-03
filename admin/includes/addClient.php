 <?php include '../../includes/db.php'; ?>
<?php 

 ob_start();

?>

<?php  

  $target_dir = "../../img/Fotke clients/";
  $target_path = $target_dir . basename($_FILES['client_image']['name']);
  $image = basename($_FILES['client_image']['name']);
  $fileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["client_image"]["tmp_name"]);
  
  if(isset($_POST['add_client'])){
  	if (!$check) {
  		header('Location:  ../clients.php?added=0&err=noimg');
  	}
  	else{
  		if (file_exists($target_path)) {
  header('Location:  ../clients.php?added=0&err=exist');
        }
        else{
        	if ($_FILES["client_image"]["size"] > 1000000) {
        header('Location:  ../clients.php?added=0&err=big');  
            } 
            else{
                 if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
               header('Location:  ../clients.php?added=0&err=notimg');   
				}
				else{
					if (move_uploaded_file($_FILES["client_image"]["tmp_name"], $target_path)) {
            $name = $_POST['client_name'];
            $name = strtoupper($name);
            $query = "INSERT INTO clients_imgs(company, image_source) ";
            $query .="VALUES ('$name', '$image')";
            $send_query = mysqli_query($connection, $query);
            if(!$send_query){
              die(mysqli_error($coonnection));
            }
            header('Location:  ../clients.php?added=1');
						
							   
				}
            }
        }
  	}
  }
  
 }
?>