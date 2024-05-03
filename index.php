<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <style>
        body {font-family: arial}
    </style>
</head>
<body>
    <?php

    ?>

    <main>
        <form action="server.php" method="POST">
            <label for="">Scrivi un paragrafo:</label>
            <input type="text" id="paragrafo" name="paragrafo" placeholder="Il motto nella mia vita è..."><br>
            <label for="">Parola da censurare:</label>
            <input type="text" id="censura" name="censura" placeholder="Per favore sii scurrile"><br>
            <button type="submit">Invia</button>
        </form>
    </main>

</body>
</html>