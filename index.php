<?php include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
    <h2 class="fs-1 text-center">Student CRUD Table</h2>
       <a class="text-decoration-none text-light btn btn-primary mb-5 mt-3" href="add.php">ADD STUDENT</a>
        <table class="table table-hover align-middle">

            <thead class="table-dark"> 
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">ROLL NO</th>
                <th scope="col">CLASS</th>
                <th scope="col">AGE</th>
                <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql= "select * from studentTable";
                    $result = mysqli_query($conn,$sql);
                     
                    if ($result) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['Id'];
                            $name = $row['name'];
                            $roll = $row['roll'];
                            $class = $row['class'];
                            $age = $row['age'];
                            echo '
                            <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$roll.'</td>
                            <td>'.$class.'</td>
                            <td>'.$age.'</td>
                            <td class= "d-flex align-items-center">
                                <a href="update.php?updateId='.$id.'" class="text-decoration-none btn btn-primary text-light" ><i class="bi bi-pencil-square"></i></a>
                                <form method="post">
                                    <button type="submit" name ="submit"  class=" btn btn-primary ms-3"> <i class="bi bi-trash"></i></button>
                                </form>
                                
                                </td>
                          </tr>
                            ';
                            if(isset($_POST['submit'])){
                                header('location:delete.php?deleteId='.$id.'');
                            }
                        }
                    }
                ?> 
            </tbody>
        </table>
    </div>
</body>
</html>
