<?php
function createUser($fname, $username, $email, $userlvl){
  include('connect.php'); //the second NULL is for time, the third NULL is for ip address

  //Generate password
  $password = generateRandomPassword();
  //Encrypt password
  //http://php.net/manual/en/function.md5.php
  $password = md5($password);

  // This query inserts a new user in the database
  $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$userlvl}', 'no')";
  //echo $userString;
  $userQuery = mysqli_query($link, $userString);
  if($userQuery){ //if successful

    //Send email to user http://php.net/manual/en/function.mail.php
    // The message
    $message = "Welcome {$username} \r\n This is your password : {$password}\r\n You can login in http://domain.com/admin/admin_login.php";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Send email
    mail($email, 'Welcome user', $message);
       redirect_to("admin_index.php");

  }else{ //if fails
    $message = "There was a problem setting up this user. Maybe reconsider your hiring practices.";
    return $message;
  }

  mysqli_close($link);
}
/**
*https://stackoverflow.com/questions/4356289/php-random-string-generator
*
**/
function generateRandomPassword(){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }


    return $randomString;
}


?>
