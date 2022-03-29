<?php
    include 'connection.php';
    if (isset($_GET['deleteId'])) {
        $id = $_GET['deleteId'];

        $sql = "delete from studentTable where Id=$id";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            // echo "Deleted";
            header('location:index.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>