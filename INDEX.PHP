<?php 
   if(isset($_POST['sub'])){
        $spic=$_FILES['spic']['name'];
        $p=array();
       foreach($spic as $val){
              $exe=strtolower(pathinfo($val,PATHINFO_EXTENSION));
              $arr=array("png","jpg","jpeg");
              if(in_array($exe,$arr)){
                $p[]=$val;
                echo "<h1>Img right</h1>";
              }else{
                echo "<h1>Img not right</h1>";
              }
       }
   $pic=implode(",",$p);

   echo $pic;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"  enctype="multipart/form-data">
          <input type="file" name="spic[]" multiple />
          <input type="submit" name="sub" value="submit" />
    </form>
</body>
</html>