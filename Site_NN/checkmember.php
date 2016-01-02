<?php
    include "login.php";
    if (!isset($_POST['username']))
    {
        die('');
    }
    $username   = $_POST['username'];
    $pass       = $_POST['password'];
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

    $query = mysql_query("SELECT username, password FROM member WHERE username='$username'");
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
    echo "Logged in !!"
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
?>