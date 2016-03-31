<?php

include("connection.php");

$sql = "SELECT * FROM `title` WHERE `page`=1 ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
				    
while($row = mysqli_fetch_assoc($result)) {
$color = $row["color"] ;
$text = $row["text"] ;
}
}
?>

<html>
<head>
<script>
function title1()
{
	alert("reached title1");
	window.location.assign("titleeditor/page1/page1.php");
}
</script>
<title>Content Management System</title>
<h1 onClick="title1()"><?php echo $text ?></h1>
</head>
<body>
This is an example page which will be used to create all other pages for CMS
</body>