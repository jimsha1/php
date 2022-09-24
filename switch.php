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
    $favcolor="blue";
    switch($favcolor)
    {
        case "red":
            echo("color is red");
            break;
        case "green":
            echo("color is green");
            break;
        case "blue":
            echo("color is blue");
            break;
        case "yellow":
            echo("color is yellow");
            break;
        default:
             echo("color is wrong");


    }

    ?>
</body>
</html>