<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($conn,"delete from member where member_id='$id'") or die(mysqli_error($conn));
header('location:member.php');
?>