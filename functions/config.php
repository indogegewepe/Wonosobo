<?php
session_start();
$conn = mysqli_connect("localhost", "root","","responsipwd");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cocokin dengan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM customer");
    $row = mysqli_fetch_assoc($cekdatabase);
    
    if ($row['username']==$username AND $row['password']==$password) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        header("Location: ../index.php");
        
    } else {
        header('location: ../login.php');
    }
}

if (isset($_POST["testimoni"])) {
    $id = $_SESSION["id"];
    $testimoni = $_POST["inputTesti"];
    $conn->query( "INSERT INTO testimoni VALUES(NULL, '$id', '$testimoni');" );

    header("Location: ../index.php#testimonials");
}

if (isset($_POST["register"])) {
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn->query( "INSERT INTO customer (`id_cust`, `nama`, `nohp`, `email`, `username`, `password`, `alamat`) VALUES (NULL, $nama, $nohp, $email, $username, $password, $alamat);");

    header("Location: ../index.php");
}