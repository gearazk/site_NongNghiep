<?php
session_start();
header('Content-Type: application/json');
    $link = mysql_connect('localhost', 'root', '') or die ('Lỗi kết nối');
    $db=mysql_select_db('user_info',$link) or die("Failed to connect to MySQL: " . mysql_error());

    if (!isset($_POST['nameUID']))
    {
        if (isset($_POST['session'])){
            if ($_SESSION['user'])
               echo json_encode( $_SESSION['user']);
            else
                echo json_encode('null');
        }else if (isset($_POST['session_out']))
        {
            session_destroy();
            echo json_encode('out');
        }
        
        die;
    }
    else{
    $username   = $_POST['usernameUID'];
    $password   = $_POST['passwordUID'];
    $email      = $_POST['emailUID'];
    $name       = $_POST['nameUID'];
   
    $password=md5($password);

    
    $di = mysql_query("SELECT username FROM info_table WHERE username='$username'");
    if (!$di) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        die($message);
    }
    if (mysql_num_rows($di)>0)
    {
        $val = array('return' => 0, 'msg' => 'Tên đăng nhập này đã được sử dụng.');
        echo json_encode($val);
        exit;
    }
    
   
    if (mysql_num_rows(mysql_query("SELECT email FROM info_table WHERE email='$email'")) > 0){
        $val = array('return' => 0, 'msg' => 'Email này đã được sử dụng.');
        echo json_encode($val);
        exit;
    }
                          
   $addmember = mysql_query("INSERT INTO `info_table`(`username`, `password`, `fullname`, `email`) VALUES('$username','$password','$name','$email')");

    if($addmember)  
    {    $val = array('return' => 1, 'msg' => 'OK');
     $_SESSION['user'] = $username;
     $_SESSION['pass'] = $password;

    }
    else
        $val = array('return' => 0, 'msg' => 'Có lỗi với sever Xin quay lại sau.');

//$val=$json->encode($val);
    echo json_encode($val);
    }
?>
