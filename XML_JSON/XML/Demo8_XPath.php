<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
<?php
$doc = new DOMDocument();
$doc->Load('employees.xml');//將xml檔案load到doc物件
$xpath = new DOMXPath($doc);
$entries = $xpath->query("/employees/employee/@EmpType");

$last = $xpath->query("/employees/employee[1]/lastName");
echo "last：" . $last->nodeValue . "<br>";
// header()
// 

foreach ($entries as $entry) 
{
   // $last = $xpath->query("/employees/employee/lastName ");
   echo "結果：" . $entry->nodeValue . "<br>";
   // $last = $xpath->query("/employees/employee[0]");
   
   // echo "last：" . $last->nodeValue . "<br>";
}

?>

</body>
</html>
