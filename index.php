<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="completeModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="staticBackdropLabel">AutoHealth</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="insert.php" method="post">

                    <div class="modal-body " id="myform">
                        <div class="mb-3">
                            <label for="completeName" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder=" Enter  Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="completeName" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" Enter Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="completeName" class="form-label">Mobile</label>
                            <input type="number" class="form-control" placeholder=" Enter Mobile Number" name="number">
                        </div>
                        <div class="mb-3">
                            <label for="completeName" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder=" Enter Address" name="address">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Submit</button>
                        <button type="button" class="btn btn-primary ">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <h1 class="text-center">PHP CRUD Operation</h1>
        <button type="button" class="btn btn-dark my-4 px-4 " data-bs-toggle="modal" data-bs-target="#completeModel">
            Add new Users
        </button>
        <div id="displaydatatable"> </div>
    </div>

    <?php

include 'connect.php';
$sql = "select * from info";
$result = mysqli_query($conn, $sql);
?>
<table class="table caption-top btn-primary  ">
    <caption>List of users</caption>
    <thead class=""> 
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile</th>
            <th scope="col">Operation</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $address = $row['address'];
        ?>
            <tr>
                <td scope="row"><?php echo $id  ?>
                <td><?php echo $name ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $mobile ?></td>
                <td><?php echo $address ?></td>
                <td>

              <div class="h-50 d-flex align-item">
              <form action="delete.php" method="Post">
                      <input type="hidden" name="id" value="<?php echo$row['id']?>"> 
                      <a href="delete.php?id=<?php echo $id ?>" class="btn btn-primary">Edite</a>
                    </form>

                    <form action="delete.php" method="Post">
                      <input type="hidden" name="id" value="<?php echo$row['id']?>"> 
                      <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                    
                    </form>
                    </div>
                </td>
            </tr>
            <?php
}
        ?>
    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
