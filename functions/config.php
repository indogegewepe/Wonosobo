<?php
session_start();
$conn = mysqli_connect("localhost", "root","","responsipwd");

// function cek_login($username, $password){
//         if ($row["username"] == $username && $row["password"] == $password) {
//             $_SESSION['user'] = $username;
//             if ($row["cat"] == "admin") return header('Location: dashboardAdmin.php');
//             return header('Location: dashboard.php');
//         }
// }