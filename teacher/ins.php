<?php
        include("common/db.php");
        if(isset($_POST['submit'])){
        $tn=$_POST['name'];
        $uid=$_POST['user_id'];
        $st=$_POST['str'];
        $se=$_POST['sem'];
        $sa=strtoupper($_POST['subject']);
        $da=$_POST['date'];
       if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
        $bf=$_FILES['file']['tmp_name'];
        $fn=time().$_FILES['file']['name'];
        // $fs=$_FILES['file']['size'];
        $fx=end(explode('.',$fn));
       }else{
        $bf="";
        $fn="";
        $fs="";
        $fx="";
       }
       if($fx=='pdf'){
         move_uploaded_file($bf,"../pdf/".$fn);
        $ins="INSERT INTO ggi SET tname='$tn',user_id='$uid',stream='$st',sem='$se',subject='$sa',date='$da',pdf='$fn'";
        if($con->query($ins)){
         header("location:form.php");
        }
       }else{
         header("location:form.php");
        }
    }
?>
    
                        