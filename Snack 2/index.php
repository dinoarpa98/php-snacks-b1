<!-- /*## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>

<h2>Snack 2</h2>

<div>
    <h4>ACCEDI</h4>
    <form method="GET">
        <input type="text" name="name" placeholder="nome">
        <input type="text" name="mail" placeholder="mail">
        <input type="text" name="age" placeholder="età">
        <button type="submit">Invia</button>
    </form>
</div>

    <?php

        $name = isset( $_GET['name'] ) ? $_GET['name'] : '';
        $mail = isset( $_GET['mail'] ) ? $_GET['mail'] : '';
        $age = isset( $_GET['age'] ) ? $_GET['age'] : '';

        $nameCheck = false;
        if (strlen($name) > 3) {
            $nameCheck = true;
        };

        $mailCheck = false;
        if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
            $mailCheck = true;
        };

        $ageCheck = false;
        if (is_numeric($age)) {
            $ageCheck = true;
        };

        if ($nameCheck === true && $mailCheck === true && $ageCheck === true) {
            echo "<p>Accesso Riuscito</p>";
        } else {
            echo "<p>Accesso Negato</p>";
        }        
    ?>
    
</body>
</html>