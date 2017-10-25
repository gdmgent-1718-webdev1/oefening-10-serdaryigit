<?php 

    $isSubmitted = isset($_REQUEST['submit']);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening 1.10 Contactformulier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    <?php if($isSubmitted): ?>
        <p>Voornaam: <?= $_POST['voornaam']; ?></p>

        <p>Achternaam: <?= $_POST['achternaam']; ?></p>

        <p>E-mail: <?= $_POST['email']; ?></p>

        <p>Wachtwoord: <?= $_POST['wachtwoord']; ?></p>

        <p>Bericht: <?= $_POST['bericht']; ?></p>

    <?php else: ?>
        <form action="" method="POST">
            <div class="form-group row">
                <label for="input-name">Voornaam:</label>
                <input class="form-control" type="text" name="voornaam">
            </div>
            <div class="form-group row">
                <label for="input-name">Achternaam:</label>
                <input class="form-control" type="text" name="achternaam">
            </div>
            <div class="form-group row">
                <label for="input-name">E-mail:</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="form-group row">
                <label for="input-name">Wachtwoord:</label>
                <input class="form-control" type="password" name="wachtwoord">
            </div>
            <div class="form-group row">
                <label for="input-name">Bericht:</label>
                <input class="form-control" type="text" name="berichten">
            </div>
            <div  class="row">
                <input type="submit" class="btn btn-primary" name="submit" value="Verzenden">
            </div>
        </form>
    <?php endif ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>