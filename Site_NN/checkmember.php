<?php

    session_start();
    $link = mysql_connect('localhost', 'root', '') or die ('Lỗi kết nối');
    $db=mysql_select_db('user_info',$link) or die("Failed to connect to MySQL: " . mysql_error());

    if (!isset($_POST['usernameUID']))
    {
        die('');
    }
    $username   = $_POST['usernameUID'];
    $pass       = $_POST['passwordUID'];

    $query = mysql_query("SELECT username, password FROM info_table WHERE username='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "User NOT found !  <a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }
    $pass = md5($pass);
    $data = mysql_fetch_array($query);
    if($pass !=$data['password'])
    {
        echo "Wrong password !! <a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }
    echo "Logged in !!  <a href='javascript: history.go(-1)'>Back</a>";
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $pass;
?>
