<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>array shift</h2>
<?php 
    $tims = ['erwin','heru','ali','muzakki'];
    array_shift($tims);
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
?>

    <h2>array unshift</h2>
    <?php 
    $tims = ['erwin','heru','ali','muzakki'];
    array_unshift($tims,'joko','raihan');
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
?>
</body>
</html>