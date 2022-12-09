<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session PHP</title>
</head>
<body>

<!-- A session is a way to store information (in variables) to be used across multiple pages -->
<?php
// Set session variables
$_SESSION["favBike"] = "Bajaj";
$_SESSION["favAnimal"] = "dog";
echo "Session variable are set <br/>";
echo "Favorite bike is " . $_SESSION["favBike"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favAnimal"] . ". <br/>";


// remove all session variables
// session_unset();

// print_r($_SESSION);

// destroy the session
// session_destroy();
?>

</body>
</html>