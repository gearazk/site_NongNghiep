<?php
   include "signup.php";
    if (!isset($_POST['txtUsername']))
    {
        die('');
    }
     
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    $email      = $_POST['txtEmail'];
    $name       = $_POST['txtFullname'];
   
    $password=md5($password);
    if (!$username || !$password || !$email || !$name )
    {
        echo "Are you missing something ?!";
        exit;
    }
    
          
    if (mysql_num_rows(mysql_query("SELECT username FROM info_table WHERE username='$username'"))>1){
        echo "This user name was taken !!";
        exit;
    }
    if (mysql_num_rows(mysql_query("SELECT username FROM info_table WHERE username='$email'"))>1){
        echo "This user name was taken !!";
        exit;
    }
          
    $addmember=mysql_query("INSERT INTO `info_table`(`username`, `pass`, `name`, `email`) VALUES ('$username','$password','$name','$email')");
                          
    if ($addmember)
        echo "Register Successed !!";
    else
        echo mysql_error();

?>