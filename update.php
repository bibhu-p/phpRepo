<?php
    include 'connection.php';
    $id = $_GET['updateId'];
    $sql = "select * from studentTable where id=$id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $roll = $row['roll'];
    $class = $row['class'];
    $age = $row['age'];
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $class = $_POST['class'];
        $age = $_POST['age'];
        $sql = "update studentTable set name='$name',roll='$roll',class='$class',age='$age' where id=$id";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            // echo "Data inserted";
            header('location:index.php');
        }else{
            die(mysqli_error($conn));
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>UPDATE STUDENT DATA</title>
</head>
<body>
    <div class="container">
        <h2 class="fs-1 text-center">Update Student Information</h2>
        <form id="my_form" method="post" class="mt-5">
            <div class="form-group mb-3">
                <label for="name">NAME</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter Name" value = <?php echo $name ?>>
            </div>
            <div class="form-group mb-3">
                <label for="email">ROLL NO</label>
                <input type="text" class="form-control" name="roll" placeholder="Enter Roll no" value = <?php echo $roll ?>>
            </div>
            <div class="form-group mb-3">
                <label for="phoneNo">CLASS</label>
                <input type="text" class="form-control" name="class" placeholder="Enter Class" value = <?php echo $class ?>>
            </div>
            <div class="form-group mb-3">
                <label for="website">AGE</label>
                <input type="text" class="form-control" name="age" placeholder="Enter age" value = <?php echo $age ?>>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">UPDATE</button>
        </form>
    </div>
</body>
</html>