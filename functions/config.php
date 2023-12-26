<?php
session_start();
$conn = mysqli_connect("localhost", "root","","responsipwd");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])) {
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

// function cek_login($username, $password){
//         if ($row["username"] == $username && $row["password"] == $password) {
//             $_SESSION['user'] = $username;
//             if ($row["cat"] == "admin") return header('Location: dashboardAdmin.php');
//             return header('Location: dashboard.php');
//         }
// }