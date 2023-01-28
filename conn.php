<?php
$conn=mysqli_connect("localhost","root","","multi");
if($conn){
   echo "connected";
}else{
   echo "not connected";
}
?>