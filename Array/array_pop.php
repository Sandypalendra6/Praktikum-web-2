<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pop</title>
</head>
<body>
    <?php 
    $tims = ['irpan','daus','arai','zaki'];
    array_pop($tims);
    foreach ($tims as $value) {
        echo $value.'<br>';
    }

    ?>
</body>
</html>