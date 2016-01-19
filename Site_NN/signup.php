<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Đăng ký</title>
    </head>
    
    <body>
        <h1>Member Registation </h1>
        <form action="checkin.php" method="POST">
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
                        <input type="text" name="txtEmail" size="20" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên s:
                    </td>
                    <td>
                        <input type="text" class="inputName" name="txtFullname" size="20" />
                    </td>
                </tr>
                
            </table>
            
            <input type="submit" value="Đăng ký" />
            
            <input type="reset" value="Nhập lại" />
            
        </form>
        
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var max = 4;
        $('.inputName').keypress(function(e) {

            if (this.value.length == max) {
                e.preventDefault();
            } else if (this.value.length > max) {
                this.value = this.value.substring(0, max);
            }
        });
    });
</script>

    </body>
</html>