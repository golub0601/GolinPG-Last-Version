<?php include 'db.php'; ?>

<?php 
 function loadImage(string $name){
 	global $connection;
    $query = "SELECT * FROM imgs WHERE name = '$name'";
    $get_image = mysqli_query($connection, $query);
    if(!$get_image){
    	die(mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($get_image)){
       return $source = $row['source'];
    }
 }
?>