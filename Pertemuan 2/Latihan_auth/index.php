<?php
session_start();
//Membuat database / isikan dengan nama kamu
$database = [
    'username' => 'nathan',
    'password' => 'open 123'
];

//cek apakah terdapat submit yang dilakukan 
if(isset($_POST['submit'])){
    //mengambil nilai yang dikirim melalui method phost ke dalam variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mengecek apakah username dan password sesuai dengan database
    if ($username == $database['username'] && $password == $database['password']) {
        // set session username
        $_SESSION['username'] = $username;
        // redirrect/mengarahkan menuju halaman admin
        header("Location:admin.php");
    } else {
        // memunculkan pemberitahuan gagal login dan redirrect ke login page
        echo '<script> alert("Username atau password salah!");
        window.location="login-page.php"; </script>';
    }
} else {
    // jika tidak ada submit mengembalikan ke login-page
    echo '<script> window.location="login-page.php" </script>';
}
?>