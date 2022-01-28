<?php





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>アンケート</title>
</head>
<body>
    <div class=container>
        <h1 class=title>一番好きな言語アンケート</h1>
        <form action="write.php" method="post">
            <div class=item>
            <p class=pp>名前：</p>
            <input type="text" name="name" class=txt>
            </div>

        
            <div class=item>
            <p>email：</p>
            <input type="text" name="email" class=txt>
            </div>

            <div class=item>
            <p>住所：</p>
            <input type="text" name="address" class=txt>
            </div>

            <div class=item>
            <p>好きな言語： </p>
            <select name="like" id="" class=txt>
                <option value=""></option>
                <option value="html">html </option>
                <option value="css">css </option>
                <option value="javascript">javascript </option>
                <option value="php">php </option>
            </select>
            </div>
           

            <!-- <p>html：<input type="radio" name="aa" id=""></p>
            <p>css：<input type="radio" name="aa" id=""></p>
            <p>javascript：<input type="radio" name="aa" id=""></p>
            <p>php：<input type="radio" name="aa" id=""></p> -->


            <p><input type="submit" name="" value="送信"></p>
            </div>
    </form>
</body>
</html>