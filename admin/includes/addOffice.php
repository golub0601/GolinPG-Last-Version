 <?php include '../../includes/db.php'; ?>
<?php 

 ob_start();

?>

<?php  

  $target_dir = "../../img/ColorOffice/";
  $target_path = $target_dir . basename($_FILES['office_image']['name']);
  $image = basename($_FILES['office_image']['name']);
  $fileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["office_image"]["tmp_name"]);
  
  if(isset($_POST['add_office'])){
  	if (!$check) {
  		header('Location:  ../offices.php?added=0&err=noimg');
  	}
  	else{
  		if (file_exists($target_path)) {
    header('Location:  ../offices.php?added=0&err=exist');
        }
        else{
        	if ($_FILES["office_image"]["size"] > 1000000) {
        header('Location:  ../offices.php?added=0&err=big');
            } 
            else{
                 if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
				    header('Location:  ../offices.php?added=0&err=notimg');
				    
				}
				else{
					if (move_uploaded_file($_FILES["office_image"]["tmp_name"], $target_path)) {
            $name = $_POST['office_city'];
            $query = "INSERT INTO offices (city, image_source) ";
            $query .="VALUES ('$name', '$image')";
            $send_query = mysqli_query($connection, $query);
            if(!$send_query){
              die(mysqli_error($coonnection));
            }
						header('Location:  ../offices.php?added=1');
                 
							   
				}
            }
        }
  	}
  }
  
 }
?>