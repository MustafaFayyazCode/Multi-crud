1<?php
    include "./conn.php";
    if(isset($_POST['sub'])){
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
        $csql="SELECT * FROM std2 WHERE `smail`='$smail' or `sid`='$sid' or `scnic`='$scnic' or `spnum`='$spnum'";
        $crun=mysqli_query($conn,$csql);
        if(mysqli_num_rows($crun)>0){
            $msg = "Email or CNIC or Roll number or Mobile already existed";
        }else{
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
            $sql="INSERT INTO `std2`(`sname`,`sfname`,`sclass`,`sid`,`sdob`,`smail`,`scnic`,`spnum`,`sgen`,`saddress`,`spic`) VALUES ('$sname','$sfname','$sclass','$sid','$sdob','$smail','$scnic','$spnum','$sgen','$saddress','$pic')";
            $run=mysqli_query($conn,$sql);
            if($run){
                $msg = "Data has been inserted";
            }
            else{
                $msg = "Data not inserted";
            }
        }
        else{
            $msg = "Image is not right";
        }
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
                <input type="text" name="sname" id="sname" placeholder="First Name" required>

                <label for="sfname"></label>
                <input type="text" name="sfname" id="sfname" placeholder="Last Name" required>

                <label for="sclass"></label>
                <input type="text" name="sclass" id="sclass" placeholder="Your Class" required>

                <label for="sid"></label>
                <input type="text" name="sid" id="sid" placeholder="Roll No" required>

                <label for="sdob"><span>Date of Birth:</span></label>
                <input type="date" name="sdob" id="sdob" required>

                <label for="smail"></label>
                <input type="email" name="smail" id="smail" placeholder="Email ID" required>

                <label for="scnic"></label>
                <input type="text" name="scnic" id="scnic" placeholder="CNIC number" required>

                <label for="spnum"></label>
                <input type="tel" name="spnum" id="spnum" placeholder="Phone Number" required>

                <label for="spic"></label>
                <input id="spic" size="48" type="file" multiple name="spic[]" required>

                <input type="radio" id="gen1" name="sgen" value="Male" required>
                <label for="gen1" class="gen">Male</label>

                <input type="radio" id="gen2" name="sgen" value="Female" required>
                <label for="gen2" class="gen">Female</label>

                <input type="radio" id="gen3" name="sgen" value="Other" required>
                <label for="gen3" class="gen">Other</label>


                <label for="saddress"></label>
                <textarea name="saddress" id="saddress" cols="42" rows="5" placeholder="Your Address"
                    required></textarea>

                <input type="submit" name="sub" id="btn" value="Submit">
                <input type="reset" name="reset" id="btn" value="Reset">
            </form>
        </div>
    </div>
</body>

</html>