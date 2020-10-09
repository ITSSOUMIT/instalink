<?php
    session_start();
    if(!isset($_SESSION['id'])){
        echo "<script>
        alert('Session Not Authorized.');
        window.location.href= 'login.php';
        </script>";
    }
    include 'include/connection.php';
    $id = $_GET['id'];
    $query = "UPDATE links SET stat='1' WHERE id='$id'";
    $queryresult = mysqli_query($con, $query);
    header("Location: inactiveposts.php");
?>