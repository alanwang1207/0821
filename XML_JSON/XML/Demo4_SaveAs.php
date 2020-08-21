<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("../Desktop/employees_bak.xml");
echo "<br>-- Done --";
?>
