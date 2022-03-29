<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $class = $_POST['class'];
        $age = $_POST['age'];

        $sql = "insert into studentTable (name, roll, class, age)
    values ('$name', '$roll', '$class', '$age')";

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
    <title>ADD STUDENT</title>
</head>
<body>
    <div class="container">
        <h2 class="fs-1 text-center">Student Information</h2>
    
        <form id="my_form" method="post" class="mt-5">
            <div class="form-group mb-3">
                <label for="name">NAME</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter Name">
            </div>
            <div class="form-group mb-3">
                <label for="email">ROLL NO</label>
                <input type="text" class="form-control" name="roll" placeholder="Enter Roll no">
            </div>
            <div class="form-group mb-3">
                <label for="phoneNo">CLASS</label>
                <input type="text" class="form-control" name="class" placeholder="Enter Class">
            </div>
            <div class="form-group mb-3">
                <label for="website">AGE</label>
                <input type="text" class="form-control" name="age" placeholder="Enter age">
            </div>

            <button class="btn btn-primary " type="submit" name="submit">Add Student</button>
        </form>
    </div>
</body>
</html>