<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inlog pagina</title>
    <style>
        input {
            width : 100%;
        }
    </style>
</head>
<body>
    <h1>login</h1>
    <form action="login.php" method='post'>
    <p>gebruikersnaam</p>
    <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam / IBAN nummer">
    <p>wachtwoord</p>
    <input type="text" name="wachtwoord" placeholder="wachtwoord / pincode van je pinpas">
    <input type="submit">
    </form>
</body>
</html>