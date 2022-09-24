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
    $mark=100;
    switch($mark)
    {
        case $mark>=95:
            echo("distinction");
            break;
        case $mark>=85:
            echo("first class");
            break;
        case $mark>=75:
            echo("second class");
            break;
            case $mark>=65:
            echo("third class");
            break;
        default:
            echo("faild");


    }
     
    ?>
</body>
</html>