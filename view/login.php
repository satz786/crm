

<?php
require 'session.php';
require 'sessionstart.php';
require 'connection.php';

if($_SERVER['REQUEST_METHOD']=="POST")
{
$mailid  = htmlspecialchars($_REQUEST['email']);
//print_r($_REQUEST);
$password = htmlspecialchars($_REQUEST['password']);


$login= "SELECT * FROM companymaster WHERE email = '$mailid' AND password = '$password' ";

//print_r ($login);


$logindata = mysqli_query($conn, $login);
//$row = $logindata->fetch_assoc();
//echo $login;
//print_r ($logindata);
//$status = $row['status'];
 //  echo $status;


if ($logindata->num_rows == 0) {
$loginfaile = "Login failed";

 //echo "Log-in failed";
   header("Location: ../view/index.php");
//print_r($logindata);
}
else
{
header("Location: ../view/dashboard.php");
$_SESSION ['uid'] = $uid;

}


}
?>







