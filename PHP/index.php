<?php
// Variables 
$test = "hello";
$arrayVAr = ["word1", "word2"];
$num = 45;
$float = 45.22;

$bool = true;
$cars = array(
    "Toyota",
    "Honda",
    "Ford",
    "Chevrolet",
    "BMW",
    "Mercedes-Benz"
);
echo $arrayVAr[1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exam </title>
</head>

<body>

    <ul>
        <?php
        foreach ($cars as $car) {
            echo ('<li> ' . $car . ' </li>');
        }
        ?>
    </ul>

    <h1>This is the test variable <?php echo $test ?></h1>


</body>

</html>