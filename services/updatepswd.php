<?php
// echo "<pre>";
// print_r($_POST); exit;

session_start();


require("db_config.php");
require("class.PHPMailer.php");

$username = $_POST['username'];

$query = $mysqli->query("SELECT * FROM tbl_user_registration WHERE username = '".$username."';");

$records = mysqli_fetch_array($query);

$chars = "abcdefghijkmnopqrstuvwxyz023456789";
srand((double)microtime()*1000000);
$i = 0;
$pass = '' ;
while ($i <= 7)
{
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $pass = $pass . $tmp;
    $i++;
}

    $query11 = "UPDATE tbl_user_registration SET password = '".md5($pass)."' WHERE username = '".$username."'";
    $result=$mysqli->query($query11);


if($result)
{
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "bustrackingapp@gmail.com";  // SMTP username
$mail->Password = "Tracking@123"; // SMTP password

$mail->From = "bustrackingapp@gmail.com";
$mail->FromName = "UCapture";
$mail->AddAddress($records['email'],$records['firstname']);


$mail->WordWrap = 50;        // add attachments
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = "Forgot Password";
$mail->Body    = '<body>
<table width="650" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px; border: rgb(241, 250, 252) 1px solid;">
  <tr>
    <td align="left" valign="top" style="background-color: rgb(241, 250, 252); padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; "><img width="200px" height:"200px" src="http://208.109.87.191/UCapture3/images/Majorlogo.png"  alt="Medication Monitor" /></td>
  </tr>
  <tr valign="top"><td align="left" style="background-color: rgb(241, 250, 252); padding:20px;"><h1 style="color: rgb(68, 68, 68); font-size:20px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:normal;">Welcomes You!</h1>
  <p style="color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; margin:0; padding:0; font-weight:bold;">Your Password reset successfully...</p>
  <h5 style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:20px 0 5px 0; padding:0;">Dear '.$username.',</h5>
  <p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;">This is to confirm that your Password has reset successfully.</p>
  </td></tr>

  <tr><td align="left" valign="top" style="background-color: rgb(241, 250, 252); padding:5px 20px 15px 20px;">
  <table width="500" border="0" cellspacing="0" cellpadding="0" style="background-color: rgb(255, 255, 255); margin:auto; border: rgb(214, 230, 234) 1px solid; padding:10px;">

  <tr>
    <td style="padding:10px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; font-size:12px; color: rgb(85, 85, 85);"><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;">User Name : <span style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)">'.$username.'</span></p></td>
  </tr>
  <tr>
    <td style="padding:10px; font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; font-size:12px; color: rgb(85, 85, 85);"><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;">Password : <span style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)">'.$pass.'</span></p></td>
  </tr>
 </table>
</td></tr>
<tr><td style="background-color: rgb(241, 250, 252); padding:5px 20px;"><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0; font-style:italic;">Thanks & Regards,</p>
<p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(49, 148, 204); font-size:12px; margin:5px 0 10px 0; padding:0; font-style:italic; font-weight:bold;">UCapture <span style="color: rgb(222, 72, 69);">Team</span></p>
</td></tr>
<tr><td align="center" valign="top" style="background-color: rgb(241, 250, 252); padding:5px 20px;border-top: rgb(153, 153, 153) 5px solid;"><p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;">If you have any queries, please feel free to contact us at support@ucapture.com or </p>
<p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;">by phone at (0452) xxxx - xx - xxxx.</p>
<p style="font-family:Arial, Helvetica, sans-serif, "Myriad Pro", Calibri; color: rgb(255, 255, 255); font-size:11px; margin:0 0 5px 0; padding:0; text-align:center;">© 2012. All rights reserved.</p>
</td></tr>
</table>
</body>';
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
if(!$mail->Send())
{
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
}
echo "Message has been sent";
}
else
{
    echo 'update not success';
}

header("Location:../view/home.php");
?>