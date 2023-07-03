<?php
//creo un array vuoto
$arr = [];
// faccio un controllo che fin che che l'array e inferiore a 15
while (count($arr) < 15) {
    // mi genera dei numeri casuali da 1 a 16
    $randomNumbers = rand(1,16);
    // se dentro l'array $arr la variabile randomo numbers non si ripete allora mi riempi $arr con i numeri casuali
    if(!in_array($randomNumbers, $arr)){
        $arr[] = $randomNumbers;
    }

}

?>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Snack 3</title>
</head>
<body>
<ul>
    <!-- ciclo $arr per stamparlo a schemro  -->
    <?php foreach($arr as $array) {?>
        <li>
            <?php echo $array ?>
        </li>
    <?php } ?>
</ul>

</body>
</html>