<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
View html souce please: <HR>
<?php
$doc = new DOMDocument();
$doc->load("employees.xml");//接檔名 可直接送xml 不必設定瀏覽器標頭
echo $doc->c14n();
?>

</body>
</html>
