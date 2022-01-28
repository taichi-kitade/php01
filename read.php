<?php

// $file = fopen("./data/data.txt","r");

// while(($line = fgets($file))){
//     echo $line.'<br>';
// }

// fclose($file);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>
<div class=container>
<h1 class=title>アンケート結果</h1>


<?php

$file = fopen("./data/data.txt","r");

while(($line = fgets($file))){
    echo '<p>'.$line.'</p>'.'<br>';
}

fclose($file);
?>
</div>


</body>
</html>
