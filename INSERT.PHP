

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
</head>
<body>
    <center>

        <h1>
            <?php 
            if (@$msg){
               }
            else{
                echo "student Record";
            }
            ?>
        </h1>
    </center>
        <br>
        <div class="box">

        <form method="post" enctype="multipart/form-data">
            <label for="sname"></label>
                <input type="text" name="sname" id="sname" placeholder="First Name" required>

            <label for="sfname"></label>
                <input type="text" name="sfname" id="sfname" placeholder="Last Name" required>
           
            <label for="sroll"></label>
                <input type="text" name="sroll" id="sroll" placeholder="Your Roll No" required>

            <label for="sclass"></label>
                <input type="text" name="sclass" id="sclass" placeholder="Your Class" required>

                <label for="smobile"></label>
                <input type="tel" name="smobile" id="smobile" placeholder="Phone Number" required>

                <label for="semail"></label>
                <input type="email" name="semail" placeholder="Email Address" required>

            <label for="saddress"></label>
                <input type="text" name="saddress" placeholder="Address" required>

            <label for="scnic"></label>
                <input type="text" name="scnic" id="scnic" placeholder="CNIC number" required>

        

            <input type="radio" id="gen1" name="sgender" value="Male" required>
                <label for="gen1" class="gen">Male</label>

            <input type="radio" id="gen2" name="sgender" value="Female" required>
                <label for="gen2" class="gen">Female</label>

            <input type="radio" id="gen3" name="sgender" value="Other" required>
                <label for="gen3" class="gen">Other</label>
<br>
                <label for="spic"></label>
            <input type="file" name="spic[]" Multiple required>
            <input type="submit" name="submit" id="btn" value="Submit">
            <input type="submit" name="update" id="btn" value="Update">
            <input type="reset" name="reset" id="btn" value="Reset">    
            </form>  
        </div>
</body>
</html>             
