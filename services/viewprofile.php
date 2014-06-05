<?php
//Intialize the session variable
//header("Content-type: image/jpeg");
//DB Configuration file
require("db_config.php");

$username=$_SESSION['user_id'];


$query = $mysqli->query("select * from tbl_user_registration where username ='$username'");

$records = mysqli_fetch_array($query);

foreach($records as $key=>$value)
{
    if($key!='user_image')
        $_SESSION['profile'][$key] = $value;
    elseif($value!=null)
    {
        $_SESSION['profile'][$key] = $value;
    }

}

?>