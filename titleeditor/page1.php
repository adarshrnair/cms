<?php
include("../connection.php");
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
<title>Content Management System</title>
<head>
<body>
<h1>The content editor of page 1 title</h1>
</br>
</br>
<form name="f1" action="p1.php">
Content : <input type="text" name="c1" value = <?php echo $text ?> >
</br>
<input type="submit">
</form
</body>
</html>