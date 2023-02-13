<?php
$con = mysqli_connect("localhost", "root", "", "bloguscew") or die();
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM project WHERE id='$id'");
mysqli_query($con, "DELETE FROM project WHERE id='$id'");
echo "<script>window.location.href='javascript:history.go(-1)'</script>";
?>