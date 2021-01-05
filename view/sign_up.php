

<?php
require 'connection.php';





if($_SERVER['REQUEST_METHOD']=="POST")
{

  //To get the size of the image
 // echo $_FILES["myfile"]["size"].'<br><br>';


  //echo $target_file.'<br><br>';
  //echo $imageFileType;
  //echo '<pre>';
  //print_r ($_POST);
  //print_r($_FILES);

 // exit;
$companyname = htmlspecialchars($_REQUEST['companyname']);
$ownername = htmlspecialchars($_REQUEST['ownername']);
$usercount = htmlspecialchars($_REQUEST['usercount']);
$mobile = htmlspecialchars($_REQUEST['mobile']);
$mail = htmlspecialchars($_REQUEST['email']);
$password = htmlspecialchars($_REQUEST['password']);
//$uploadfile = htmlspecialchars($_REQUEST['myfile'])
//if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
//  echo "The file ". htmlspecialchars( basename( $_FILES["myfile"]["name"])). " has been uploaded.";
}

$sql = "insert into companymaster(companyname,ownername,usercount,mobile,email,password) values
('".$companyname."' , '".$ownername ."','".$usercount."', '".$mobile."' ,'".$mail."','".$password."')";

if (mysqli_query($conn, $sql))

{
    header("Location: ../view/index.php");

} 
  else
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        
}




?>