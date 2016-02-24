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
<h3>Edit Form</h3>

<div id="form_edit" >
        <?php echo $this->session->flashdata('edit_rp'); ?>

<?php $attributes = array("name" => "editform");
                echo form_open("user/edit", $attributes);?>
        <input type="text" id="username_edit" class="ipt" placeholder="Username need to edit" name="UserName" value="<?php echo set_value('username'); ?>">
        <span class="text-danger"><?php echo form_error('username'); ?></span>
        
        <input type="text" id="username_new" class="ipt" placeholder="Username New" name="_usernameNew" value="<?php echo set_value('newname'); ?>">
        
        <input type="text" id="pass_new" class="ipt" placeholder="Password New" name="_passwordNew" value="<?php echo set_value('password'); ?>">
        <input type="text" id="name_new" class="ipt" placeholder="Name New" name="_nameNew" value="<?php echo set_value('fullname'); ?>">
        <input type="text" id="email_new" class="ipt" placeholder="Email New" name="_emailNew" value="<?php echo set_value('email'); ?>">


        
        <input type = "submit" value = "Edit User" >
        <?php echo form_close(); ?>

</div>

</body>

</html>

 