<?php
session_start();
include 'connect.php';
 
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysqli_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: dashboard.php');
        }else{
            echo "username atau password salah";
        }
    }
}
?>
 
<form action="" method="post">
<input type="text" name="username">
<input type="password" name="password">
<input type="submit" value="login">
</form>