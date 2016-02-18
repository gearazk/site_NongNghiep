
   <?php
session_start();
if (session_destroy()) 
    echo "Logged out !!";
else
    echo "Error !!";
 
echo '<br><a href="CHỢ NÔNG NGHIỆP & NÔNG SẢN ONLINE SỐ 1 VIỆT NAM.html">Bấm vào đây để quay lại trang chủ<br></a>';
?>
