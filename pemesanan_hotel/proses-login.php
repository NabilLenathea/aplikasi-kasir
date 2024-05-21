<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'koneksi.php';
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($query) > 0 ) {
        $data = mysqli_fetch_array($query);
        session_start();

        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('location:kamar/kamar.php');

    }else {
        echo "<script> 
        alert('Maaf Login gagal');
        window.location.assign('index.php');
        </script>";
    }

?>