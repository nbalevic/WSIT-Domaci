<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Prijavi se</h2>
        </div>
    </div>
    <form action="" method="POST">
    <div>
        <label for="email">Unesite email: </label>
        <input type="email" placeholder="Email" name="email" required>
    </div>
    <div>
        <label for="password">Unesite lozinku: </label>
        <input type="password" placeholder="Lozinka" name="password" min="5" required>
    </div>
    <button type="submit" name="loginUser">Log in</button>
    
    <p>Niste korisnik?<a href="registracija.php">Registruj se</a></p>
    </form>

</body>
</html>