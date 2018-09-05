<?php 
 if (isset($_GET['delete'])) {
 	$id = $_GET['delete'];
 	// delete picture
 	$query = "SELECT * FROM offices WHERE id = $id";
 	$send_query = mysqli_query($connection, $query);
 	while ($row = mysqli_fetch_assoc($send_query)) {
 		$image = $row['image_source'];
 		$path_to_file = '/GolinPG/img/ColorOffice/'. $image;
        unlink($_SERVER['DOCUMENT_ROOT'] . $path_to_file);
 	}
 	// delete office from db
 	$query = "DELETE FROM offices WHERE id = $id";
 	$send_query = mysqli_query($connection, $query);
 	if (!$send_query) {
 		die(mysqli_error($connection));
 	}
 	else{
 		echo "<script>
				 alert('OFFICE DELETED!');
				 window.location.href='../offices.php';
			  </script>";

 	}
 }

?>