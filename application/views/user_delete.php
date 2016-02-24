<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Site User Seve</title>

  <style type="text/css">

#form_delete,#form_edit{
	border-left:  solid ; 
	margin: 0 0 0 30px;
	padding: 0 0 0 30px;

}
#form_edit .ipt
{
display: block;
  	margin:  0 0 10px 0;
}
  #form_add .ipt{
  	display: block;
  	margin:  0 0 10px 0;
  }
  #form_delete .ipt
   {

   	display: block;
  	margin:  0 0 100px 0;
   }

  </style>

</head>
<body>
<h3>Delete Form</h3>
<?php $attributes = array("name" => "deleteform");
                echo form_open("user/delete", $attributes);?>
                <div class="col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('delete_rp'); ?>
    </div>
<div id="form_delete" >
		<input type="text" id="username_delete" class="ipt" placeholder="Username" name="fname" value="<?php echo set_value('fname'); ?>">
		<span class="text-danger"><?php echo form_error('delete_rp'); ?></span>
		
	   	<input type = "submit" value = "Delete User" >
<?php echo form_close(); ?>
<?php echo $this->session->flashdata('msg'); ?>
</div>


<!-- <div id="form_edit" >
		<input type="text" id="username_edit" class="ipt" placeholder="Username need to edit" name="_username">
		
		<input type="text" id="username_new" class="ipt" placeholder="Username New" name="_usernameNew">

		<input type="text" id="pass_new" class="ipt" placeholder="Password New" name="_passwordNew">
		<input type="text" id="name_new" class="ipt" placeholder="Name New" name="_nameNew">
		<input type="text" id="email_new" class="ipt" placeholder="Email New" name="_emailNew">


		<div id="edit_report"></div>
		
	   	<input type = "button" value = "Edit User" onclick="click_edit()">

</div> -->

</body>
<script type="text/javascript">
// function click_edit()
// {
//  	console.log("click_edit");
//  	if( $("#username_edit").val().length<7 || !/^[A-Za-z0-9]+$/.test($("#username_edit").val()) ){
//         $("#edit_report").html('Tên đăng nhập không hợp lệ (chỉ bao gồm ký tự và số > 7 ký tự).');
//         $("#username_edit").focus();
//         return ;
//     }
//     $.ajax({
//         url : "sever.php",
//         type : "post",
//         data : {
//         	_action: "edit",
//         	_username : $("#username_edit").val(),
//         	_usernameNew: $("#username_new").val(),
//         	_passwordNew: $("#pass_new").val(),
//         	_nameNew: $("#name_new").val(),
//         	_emailNew: $("#email_new").val()

//         },
//         success : function (res){
//             console.log(res);
//              if (res=="false") {
//        			$("#edit_report").html('Không tìm thấy username');
//             }else if(res=="true")
//        			$("#edit_report").html('Edit user thành công');
//         }
//      });

// }


// function click_delete()
// {
//  	console.log("click_delete");

//  	 if( $("#username_delete").val().length<7 || !/^[A-Za-z0-9]+$/.test($("#username_delete").val()) ){
//         $("#delete_report").html('Tên đăng nhập không hợp lệ (chỉ bao gồm ký tự và số > 7 ký tự).');
//         $("#username_delete").focus();
//         return 
//     }
//     $.ajax({
//         url : "sever.php",
//         type : "post",
//         data : {
//         	_action: "delete",
//         	_username : $("#username_delete").val(),
        	
//         },
//         success : function (res){
//             console.log(res);
//             if (res=="false") {
//        			$("#delete_report").html('Không tìm thấy username');
//             }else if(res=="true")
//        			$("#delete_report").html('xóa user thành công');
//        		else 
//        			$("#delete_report").html('lỗi sever');

//         }
//      });

// }
//  function click_add()
//  {
//  	console.log("click_add");
//     if( $("#username_add").val().length<7 || !/^[A-Za-z0-9]+$/.test($("#userLb").val()) ){
//         $("#add_report").html('Tên đăng nhập không hợp lệ (chỉ bao gồm ký tự và số > 7 ký tự).');
//         $("#username_add").focus();
//         return 
//     }

    
//     if($("#pass_add").val()==""){
//         $("#add_report").html('Không được để trống mật khẩu');
//         $("#pass_add").focus();
//         return 
//     }
//     if($("#pass_add").val().length<6){
//         $("#add_report").html('Mật khẩu phải trên 6 ký tự');
//         $("#pass_add").focus();
//         return 
//     }

//     if($("#name_add").val()==""){
//         $("#add_report").html('Không được để trống tên');
//         $("#name_add").focus();
//         return 
//     }
//     if($("#email_add").val()==""){
//         $("#add_report").html('Không được để trống email');
//         $("#email_add").focus();
//         return 
//     }
//     var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//     var emai = $("#email_add").val();
//     if(!emailReg.test(emai)){
//          $("#add_report").html('Email không hợp lệ ');
//          $("#email_add").focus();
//         return 
//     }

//     $.ajax({
//         url : "sever.php",
//         type : "post",
//         data : {
//         	_action: "add",
//         	_username : $("#username_add").val(),
//         	_password:$("#pass_add").val(),
//         	_name: $("#name_add").val(),
//      		_email: $("#email_add").val(),
//         },
//         success : function (res){
//             console.log(res);
//             if (res=="complete") {
//        			$("#add_report").html('Success');
//             }else if(res=="username")
//        			$("#add_report").html('Username đã tồn tại ');
// 			else if(res=="email")
//        			$("#add_report").html('Email đã tồn tại ');
//        		else
//        			$("#add_report").html('lỗi sever');

//         }
//      });

//  }

 </script>
</html>

 