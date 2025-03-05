<?php
 include("common/db.php");

if (isset($_GET['did'])) {
    echo $del=$_GET['did'];
    $del="DELETE FROM semester WHERE pid='$del'";
    $con->query($del);
    header("location:subject_submision.php");
}

if (isset($_GET['di'])) {
    echo $de=$_GET['di'];
    $del="DELETE FROM stream WHERE pid='$de'";
    $con->query($del);
    header("location:subject_submision.php");
}

if (isset($_GET['d'])) {
    echo $d=$_GET['d'];

    $sel="SELECT * FROM subject WHERE pid='$d'";
    $sel_q=$con->query($sel);
    $sel_row=$sel_q->fetch_assoc();
    $str=$sel_row["stream"];
    $sem=$sel_row["semester"];
    $sub=$sel_row["subject"];

    $sel_ggi="SELECT * FROM ggi WHERE stream='$str' AND sem='$sem' AND subject='$sub'";
    $q_ggi=$con->query($sel_ggi);
    $row_ggi=$q_ggi->fetch_assoc();
    unlink("../pdf/".$row_ggi['pdf']);

    $del_sub="DELETE FROM ggi WHERE stream='$str' AND sem='$sem' AND subject='$sub'";
    $con->query($del_sub);

    $del="DELETE FROM subject WHERE pid='$d'";
    $con->query($del);

    header("location:subject_submision.php");
}



?>