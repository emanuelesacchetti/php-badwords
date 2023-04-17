<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad-words</title>
</head>
<body>
    <form action="badwords.php" method="GET">

        <label for="text">Testo: </label>
        <input type="text" name="paragrafo" id="text" placeholder="Inserisci il tuo testo..." />

        <label for="word">Parola da censurare: </label>
        <input type="text" name="parola" id="word" placeholder="Inserisci una parola da censurare..." />

        <button type="submit">Invia il tutto!</button>


    </form>
</body>
</html>
