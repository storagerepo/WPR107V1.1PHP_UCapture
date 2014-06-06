
<?php
    //Intialize the session variable
    session_start();

    //DB Configuration file
    require("db_config.php");



$uname = $_POST['username'];

$usercheck = "SELECT * FROM tbl_user_registration WHERE username='$uname'";

$sqlcheck = $mysqli->query($usercheck);

$sqlpatient = mysqli_fetch_array($sqlcheck);

$avai = mysqli_num_rows($sqlcheck);


$mail=$_POST['email'];

$emailcheck = "SELECT * FROM tbl_user_registration WHERE email='$mail'";

$sqlcheck1 = $mysqli->query($emailcheck);

$sqlpatient1 = mysqli_fetch_array($sqlcheck1);

$emailavai = mysqli_num_rows($sqlcheck1);


    //Variable store
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $imgData="";


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
    if(!isset($_POST['firstname'])|| trim($_POST['firstname'])=='')
         $_SESSION['require']['firstname']="Firstname should not be blank";
    if(!isset($_POST['lastname'])|| trim($_POST['lastname'])=='')
         $_SESSION['require']['lastname']="Lastname Should not blank";
    if(!isset($_POST['username'])|| trim($_POST['username'])=='')
          $_SESSION['require']['username']="Username should not be blank";
    elseif($avai>=1)
        $_SESSION['error']['username'] = "Username Already Exist";

if(!isset($_POST['password']) || trim($_POST['password'])=='')
    $_SESSION['require']['password'] = "Password should not be blank";

if(!isset($_POST['confirm_password']) || trim($_POST['confirm_password'])=='')
    $_SESSION['require']['confirm_password'] = "Confirm Password should not be blank";

if(trim($_POST['password'])!= trim($_POST['confirm_password']))
    $_SESSION['error']['password'] = "Password and Confirm Password are not match";

    if(!isset($_POST['email'])|| trim($_POST['email'])=='')
          $_SESSION['require']['email']="Email Should not blank";
    elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$_POST['email']))
        $_SESSION['error']['email'] = "Invalid Email";
    elseif($emailavai>=1)
        $_SESSION['error']['email'] = "Email Id Already Exist";


    if(!isset($_POST['mobile'])|| trim($_POST['mobile'])=='')
          $_SESSION['require']['mobile']="Mobile should not be blank";
   elseif(!preg_match("/^[0-9]{10}/",$_POST['mobile']))
        $_SESSION['error']['mobile'] = "Invalid Mobile Number";
   if(!isset($_POST['address'])|| trim($_POST['address'])=='')
          $_SESSION['require']['address']="Address Should not blank";
    if(!isset($_POST['dob'])|| trim($_POST['dob'])=='')
          $_SESSION['require']['dob']="Date of Birth Should not blank";

    //Check no required field
    if(!isset($_SESSION['require'])&&!isset($_SESSION['error']))
    {
        //No blank values execute query
       $userdetail ="INSERT INTO tbl_user_registration ( firstname,lastname, username, password,email,mobile,address,dob,user_image) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."',  '".$email."',  '".$mobile."', '".$address."', '".$dob."','".$imgData."');";
       $result=$mysqli->query($userdetail);
       if($result)
       {
             $_SESSION['success']="Account Created Successfully!!";
              unset($_SESSION['values']);
              unset($_SESSION['require']);
              unset($_SESSION['error']);
              header("Location:../view/userRegistration.php");
       }
       else
       {
        die ('Unable to save .Error updating database: ' . mysql_error());
       }
    }
    else//Some required fields are blank
    {
      header("Location:../view/userRegistration.php");
    }

?>