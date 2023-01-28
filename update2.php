<?php
    include "./conn.php";
    $uid=$_GET['uid'];
    $gsql="SELECT * FROM `std2` WHERE `ssr`='$uid'";
    $grun=mysqli_query($conn,$gsql);
    $gfet=mysqli_fetch_array($grun);
    if(isset($_POST['update'])){
        $sname = mysqli_real_escape_string($conn,$_POST['sname']);
        $sfname = mysqli_real_escape_string($conn,$_POST['sfname']);
        $sclass = mysqli_real_escape_string($conn,$_POST['sclass']);
        $sid = mysqli_real_escape_string($conn,$_POST['sid']);
        $sdob = mysqli_real_escape_string($conn,$_POST['sdob']);
        $smail = mysqli_real_escape_string($conn,$_POST['smail']);
        $scnic = mysqli_real_escape_string($conn,$_POST['scnic']);
        $spnum = mysqli_real_escape_string($conn,$_POST['spnum']);
        $sgen = mysqli_real_escape_string($conn,$_POST['sgen']);
        $saddress = mysqli_real_escape_string($conn,$_POST['saddress']);

        $spic = $_FILES['spic']['name'];                    //=====Array of multiple images names will be store in $spic========



        // ==================For Image Validation============
        
        $p=array();
        foreach($spic as $val){
            $exe=strtolower(pathinfo($val,PATHINFO_EXTENSION));
            $arr=array('jpg','png','jpeg');
            if(in_array($exe,$arr)){
                $p[]=$val;
                $msg2="right";
            }
            else{
                $msg2="notright";
                break;
            }
        }

        // =================Move file from database to specific folder==============
        if($msg2=="right"){
            foreach($spic as $key=>$val){
                move_uploaded_file($_FILES['spic']['tmp_name'][$key],"./imgs/".$val);
            }
        }

        // ============Array of images will be convert into string....seperated by Comma(",")===============
        $pic = implode(",",$p);

        
        // =================Uploading images-names to database=============
        if($msg2=="right"){
            $sql="UPDATE `std2` SET `sname`='$sname',`sfname`='$sfname',`sclass`='$sclass',`sid`='$sid',`sdob`='$sdob',`smail`='$smail',`scnic`='$scnic',`spnum`='$spnum',`sgen`='$sgen',`saddress`='$saddress',`spic`='$pic' WHERE `ssr`='$uid'";
            $run=mysqli_query($conn,$sql);
            if($run){
                $msg = "Data has been Updated";
                header("Refresh:2,url=./record.php");
            }
            else{
                $msg = "Data not updated";
            }
        }
        else{
            $msg = "Image is not right";
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiImage - insert</title>
</head>
<style>
<?php include "./style.css"?>
</style>

<body>
    <h1><?php 
    if(@$msg){
        echo  @$msg;
    }
    else{
        echo "Student Record";
    }
    ?></h1>
    <h3>Multiple-Image</h3>
    <div class="container">
        <h2>Contact Us</h2>
        <div class="box">
            <form method="post" enctype="multipart/form-data">
                <label for="sname"></label>
                <input type="text" name="sname" value="<?php echo $gfet['sname'] ?>" id="sname" placeholder="First Name" required>

                <label for="sfname"></label>
                <input type="text" name="sfname" value="<?php echo $gfet['sfname'] ?>" id="sfname" placeholder="Last Name" required>

                <label for="sclass"></label>
                <input type="text" name="sclass" id="sclass" placeholder="Your Class" value="<?php echo $gfet['sclass'] ?>" required>

                <label for="sid"></label>
                <input type="text" name="sid" value="<?php echo $gfet['sid'] ?>" id="sid" placeholder="Roll No" required>

                <label for="sdob"><span>Date of Birth:</span></label>
                <input type="date" name="sdob" value="<?php echo $gfet['sdob'] ?>" id="sdob" required>

                <label for="smail"></label>
                <input type="email" name="smail" id="smail" placeholder="Email ID" value="<?php echo $gfet['smail'] ?>" required>

                <label for="scnic"></label>
                <input type="text" name="scnic" id="scnic" placeholder="CNIC number" value="<?php echo $gfet['scnic'] ?>" required>

                <label for="spnum"></label>
                <input type="tel" name="spnum" id="spnum" placeholder="Phone Number" value="<?php echo $gfet['spnum'] ?>" required>

                <label for="spic"></label>
                <input id="spic" size="48" type="file" multiple name="spic[]" required>

                <?php 
                  if($gfet['sgen']=="Male"){
                        $m="checked";
                  }
                  elseif($gfet['sgen']=="Female"){
                    $f="checked";
              }else{
                $o="checked";
              }
                ?>
                <input type="radio" id="gen1" name="sgen" <?php echo @$m; ?> value="Male" required>
                <label for="gen1" class="gen">Male</label>

                <input type="radio" id="gen2" name="sgen" <?php echo @$f; ?>  value="Female" required>
                <label for="gen2" class="gen">Female</label>

                <input type="radio" id="gen3" name="sgen" <?php echo @$o; ?> value="Other" required>
                <label for="gen3" class="gen">Other</label>


                <label for="saddress"></label>
                <textarea name="saddress" id="saddress" cols="42" rows="5" placeholder="Your Address"
                    required><?php echo $gfet['saddress']; ?></textarea>

                <input type="submit" name="update" id="btn" value="Update">
                <input type="reset" name="reset" id="btn" value="Reset">
            </form>
        </div>
    </div>
</body>

</html>