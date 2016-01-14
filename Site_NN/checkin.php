<?php
    include "signup.php";
    $link = mysql_connect('localhost', 'root', '') or die ('Lỗi kết nối');
    $db=mysql_select_db('user_info',$link) or die("Failed to connect to MySQL: " . mysql_error());

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
    
    $di = mysql_query("SELECT * FROM info_table WHERE username='$username'");
    if (!$di) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        die($message);
    }


    if (mysql_num_rows($di) > 0){
        echo "This user name was taken !!";
        exit;
    }
   
  
          
                          
   $addmember = mysql_query("INSERT INTO `info_table`(`username`, `password`, `fullname`, `email`) VALUES('$username','$password','$name','$email')");

    if($addmember)  
        echo "Register Successed !!";
    else
        echo mysql_error();   
   
?>