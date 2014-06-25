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
    <script src="../js/polyfiller.js"></script>
    <script src="../js/modernizr-custom.js"></script>
    <script>
        webshims.setOptions('forms-ext', {types: 'date'});
        webshims.polyfill('forms forms-ext');
    </script>
    <style>

        .headerMenuactive{
            width:auto;
            height: auto;
            padding:5px;
            color:#000;

            font-size:16px;

            text-decoration:none;
            font-family:aharoni;
            border-bottom:none;
            /*-webkit-box-shadow: 0 8px 6px -6px black;
            -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -6px black;
        */
        }

        .highlight{
            border-bottom: 2px solid #00ff00;
        }
    </style>
</head>
<body>

<!--[if IE 5]>

<br/>
<![endif]-->
<!--[if IE 6]>

<br/>
<![endif]-->
<!--[if IE 7]>

<br/>
<![endif]-->
<!--[if IE 8]>

<br/>
<![endif]-->
<?php
require("header.php");
?><div class="login_pop">
<?php
require("login_popup.php");
?>
</div>
<div id="wrapper">
	<div class="5grid-layout" id="page-wrapper"style=" background: #000;">
		<div class="row">
			<div class="8u mobileUI-main-content"><br/>
				<section id="pboxregisterleft">


					<div id="tabs-container">
    <ul class="tabs-menu">
        <li ><a href="#tab-1"> <span style=" color:#fff;">U</span>CAPTURE REGISTRATION</a></li>

    </ul><br/>
                        <div class="tab">
                            <div id="tab-1" class="tab-content">
                                <div id="content-4" class="contentscrollbar">
    <!-- display errors --->
                        <?php
                        if(isset($_SESSION['require']) && count($_SESSION['require'])>0)
                        {
                            echo '<div style=" padding: 10px;border: solid 1px red;background-color: rgba(255,0, 0, 0.2);">
                            <p><strong style="color: yellow;">Oh snap! Change a few things up and try submitting again.</strong></p>';
                            foreach($_SESSION['require'] as $key=>$value)
                                echo '<p>'.$value.'.</p>';
                            echo '</div><br>';
                        }
                        if(isset($_SESSION['error']) && count($_SESSION['error'])>0)
                        {
                            echo '<div style=" padding: 10px;border: solid 1px red;background-color: rgba(255,0, 0, 0.2);">
                            <p><strong style="color: yellow;">Oh snap! Change a few things up and try submitting again.</strong></p>';
                            foreach($_SESSION['error'] as $key=>$value)
                                echo '<p>'.$value.'.</p>';
                            echo '</div><br>';
                        }
                        if(isset($_SESSION['success']))
                        {
                            echo '<div style="padding: 10px;border: solid 1px greenyellow;background-color: green;">';
                            echo '<p>'.$_SESSION['success'].'.</p>';
                            echo '</div><br>';
                        }


                       ?>


    <!--end Display --->


                                    <form enctype="multipart/form-data" class="form-horizontal" action="../services/insertuser.php" method="POST" ng-app="register" novalidate>
                                        <table  cellpadding="0"cellspacing="0" border="1" class="table" >
                                            <?php
                                            if(!isset($_SESSION['error'])&&!isset($_SESSION['require']))
                                            {
                                                ?>
                                                <tr class="tr" ><td> <span class="register_labels">FIRST NAME</span></td>
                                                    <td width="32%" style=" padding-bottom:10px; padding-right: 70px;"align="right"/><input type="text" tabindex="1" autocomplete="off"class="txtbx" value="" name="firstname"/></td>
                                                    <td width="32%" style="padding-bottom:10px;"><span class="register_labels">EMAIL</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="right"><input type="text" class="txtbx" tabindex="6" value=""autocomplete="off" name="email" /></td>
                                                </tr>
                                                <tr class="tr" ><td> <span class="register_labels">LAST NAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;"align="right"><input type="text" tabindex="2" class="txtbx" value="" autocomplete="off"name="lastname"/></td>
                                                    <td width="32%" style="padding-bottom:10px;"><span class="register_labels">PHONE</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="left">
                                                     <input type="tel" id="mobile-number" tabindex="7" placeholder="e.g. +1 702 123 4567" style="font-size: 15px;width:230px;border:1px solid #ccc;box-shadow:inset 0px 0px 12px #ccc;border-radius:5px;" name="mobile">

                                                        <!--<input type="text" style="font-size: 15px;" class="txtbx" value=""name="mobile" autocomplete="off"/>--></td>
                                                </tr>
                                                <tr class="tr" >
                                                    <td width="32%" style="padding-bottom:10px; vertical-align: middle;" ><span class="register_labels">USERNAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px; vertical-align:middle;"align="right" ><input type="text" tabindex="3" class="txtbx" value="" autocomplete="off"name="username"/></td>
                                                    <td width="32%" style=" padding-bottom:10px;vertical-align: middle;"><span class="register_labels">ADDRESS</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="right"><textarea class="txtbx"tabindex="8" value="" name="address"autocomplete="off"></textarea></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;"align="right"><input type="password"tabindex="4" class="txtbx" value="" name="password"/></td>
                                                    <td width="32%" style="padding-bottom:10px;"><span class="register_labels">DATE OF BIRTH</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="right">
                                                        <input type="date" class="txtbx" placeholder="mm/dd/yyyy"tabindex="9" name="dob" autocomplete="off"/></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">CONFIRM PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;"align="right"><input type="password" tabindex="5" class="txtbx" value="" name="confirm_password"/></td>
                                                    <td width="32%"></td><td width="32%" style="" align="right">
                                                        <input type="submit" value="REGISTER" class="submit_btn_update"/>
                                                        </span></td>
                                                </tr>

                                            <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <tr class="tr" ><td> <span class="register_labels">FIRST NAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;" align="right"><input autocomplete="off" type="text" tabindex="1" class="txtbx"<?php valid_check('firstname');?> value="<?php echo $_SESSION['values']['firstname']; ?>" name="firstname"/></td>
                                                    <td width="32%" style="padding-bottom:10px;"><span class="register_labels">EMAIL</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="right"><input type="text" tabindex="6" class="txtbx"autocomplete="off" <?php valid_check('email'); ?> value="<?php echo $_SESSION['values']['email']; ?>" name="email" /></td>
                                                </tr>
                                                <tr class="tr" ><td> <span class="register_labels">LAST NAME</span></td>
                                                    <td width="32%" style=" padding-bottom:10px; padding-right: 70px;"align="right"><input type="text"autocomplete="off" tabindex="2" class="txtbx" <?php valid_check('lastname'); ?> value="<?php echo $_SESSION['values']['lastname']; ?>" name="lastname"/></td>
                                                    <td width="32%" style="padding-bottom:10px;"><span class="register_labels">PHONE</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="left">
                                                        <input type="tel" id="mobile-number" class="txtbx" <?php valid_check('mobile'); ?> tabindex="7" value="<?php echo $_SESSION['values']['mobile']; ?>" name="mobile" style="font-size: 15px;width:230px;border:1px solid #ccc;box-shadow:inset 0px 0px 12px #ccc;border-radius:5px;"/></td>
                                                </tr>
                                                <tr class="tr" >
                                                    <td width="32%" style="padding-bottom:10px;vertical-align: middle;"><span class="register_labels">USERNAME</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;vertical-align: middle;"align="right"><input type="text" tabindex="3" autocomplete="off"class="txtbx" <?php valid_check('username'); ?>  value="<?php echo $_SESSION['values']['username']; ?>" name="username"/></td>
                                                    <td width="32%" style=" padding-bottom:10px;vertical-align: middle;"><span class="register_labels">ADDRESS</span></td>
                                                    <td width="32%" style="padding-bottom:10px;"align="right"><textarea class="txtbx"tabindex="8" autocomplete="off" <?php valid_check('address'); ?>  name="address"><?php echo $_SESSION['values']['address']; ?></textarea></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;"align="right"><input type="password" tabindex="4" class="txtbx" <?php valid_check('password'); ?> value="" name="password"/></td>
                                                    <td width="32%" style=" padding-bottom:10px;"><span class="register_labels">DATE OF BIRTH</span></td>
                                                    <td width="32%" style=" padding-bottom:10px;"align="right">
                                                        <input type="date" autocomplete="off" class="txtbx"  <?php valid_check('dob'); ?>tabindex="9" value="<?php echo $_SESSION['values']['dob']; ?>" name="dob" /></td>
                                                </tr>
                                                <tr class="tr" ><td width="32%" style="padding-bottom:10px;"><span class="register_labels">CONFIRM PASSWORD</span></td>
                                                    <td width="32%" style="padding-bottom:10px; padding-right: 70px;"align="right"><input type="password" class="txtbx" tabindex="5" <?php valid_check('confirm_password'); ?> value="" name="confirm_password"/></td>
                                                    <td width="32%"></td><td width="32%" style=" " align="right">
                                                        <input type="submit" value="REGISTER" class="submit_btn_update"/>
                                                        </span></td>
                                                </tr>


                                            <?php

                                            }?>





                                        </table>
                                    </form>

       </div> </div>


    </div>
</div>

					</section>
			</div>
			<!--<div class="4u mobileUI-main-content">
				<section id="pboxregisterright">
					<span  class="register_header"><br/><span style="color:#fff;">U</span>CAPTURE AVATAR</span><br/>
					<br/><br/>
                    <img src="../images/avatar.png" title="Click to set profile image" class="profile-pic" id="upload-button"/>
                    <BR/><BR/><BR/>
					<span class="register_header">CHOOSE IMAGE TO UPLOAD</span>here close comment
					<br/><br/><br/>
					</section>
			</div>-->
		</div>
	</div>
</div>
<?php
unset($_SESSION['require']);
unset($_SESSION['values']);
unset($_SESSION['success']);
unset($_SESSION['error']);
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


<script src="../js/mobilePicker.js"></script>
<script>
    $("#mobile-number").intlTelInput();
</script>


</body>
</html>
<?php
require("footer.php");

?>