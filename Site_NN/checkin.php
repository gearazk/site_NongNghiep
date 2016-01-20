<?php
    $link = mysql_connect('localhost', 'root', '') or die ('Lỗi kết nối');
    $db=mysql_select_db('user_info',$link) or die("Failed to connect to MySQL: " . mysql_error());

    if (!isset($_POST['nameLb']))
    {
        die('die');
    }
    $username   = $_POST['userLb'];
    $password   = $_POST['passLb'];
    $email      = $_POST['emailLb'];
    $name       = $_POST['nameLb'];
   
    $password=md5($password);

    if (!$username || !$password || !$email || !$name )
    {
        echo "Are you missing something ?!";
        exit;
    }
    
    $di = mysql_query("SELECT username FROM info_table WHERE username='$username'");
    if (!$di) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        die($message);
    }
    if (mysql_num_rows($di)>0)
    {
         echo "This username name was taken !! <a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }
    
    if(!eregi("[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,4})$",$email))
    {
        echo "This email is not right !! <a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }
    if (mysql_num_rows(mysql_query("SELECT email FROM info_table WHERE email='$email'")) > 0){
        echo "This email name was taken !! <a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }
   
    

  
          
                          
   $addmember = mysql_query("INSERT INTO `info_table`(`username`, `password`, `fullname`, `email`) VALUES('$username','$password','$name','$email')");

    if($addmember)  
        echo "Register Successed !!";
    else
        echo mysql_error();   
   
?>