<?php
    include "login.php";
    session_start();
    $link = mysql_connect('localhost', 'root', '') or die ('Lỗi kết nối');
    $db=mysql_select_db('user_info',$link) or die("Failed to connect to MySQL: " . mysql_error());

    if (!isset($_POST['username']))
    {
        die('');
    }
    $username   = $_POST['username'];
    $pass       = $_POST['pass'];
    if(!$username )
    {
        echo "Username Please !!";
        exit;   
    }
    if(!$pass)
    {
        echo "Password Please !!";
        exit;   
    }

    $query = mysql_query("SELECT username, password FROM info_table WHERE username='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "User NOT found !";
        exit;
    }
    $pass = md5($pass);
    $data = mysql_fetch_array($query);
    if($pass !=$data['password'])
    {
        echo "Wrong password !";
        exit;
    }
    echo "Logged in !!";
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $pass;
?>