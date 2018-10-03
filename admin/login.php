<?php include '../includes/db.php' ?>
<?php 
   ob_start();
   session_start();


  if (isset($_POST['submit_login'])) {
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$email = mysqli_real_escape_string($connection, $email);
  	$password = mysqli_real_escape_string($connection, $password);

  	$query = "SELECT * FROM admins WHERE email = '{$email}'";
  	$select_user_query = mysqli_query($connection,$query);

  	if (!$select_user_query) {
  		echo 'Login failed , please try again.';
  	}

  	while ($row = mysqli_fetch_array($select_user_query)) {
  		$email_from_db = $row['email'];
  		$password_from_db = $row['password'];
      $name_from_db = $row['name'];
      $image_from_db = $row['image'];
      $id_from_db = $row['id'];
  		
  	}

  	if ($email === $email_from_db){
  			if (password_verify($password, $password_from_db)){
          //storing admin info in session
          $_SESSION['admin_name'] = $name_from_db;
          $_SESSION['admin_password'] = $password_from_db;
          $_SESSION['admin_email'] = $email_from_db;
          $_SESSION['admin_id'] = $id_from_db;
          $_SESSION['admin_image'] = $image_from_db;
          //directing to admin home page
	  			header("Location: ../admin/home.php");
	  		}
	  		else{
	  		    echo "<script>
                    alert('Wrong Password!Please try again.');
                    window.location.href='../login.php';
                  </script>";
	  		}
  		}
  		else{
           echo "<script>
                    alert('There is no admin with that e-mail. Please try again');
                    window.location.href='../login.php';
                  </script>";	
  	    }
  }else{
    
  header('Location: ../login.php');

  }

?>