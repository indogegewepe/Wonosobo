<?php
session_start();
$conn = mysqli_connect("localhost", "root","","pwd");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cocokin dengan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM customer");
    foreach ($cekdatabase as $row) :
        if ($row['username']==$username AND $row['password']==$password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['id_cust'];
            header("Location: ../index.php");
            break;
        }
        header('location: ../login.php');
    endforeach; 
}

if (isset($_POST["testimoni"])) {
    $testimoni = $_POST["inputTesti"];
    $nama = $_POST["inputNama"];
    $conn->query( "INSERT INTO testimoni VALUES (NULL, '$nama', '$testimoni');" );

    header("Location: ../index.php#testimonials");
}

if (isset($_POST["register"])) {
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn->query( "INSERT INTO customer VALUES (NULL, '$nama', '$nohp', '$email', '$username', '$password', '$alamat');");

    header("Location: ../index.php");
}

if (isset($_POST["keranjang"])) {
    $jumlah = $_POST["jumlahTiket"];
    $tanggal = $_POST["inputTanggal"];
    $idcust = $_SESSION['id'];
    $idwisata = $_POST["getIdWisata"];

    $conn->query( "INSERT INTO keranjang VALUES (NULL, '$idcust', '$idwisata', '$jumlah', '$tanggal');");

    header("Location: ../keranjang.php");
}

