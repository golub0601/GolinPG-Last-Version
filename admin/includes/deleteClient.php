<?php 
 if (isset($_GET['delete'])) {
 	$id = $_GET['delete'];
 	// delete picture
 	$query = "SELECT * FROM clients_imgs WHERE id = $id";
 	$send_query = mysqli_query($connection, $query);
 	while ($row = mysqli_fetch_assoc($send_query)) {
 		$image = $row['image_source'];
 		$path_to_file = '/GolinPG/img/Fotke clients/'. $image;
        unlink($_SERVER['DOCUMENT_ROOT'] . $path_to_file);
 	}
 	// delete client from db
 	$query = "DELETE FROM clients_imgs WHERE id = $id";
 	$send_query = mysqli_query($connection, $query);
 	if (!$send_query) {
 		die(mysqli_error($connection));
 	}
 	else{
 		echo "<script>
 		             alert('CLIENT DELETED!');
				     window.location.href='clients.php';
			  </script>";
 	}
 }

?>