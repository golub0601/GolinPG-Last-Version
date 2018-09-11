<?php include 'db.php'; ?>

<?php 
      require 'mail-src/Exception.php';
      require 'mail-src/PHPMailer.php';
      require 'mail-src/SMTP.php'; 
      
?>

<?php 
 
  function setNewMeeting() {

        global $connection;
        $username = $_POST['username'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $phone_number = $_POST['phone_number'];
        $day = $_POST['date'];
        $time_of = $_POST['time_of'];
       
        $query = "INSERT INTO meetings(name,company,email,phone_number,day,time_of) ";
        $query .= "VALUES ('$username', '$company', '$email', '$phone_number', '$day', '$time_of')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die(mysqli_error($connection));
        }
        else {
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP(); // enable SMTP

            // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "golinpgolubovic";
            $mail->Password = "golin123123321";
            $mail->SetFrom("golinpgolubovic@gmail.com");
            $mail->Subject = "GolinPG new meeting request";
            $mail->Body = "Hi, You are one of admins from GolinPG and we have new request for meeting. Check it.";
            $mail->AddAddress("golub0601@gmail.com");
            
            if(!$mail->Send()) {
                // echo "Mailer Error: " . $mail->ErrorInfo;
             } 
             else {
                echo "<script>
                            alert('MEETING HAS BEEN SCHEDULED!');
                            window.location.href='index.php';
                         </script>";
             }
        }

  }
?>