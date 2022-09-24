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
    $n=70;
    if($n>=60)
    {
        echo "grade is first division";
    }
    elseif($n>=45&&$n<=59)
    {
        echo "grade is second division";
    }
    elseif($n>=33&&$n<=44)
    {
        echo "grade is third division";
    }
    else
    {
        echo "faild";
    }
    ?>
</body>
</html>