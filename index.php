<?php
// variabili
$bad_word = $_GET["badword"];
$text =  $bad_word . "!!!" . " Non ricordo dove ho parcheggiato!"; 

//  
$text = str_replace($bad_word, "*** ", $text);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    <h1><?php echo $text; ?><h1>
    <p>Il testo ha una lunghezza di <?php echo strlen($text) ?> caratteri</p>
</body>
</html>