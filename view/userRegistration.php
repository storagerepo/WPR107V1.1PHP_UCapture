<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>UCapture</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
    <link rel="stylesheet" href="../css/other css/jquery-ui.css">
</head>
<body>
<div id="header-wrapper">
<?php
require("header.php");
?>
</div>
<div id="wrapper">
	<div class="5grid-layout" id="page-wrapper"style="background: #000;">
		<div class="row">
			<div class="8u mobileUI-main-content">
				<section id="pboxregisterleft">


					<div id="tabs-container">
    <ul class="tabs-menu">
        <li ><a href="#tab-1"> <span style="color:#fff;">U</span>CAPTURE REGISTRATION</a></li>

    </ul><br/>
                        <div class="tab">
                            <div id="tab-1" class="tab-content">
                                <div id="content-4" class="contentscrollbar">
    <!-- display errors --->
                        <?php
                        if(isset($_SESSION['require']) && count($_SESSION['require'])>0)
                        {
                            echo '<br/><br/><div style="padding: 10px;border: solid 1px red;background-color: rgba(255,0, 0, 0.2)">
                            <p><strong>Oh snap! Change a few things up and try submitting again.</strong></p>';
                            foreach($_SESSION['require'] as $key=>$value)
                                echo '<p>'.$value.'.</p>';
                            echo '</div>';
                        }
                        if(isset($_SESSION['error']) && count($_SESSION['error'])>0)
                        {
                            echo '<br/><br/><div style="padding: 10px;border: solid 1px red;background-color: rgba(255,0, 0, 0.2)">
                            <p><strong>Oh snap! Change a few things up and try submitting again.</strong></p>';
                            foreach($_SESSION['error'] as $key=>$value)
                                echo '<p>'.$value.'.</p>';
                            echo '</div>';
                        }
                        if(isset($_SESSION['success']))
                        {
                            echo '<br/><br/><div style="padding: 10px;border: solid 1px greenyellow;background-color: green;">';
                            echo '<p>'.$_SESSION['success'].'.</p>';
                            echo '</div>';
                        }


                       ?>

<br><br>


    <!--end Display --->


                                    <form enctype="multipart/form-data" class="form-horizontal" action="../services/insertuser.php" method="POST" ng-app="register" novalidate>
                                        <table  cellpadding="0"cellspacing="0" border="0" class="table" >
                                            <?php
                                            if(!isset($_SESSION['error'])&&!isset($_SESSION['require']))
                                            {
                                                ?>
                                                <tr class="tr" ><td> <span class="register_labels">FIRST NAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px;" value="" name="firstname"/><input type="text" class="txtbx" value="" name="firstname"/></td>
                                                </tr>
                                                <tr class="tr" ><td> <span class="register_labels">LAST NAME</span></td>

                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="lastname"/></td>
                                                </tr>
                                                <tr class="tr" >
                                                    <td width="32%" style="padding-bottom:10px;" ><span class="register_labels">USER NAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="username"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="password" class="txtbx" value="" name="password"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">CONFIRM PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="password" class="txtbx" value="" name="confirm_password"/></td>
                                                </tr>

                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">EMAIL</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="email" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">PHONE</span></td>
                                                    <td width="32%" style="padding-bottom:10px;">
                                                        <input type="text" style="font-size: 15px;" class="txtbx" value=""name="mobile" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">ADDRESS</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><textarea class="txtbx" value="" name="address"></textarea></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">DATE OF BIRTH</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" value="" name="dob" id="datepicker"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><!--<span class="register_labels">IMAGE</span>--></td>
                                                    <td width="32%" style="padding-bottom:10px;">
                                                        <input type="file" accept="image/*" class="file-upload" value="" name="userImage" id="userimage" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-top:20px;padding-right:20px;" align="right"><span class="register_labels">
                        <input type="submit" value="REGISTER" class="submit_btn"/>
                    </span></td>
                                                   <!-- <td width="32%" style="padding-top:20px;"><input type="reset" value="RESET" class="submit_btn"/></td>-->
                                                </tr>
                                            <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <tr class="tr" ><td> <span class="register_labels">FIRST NAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx"
                                                            <?php
                                                            valid_check('firstname');
                                                            ?>
                                                                                                        value="<?php echo $_SESSION['values']['firstname']; ?>" name="firstname"/></td>
                                                </tr>
                                                <tr class="tr" ><td> <span class="register_labels">LAST NAME</span></td>

                                                    <td width="32%" style=" padding-bottom:10px;"><input type="text" class="txtbx" <?php valid_check('lastname'); ?> value="<?php echo $_SESSION['values']['lastname']; ?>" name="lastname"/></td>
                                                </tr>
                                                <tr class="tr" >
                                                    <td width="32%" style="padding-bottom:10px;" style="padding-bottom:10px;"><span class="register_labels">USER NAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" <?php valid_check('username'); ?>  value="<?php echo $_SESSION['values']['username']; ?>" name="username"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="password" class="txtbx" <?php valid_check('password'); ?> value="" name="password"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">CONFIRM PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="password" class="txtbx" <?php valid_check('confirm_password'); ?> value="" name="confirm_password"/></td>
                                                </tr>

                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">EMAIL</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" <?php valid_check('email'); ?> value="<?php echo $_SESSION['values']['email']; ?>" name="email" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">PHONE</span></td>
                                                    <td width="32%" style="padding-bottom:10px;">
                                                        <input type="text" class="txtbx" <?php valid_check('mobile'); ?> value="<?php echo $_SESSION['values']['mobile']; ?>" name="mobile" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">ADDRESS</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><textarea class="txtbx" <?php valid_check('address'); ?>  name="address"><?php echo $_SESSION['values']['address']; ?></textarea></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">DATE OF BIRTH</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"><input type="text" class="txtbx" <?php valid_check('dob'); ?> value="<?php echo $_SESSION['values']['dob']; ?>" name="dob" id="datepicker"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><!--<span class="register_labels">IMAGE</span>--></td>
                                                    <td width="32%" style="padding-bottom:10px;">
                                                        <input type="file" accept="image/*" class="file-upload" value="" name="userImage" id="userimage" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-top:20px;padding-right:20px;" align="right"><span class="register_labels">
                        <input type="submit" value="REGISTER" class="submit_btn"/>
                    </span></td>
                                                   <!-- <td width="32%" style="padding-top:20px;"><input type="reset" value="RESET" class="submit_btn"/></td>-->
                                                </tr>
                                            <?php

                                            }?>





                                        </table><br><br><br><br><br><br><br>
                                    </form>

       </div> </div>


    </div>
</div>

					</section>
			</div>
			<div class="4u mobileUI-main-content">
				<section id="pboxregisterright">
					<span  class="register_header"><br/><span style="color:#fff;">U</span>CAPTURE AVATAR</span><br/>
					<br/><br/>
                    <img src="../images/avatar.png" title="Click to set profile image" class="profile-pic" id="upload-button"/>
					<BR/>
					<span class="register_header">CHOOSE IMAGE TO UPLOAD</span>
					<br/><br/><br/>
					</section>
			</div>
		</div>
	</div>
</div>
<?php
unset($_SESSION['require']);
unset($_SESSION['values']);
unset($_SESSION['success']);
unset($_SESSION['error']);
?>

<br/><br/><br>
<?php
require("footer.php");

?>

<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });

        $("#upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });</script>



<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui.js"></script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<script>
    <?php
function valid_check($key)
{
    if(isset($_SESSION['require'][$key]))
    {
        echo 'style="border:2px solid red;"';
    }

}
 ?>
</script>



</body>
</html>
