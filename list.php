<!-- 使用關連式陣列轉換成物件練習 -->
<?php
$scoreList =Array(100,50,90,95);
$viewModal = [];

foreach ($scoreList as $score )
{
    $student = (object)["score" => $score, "style" => "pass"];
    if($score <60)
    {
        $student->style = "fail";
    }
    $viewModal[] = $student;
}

//$scoreList =[100 , 90];
// $obj = (object)["firstName" => "Jermey", "lastName" => "Lin"];
// echo $obj->lastName;
// exit()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .fail
       {
         color:red;
       }
     .pass
       {
         color:black;
       }
    </style>
</head>
<body>
    <ul>
        <?php foreach($viewModal as $student) {?>
        <li class ="<?=$student->style?>"><?= $student->score?></li>
        <?php } ?>
    </ul>
    
</body>
</html>
