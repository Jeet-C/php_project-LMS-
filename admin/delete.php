<?php 
include("common/db.php"); 
if (isset($_GET['del'])) {
    $id=$_GET['del'];

    $sel="SELECT * FROM ggi WHERE gid='$id'";
    $q=$con->query($sel);
    $row=$q->fetch_assoc();
    unlink("../pdf/".$row['pdf']);

$del="DELETE FROM ggi WHERE gid='$id'";
$r=$con->query($del);

 
 $str=$row["stream"];
 $sem=$row["sem"];
 $sub=$row["subject"];

header("location:main.php?sid=$str&sem=$sem&sub=$sub");
}

if (isset($_GET['de'])) {
    $id=$_GET['de'];
    $del="DELETE FROM teacher WHERE id='$id'";
    $con->query($del);
    header("location:teacheraccount.php");
}

 
?>