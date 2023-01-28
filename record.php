<?php
    include "./conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingleImage - Records</title>
</head>
<style>
    th{
        background-color:brown;
        padding:15px;
    }
    a{
        color:white;
    }
</style>
<body>
<h1 align="center" style="font:50px arial; letter-spacing:15px; text-transform:uppercase; background-color:orange; margin:8px 0px;">Database Records</h1>

<table align="center" border="1" cellspacing="0" cellpadding="10" width="1450" style="background-color:#333; border:grey; text-align:center; font-size:20px; color:lightgrey; margin-top:40px;" >
        <tr>
            <th>Serial no</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Rol no</th>
            <th>Class</th>
            <th>Mobile #</th>
            <th>Address</th>
            <th>Emial</th>
            <th>CNIC #</th>
            <th>Gender</th>
            <th>Picture</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php 
            // $sql = "SELECT `sid`,`sname`,`sfname`,`sclass`,`sdob`,`smail` FROM `std2` WHERE `sid`>=51 and `sid`<=60 and `sgen`='Female'";

            // $sql = "SELECT * FROM `std2` WHERE `sid` IN (51,57,61)";

// $sql = "SELECT * FROM `std2` WHERE `sdob` BETWEEN '1995-01-25' and '2000-01-25'";
$sql = "SELECT * FROM `crud`    ";
            $run = mysqli_query($conn, $sql);
            while($fet=mysqli_fetch_assoc($run)){
                ?>
             <tr>
            <td><?php echo $fet['sid'];?></td>
            <td><?php echo $fet['sname'];?></td>
            <td><?php echo $fet['sfname'];?></td>
            <td><?php echo $fet['sroll'];?></td>
            <td><?php echo $fet['sclass'];?></td>
            <td><?php echo $fet['smobile'];?></td>
            <td><?php echo $fet['saddress'];?></td>
            <td><?php echo $fet['semail'];?></td>
            <td><?php echo $fet['scnic'];?></td>
            <td><?php echo $fet['sgender'];?></td>
           <td>
            <?php 
               $pic=explode(",",$fet['spic']);
               foreach($pic as $p){
?>
                <img src="<?php echo "./imgs/".$p ?>" width="60" height="40" alt="">
<?php
               }
            ?>
           </td>
           <td><a href="./update.php?uid=<?php echo $fet['ssr'] ?>">Update</a></td>
           <td><a href="./delete.php?myid=<?php echo $fet['ssr']; ?>">Delete</a></td>
            
        </tr>



            <?php    
            }
        ?>
    </table>
</body>
</html>