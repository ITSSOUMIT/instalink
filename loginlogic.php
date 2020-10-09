<?php
    include 'include/connection.php';
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $query = "SELECT * FROM users WHERE email='$email' AND pwd='$password'";
    $queryresult = mysqli_query($con, $query);
    $array = mysqli_fetch_array($queryresult);
    if(mysqli_num_rows($queryresult)==0){
        echo "<script>
        alert('INCORRECT CREDENTIALS');
        window.location.href= 'login.php';
        </script>";
    }
    else{
        $_SESSION['id'] = $array['id'];
        header("Location: admindashboard.php");
    }
?>