<?php
    session_start();
    if(!isset($_SESSION['id'])){
        echo "<script>
        alert('Session Not Authorized.');
        window.location.href= 'login.php';
        </script>";
    }
?>
<?php
    include "include/connection.php";
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["selectedimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    $check = getimagesize($_FILES["selectedimage"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        echo "<script>
        alert('File Not Uploaded. Reason -  File is not an image');
        window.location.href= 'admindashboard.php';
        </script>";
      // if everything is ok, try to upload file
      } else {
        $newfilename= date('dmYHis').str_replace(basename($_FILES["selectedimage"]["name"]), "", basename($_FILES["selectedimage"]["name"]));
        $target_file = $target_dir.$newfilename.".".$imageFileType;
        if (move_uploaded_file($_FILES["selectedimage"]["tmp_name"], $target_file)) {
        } else {
            echo "<script>
            alert('File couldnot be uploaded');
            window.location.href= 'admindashboard.php';
            </script>";
        }
    }
    $alttext = $_POST['imagealt'];
    $alttext = str_replace("'", "", $alttext);
    $linktype = $_POST['linktype'];
    $link = $_POST['link'];
    $linkalt = $_POST['linkalt'];
    $query = "INSERT INTO links(imagelink, alttext, linktype, link, linktext) VALUES ('$target_file', '$alttext', '$linktype', '$link', '$linkalt')";
    $queryresult = mysqli_query($con, $query);
    header("Location: admindashboard.php");
?>
