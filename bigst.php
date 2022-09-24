<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=20;
    $b=50;
    $c=15;
    if($a>$b && $a>$c)
    {
        echo "large number is".$a;
    }
    elseif($b>$c && $b>$a)
    {
        echo "large number is".$b;
    }
    else
    {
        echo "large number is" . $c;
    }
    ?>
</body>
</html>