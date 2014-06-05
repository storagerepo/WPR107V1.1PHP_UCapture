
<?php
//Intialize the session variable
session_start();

//DB Configuration file
require("db_config.php");



/*$uname = $_POST['username'];

$usercheck = "SELECT * FROM tbl_user_registration WHERE username='$uname'";

$sqlcheck = $mysqli->query($usercheck);

$sqlpatient = mysqli_fetch_array($sqlcheck);

$avai = mysqli_num_rows($sqlcheck);


$mail=$_POST['email'];

$emailcheck = "SELECT * FROM tbl_user_registration WHERE email='$mail'";

$sqlcheck1 = $mysqli->query($emailcheck);

$sqlpatient1 = mysqli_fetch_array($sqlcheck1);

$emailavai = mysqli_num_rows($sqlcheck1);*/


//Variable store
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
//$password = md5($_POST['password']);
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$dob = $_POST['dob'];


//Store image

/*if($_FILES['userImage']['size'] > 0)
{
    $filecheck = basename($_FILES['userImage']['name']);

    $ext = substr($filecheck, strrpos($filecheck, '.') + 1);

    if(($ext == "jpg" || $ext == "gif" || $ext == "png") && ($_FILES["userImage"]["type"] == "image/jpeg" || $_FILES["userImage"]["type"] == "image/gif" || $_FILES["userImage"]["type"] == "image/png") && ($_FILES["userImage"]["size"] < 2120000))
    {
        $rand=rand(0,10000);
        $headerimage ='images/'.$rand. $_FILES['userImage']['name'];
        chmod($headerimage, 0777);
        //  echo  $headerimage; exit;

        move_uploaded_file($_FILES['userImage']['tmp_name'],$headerimage);
        // move_uploaded_file($_FILES['medicineimage']['tmp_name'],$headerimage_admin);

    }else{
        $_SESSION['error']['medicineid'] = "Image - Please Upload jpg, gif, png file only";
        header("Location:addmedicine.php");
        exit;
    }

}*/




if(count($_FILES) > 0) {
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

        $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);


    }}

//Session values
foreach($_POST as $key=>$value)
{
    $_SESSION['values'][$key] = $value;
}


//Validation
//if(!isset($_POST['firstname'])|| trim($_POST['firstname'])=='')
  //  $_SESSION['require_profile']['firstname']="Firstname should not be blank";

//Check no required field
if(!isset($_SESSION['require_profile']))
{
   //No blank values execute query
if(isset($imgData))
    $userdetail = "UPDATE tbl_user_registration SET  firstname = '".$firstname."', lastname = '".$lastname."', dob = '".$dob."', email = '".$email."', address = '".$address."', mobile = '".$mobile."', user_image='".$imgData."' WHERE username ='".$_SESSION['user_id']."'";
else
    $userdetail = "UPDATE tbl_user_registration SET  firstname = '".$firstname."', lastname = '".$lastname."', dob = '".$dob."', email = '".$email."', address = '".$address."', mobile = '".$mobile."' WHERE username ='".$_SESSION['user_id']."'";


    $result=$mysqli->query($userdetail);
    if($result)
    {
        $_SESSION['success_profile']="Account Updated Successfully!!";
        unset($_SESSION['values']);
        unset($_SESSION['require']);
        unset($_SESSION['error_profile']);
        header("Location:../view/profile.php");
    }
    else
    {

        die ('Unable to save .Error updating database: ' . mysql_error());
    }

//header("Location:../view/profile.php?username=".$username);
}
?>