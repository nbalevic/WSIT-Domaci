<?php 

session_start();

$email = "";

$errors = array();

$db = mysqli_connect('localhost','root','','dz8') or die("konekcija sa bazom je losa");

$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$passwordConfirm = mysqli_real_escape_string($db, $_POST['passwordConfirm']);
$tipKorisnika = mysqli_real_escape_string($db, $_POST['tipKorisnika']);
$pol = mysqli_real_escape_string($db, $_POST['pol']);
$brojTelefona = mysqli_real_escape_string($db, $_POST['brojTelefona']);
$adresa = mysqli_real_escape_string($db, $_POST['adresa']);

if(empty($email) ) {array_push($errors, "Email je obavezan!");}
if(empty($password)) {array_push($errors, "Lozinka je obavezna!");}
if(empty($passwordConfirm)) {array_push($errors, "Potvrda lozinke je obavezna!");}
if(empty($tipKorisnika)) {array_push($errors, "Tip korisnika je obavezan!");}
if(empty($pol)) {array_push($errors, "Pol je obavezan!");}
if($password != $passwordConfirm) {array_push($errors, "Lozinke se ne poklapaju!");}

$userCheck = "SELECT * FROM users WHERE email = '$email'";

$rez = mysqli_query($db, $userCheck);
$user = mysqli_fetch_assoc($rez);

if($user) {
    if($user['email'] === $email){array_push($errors, "Korisnik vec postoji.");}
}

if(count($errors) == 0) {
    $passwordHashed = md5($password);
    $query = "INSERT INTO users (email, password, tipKorisnika, pol, brojTelefona, adresa) VALUES ('$email', '$passwordHashed', '$tipKorisnika', '$pol', '$brojTelefona', '$adresa')";

    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "Sada ste prijavljeni!";

    header("location : korisnici.php");

}


if(isset($_POST['loginUser'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($email)) {
        array_push($errors, "Email je obavezan.");
    }
    if(empty($password)) {
        array_push($errors, "Lozinka je obavezna.");
    }

    if(count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $rez = mysqli_query($db, $query);

        if(mysqli_num_rows($results)) {

            $_SESSION['email'] = $username;
            $_SESSION['success'] = "Prijavljeni ste!";
            header("location: korisnici.php");
        }else{
            array_push($errors, "Pogresne informacije, pokusajte ponovo.");
        }
    }

}

class Domaci {
function showUsers() {
    global $conn;
    $query = "SELECT * FROM users";
    return $conn->query($query)->fetchAll();
  }

  function deleteUser() {
    global $conn;
    $userId = $_POST['user_id'];
    session_start();
    if ($userId == $_SESSION['id']) {
      header("Location: korisnici.php");
    } else {
      $query = "DELETE FROM users WHERE id = :id";
      $stmt = $conn->prepare($query);
      $stmt->bindParam(":id", $userId);
      $stmt->execute();
      header("Location: korisnici.php");
    }
  }
}



?>