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
  		// echo "NOT an IMAGE!" ;
  		echo " <script>
				 alert('That is not an Image!');
				 window.location.href='../offices.php';
			   </script>";
  	}
  	else{
  		if (file_exists($target_path)) {
    echo " <script>
				 alert('That name of image exist! Change name or check does that client alredy exist.');
				 window.location.href='../offices.php';
		   </script>";
        }
        else{
        	if ($_FILES["office_image"]["size"] > 1000000) {
        echo "<script>
				 alert('That image is too big!');
				 window.location.href='../offices.php';
		   </script>";
            } 
            else{
                 if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
				    echo "<script>
								 alert('That image is not png, jpg, gif or jpeg!');
					             window.location.href='../offices.php';			 
						   </script>";
				    
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
						echo "<script>
									 alert('OFFICE HAS BEEN ADDED!');
									 window.location.href='../offices.php';
							   </script>";
                 
							   
				}
            }
        }
  	}
  }
  
 }
?>