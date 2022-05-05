<!-- ## Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

<h2>Snack 4</h2>

<?php

    function arrayCreate( $min, $max, $items ) {

        $arrayRandom = [];

        while (count($arrayRandom) < $items) {
            $number_array = rand($min, $max);
            if (!in_array($number_array, $arrayRandom)) {
            $arrayRandom[] = $number_array;
            }
        }


        for ($i = 0; $i < count($arrayRandom); $i++) {
            echo "<p>" . "$arrayRandom[$i]" . "</p>";
        }

        return $arrayRandom;
    }
    
    arrayCreate(1, 100, 15); 
?>

</body>
</html>