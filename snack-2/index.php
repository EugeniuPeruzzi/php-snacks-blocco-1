<?php
    $flag = false;
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['eta'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['eta'];
 


        if(strlen($name) >= 3){
            if(str_contains($email, '@') && str_contains($email , '.')){
                if(is_numeric($age)){
                    $flag = true;
                    echo 'Accesso Eseguito';
                }
                else{
                    echo "L'eta deve essere espresso in numeri";
                };
            }
            else{
                echo "L'email deve contenere @ e/o . come carrateri";
            };
        }
        else{
            echo 'Inserisci un nome con superiore a 3 carratteri';
        };

    }

?>

<!-- Con un form passare come parametri GET name, 
mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato” -->


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Snack 1</title>
</head>
<body>
    <div>
        <form action="index.php" method="GET" class="m-5" >
            <input type="text" placeholder='Inserisci il tuo nome' name="name" required class="m-3"> <br>
            <input type="text" placeholder="Inserisci la tua email" name="email" required class="m-3"> <br>
            <input type="text" placeholder="Inserisci la tua eta" name='eta' required class="m-3"> <br>
            <button class="btn btn-primary m-3">Log-in</button>
        </form>
    </div>
    



</body>
</html>