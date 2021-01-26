<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Registruj se</h2>
        </div>
    </div>
    <form action="" method="POST">

    <?php include('errors.php') ?>

    <div>
        <label for="email">Unesite email: </label>
        <input type="email" placeholder="Email" name="email" required>
    </div>
    <div>
        <label for="password">Unesite lozinku: </label>
        <input type="password" placeholder="Lozinka" name="password" min="5" required>
    </div>
    <div>
        <label for="passwordConfirm">Potvrdite lozinku: </label>
        <input type="password" placeholder="Potvrda lozinke" name="passwordConfirm" min="5" required>
    </div>
    <div>
        <label for="tipKorisnika">Tip korisnika: </label>
        <select name="tipKorisnika">
            <option value="korisnik">Korisnik</option>
            <option value="administrator">Admnistrator</option>
        </select>
    </div>
    <div>
        <label for="pol">Pol: </label>
        <select name="pol">
            <option value="M">Muski</option>
            <option value="Z">Zenski</option>
        </select>
    </div>
    <div>
        <label for="brojTelefona">Unesite broj telefona: </label>
        <input type="tel" placeholder="067-067-1111" name="brojTelefona" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
    </div>
    <div>
        <label for="adresa">Unesite adresu: </label>
        <input type="text" placeholder="Adresa" name="adresa" min="3">
    </div>
    <button type="submit" name="registracijaUser">Submit</button>
    
    <p>Vec ste regitrovani?<a href="login.php">Log in</a></p>
    </form>

</body>
</html>