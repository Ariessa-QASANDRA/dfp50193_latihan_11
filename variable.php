<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
    <style>
        *{
            font-family: Verdana,Geneva,Tahoma, san-serif;
        }
     </style>
</head>
<body>
    <h1> VARIABLE </h1>

    <?php
    $jab = 'Jabatan Teknologi Maklumat dan Komunikasi';
    echo tajuk();
    ?>
</body>
</html>
<?php
function tajuk(){
   global $jab 
    echo "<h1>$jab</h1>";
}