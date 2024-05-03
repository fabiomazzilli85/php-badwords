<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <style>
        body {font-family: arial}
        button {background-color: coral; color: white; border: none; padding: 5px}
    </style>
</head>
<body>
    <?php

    ?>

    <main>
        <form action="server.php" method="POST">
            <textarea id="paragrafo" name="paragrafo" cols="50">Tutte le famiglie felici sono uguali, ogni famiglia infelice è infelice a modo suo.</textarea>
            <label for="">Parola da ricercare:</label>
            <input type="text" id="censura" name="censura" placeholder="Ricerca parola"><br>
            <button type="submit">Invia</button>
        </form>
    </main>

</body>
</html>