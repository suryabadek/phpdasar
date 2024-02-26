<?php

$nama = "Yulianto";
$belajar="Pemograman Web.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Hello,$nama!"; ?>
    </h1>
    <p>
        <?php echo $belajar ?>
    </p>
    <p>
        Hallo nama saya <?php echo $nama ?>, Saya sedang belajar <?php echo "$belajar" ?>
    </p>
</body>
</html>