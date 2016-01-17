<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Đăng ký</title>
    </head>
    
    <body>
        <h1>Member Registation </h1>
        <form action="checkin.php" method="POST" class="signup">
            <table >
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="txtUsername" size="10" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="10" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="20" class="emailInput" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" class="inputName" name="txtFullname" size="20" maxlength="20"/>
                    </td>
                </tr>
                
            </table>
            <input type="button" value="Đăng ký" class="btnsubmit"/>
            
            <input type="reset" value="Nhập lại" />
            
        </form>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script  type="text/javascript">
  $(document).ready(function(){

$('.btnsubmit').click(function(){

    validateForm();   
});

function validateForm(){

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('.emailInput').val();
    if(!emailReg.test(email)){
       alert("email not right !")
    }else
        $('.signup').submit();
   
}});
</script>

    </body>
</html>