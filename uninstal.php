
<?php
$conn=mysqli_connect("localhost","root","","multi");
if($conn){
   echo "connected";
}else{
   echo "not connected";
}
$ssr=$_GET['myid'];
$sql="DELETE FROM `student`WHERE `ssr`=$ssr";
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert('data has been deleted')</script>";
    header('Refresh:0,url=./record1.php');
    header('Location:./Record2.php');   
}
?>