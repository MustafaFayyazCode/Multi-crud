<?php 
 include('./conn.php');
$ssr=$_GET['myid'];
  $sql="DELETE FROM `std2` WHERE `ssr`=$ssr";
  $run=mysqli_query($conn,$sql);
  if($run){
      echo "<script>alert('DATA HAS BEEN DELETED')</script>";
      header('Refresh:0,url=./record.php');
    // header('Location:./record.php');
  }
?>