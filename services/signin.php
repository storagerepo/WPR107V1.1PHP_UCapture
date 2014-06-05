<?php
//Intialize the session variable
session_start();

//DB Configuration file
require("db_config.php");

$username = $_POST['username'];

$_SESSION['values']['username']=$_POST['username'];

$password = md5($_POST['password']);

$query = $mysqli->query("select * from tbl_user_registration where username ='".$username."' AND password = '".$password."';");

$records = mysqli_fetch_array($query);

/*$_SESSION['adminid'] = $records['md_admin_id'];*/

$countuser = mysqli_num_rows($query);


echo "Username:".$_POST['username'];
echo "No fo users".$countuser;


if(!isset($_POST['username']) || trim($_POST['username'])=='')
    $_SESSION['login_require']['username'] = "User Name should not be blank";

if(!isset($_POST['password']) || trim($_POST['password'])=='')
    $_SESSION['login_require']['password'] = "Password should not be blank";


if($countuser==0)
{
    $_SESSION['login_error']['login'] = "Invalid Username/Password";
  // echo "invalid";
    header("Location:../view/home.php");
   //   exit;
}
elseif($countuser==1)
{
    echo "login successful";
    $_SESSION['user_id']=$_POST['username'];

    header("Location:../view/profile.php");
   // exit;
}

?>
