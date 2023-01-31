
 <?php
include('./includes/connection.php');

$email=$_REQUEST['email'];
$graduation=$_REQUEST['graduation'];
$mobile=$_REQUEST['mobile'];

    
$sql="INSERT INTO `enroll`(`year`, `email`, `mobile`) VALUES ('$graduation','$email','$mobile')";

if($conn->query($sql)===TRUE){
    echo "Thanks for contacting to us.We will get back to you soon";
}else{
    echo "record could not inserted";
}

?>
