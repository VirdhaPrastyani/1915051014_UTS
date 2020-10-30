<html>
<head>
<title>Logout</title>
<link rel=Stylesheet href="Style.css" type="text/css">
</head>
</html>
<?php
setcookie("loggedin","TRUE",time()-3600);
echo "<div id=logout>Anda berhasil Logout, please wait...!!!</div>";
header('refresh:2 ;URL=http://localhost/latihan6/index.html/');
?>