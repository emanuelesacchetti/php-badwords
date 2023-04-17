<?php
    $text = $_GET['paragrafo'];
    $badWord = $_GET['parola'];
    $replaceWord = '***';
    $newText = str_replace($badWord, $replaceWord, $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAD_WORD</title>
</head>
<body style=text-align:center>
    <h1>CENSURIAMO UNA PAROLA DEL TESTO</h1>
    <h2>Il tuo testo è: </h2>
    <p style=color:red;text-transform:uppercase><?php echo $text ?></p>
    <h5>
        ed è composto da 
        <span style=color:green><?php echo strlen($text) ?></span>
         caratteri
    </h5>

    <h2>
        Hai scelto di censurare la parola: 
        <span style=color:red;text-transform:uppercase><?php echo $badWord ?></span>
    </h2>
    <h2>ed ora il tuo testo è: </h2>
    <p><?php echo $newText ?></p>
    <h5>
        ed è composto da 
        <span style=color:green><?php echo strlen($newText) ?></span>
         caratteri
    </h5>


</body>
</html>