<?php
include("../../connection.php");
$content = $_GET["c1"];
$update1_query = "UPDATE `title` SET `text` = '$content' WHERE `page` = 1";
$qry=mysqli_query($conn, $update1_query);
header("Location:../../index.php");
?>


