<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Lanjutan</title>
    <style>
        *{
            font-family: Verdana,Geneva,Tahoma, san-serif;
        }
     </style>
</head>
<body>
    <?php 

   # include 'variable.php';

    $harga_baju = 24;
    $duit_bawa = 50;
    $hasil = kira($harga_baju,$duit_bawa);
    $bilangan_baju = $hasil['bilangan_baju'];
    $baki_duit = $hasil['baki_duit'];
    ?>
     Harga baju = RM <?php echo number_format($harga_baju,2); ?> <br>
     Duit yang dibawa = RM <?php echo number_format($duit_bawa,2); ?> <br>
     Bilangan baju =  <?php echo  $bilangan_baju; ?> <br>
     Harga baju = RM <?php echo number_format($baki_duit,2); ?> <br>

</body>
</html>

<?php
function kira($harga_baju,$duit_bawa) {
    $bilangan_baju = 0;
    $baki_duit = $duit_bawa;
    for($duit_bawa = 50; $duit_bawa > $harga_baju; $duit_bawa -= $harga_baju){
        $bilangan_baju++;
    }

   # $hasil = $duit_bawa - ($bilangan_baju * $harga_baju)
    $hasil=  [
        'bilangan_baju' => $bilangan_baju,
        'baki_duit' => $baki_duit ,
        ];

    return $hasil;
}