<?php  
 
$pass = '123123321';
$password = password_hash($pass,PASSWORD_BCRYPT, array('cost' => 12));

echo $pass . '<br>';
echo $password . '<br>';


?>