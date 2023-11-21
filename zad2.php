<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <div class="form">
    <form method="post">
    <label>Podaj login</label><br>
    <input id="login" type="text" name="login"><br>
    <label>Podaj hasło </label><br>


    <input id="haslo" type="password" name="haslo"><br><br>

    <button type="submit">Zaloguj</button>


    </form>
    </div>


    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
    }
    if($login === "admin" && $haslo === "test")
    {
        echo "<p>Zalogowano</p>";
    }
    else
    {
        echo "<p>Złe hasło lub login</p>";
    }
    ?>

</body>
</html>
