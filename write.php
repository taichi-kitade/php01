
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>
<div class=message>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$like  = $_POST['like'];

$write = $name.','.$email.','.$address.','.$like."\n";

if($name == ''){
    echo '名前が入ってないよー';
}elseif($email == ''){
    echo 'emailは適当でいいよー';
}elseif($address == ''){
    echo '住所は適当に入れましょう!';
}elseif($like == ''){
    echo '言語を選んでくれるとうれしいよーー';
}else{
    echo 'ご回答ありがとうございました!!!!!!';

    $file = fopen("./data/data.txt","a");
    fwrite($file,"$write");
    fclose($file);
}






?>

</div>


    
</body>
</html>