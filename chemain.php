<?php require_once("donnee.php"); 
    require_once("reference.php");
    $inscrits=find_inscription($inscriptions);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>projet1</title>
</head>
<body>
    <?php require_once("liste.inscript.html.php") ?>
</body>
</html>