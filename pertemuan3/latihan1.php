<?php
// pengulangan
// for
// while
// do..while
// foreach : pengulangan khusu array

// for ($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

// $i = 0;
// while( $i <5 ) {
//     echo "Hello World! <br>";
// $i++;
// }

// $i = 0;
// do {
//     echo "Hello World! <br>";
// $i++;
// } while( $i < 5);








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">

<?php for( $baris = 1; $baris <= 5; $baris++) : ?>
    <tr>
        <?php for( $kolom = 1; $kolom <= 5; $kolom++ ) : ?>
            <td><?php echo "$baris,$kolom"; ?> </td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>

</tr>
</table>




</body>
</html>