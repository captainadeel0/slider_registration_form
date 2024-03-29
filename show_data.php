<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Data</title>
    <!-- bootstrp links -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- fontawesome files linked -->
    <link rel="stylesheet" href="./assets/fonts/css/all.css">
    <script src="./assets/fonts/js/all.js"></script>
</head>

<body>


    <div class="container mt-3">
        <h2 class="text-center text-white bg-primary p-2 mb-3" style="background-color: greenyellow;">Registered Candidate </h2>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>



                </tr>
            </thead>
            <tbody>
                <?php

                include("./config.php");
                $sql = "SELECT * FROM `users` ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['id'];
                        $name = $row['name'];
                        $mobile = $row['mobile'];
                        $email = $row['email'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $status = $row['status'];

                ?>

                        <tr>
                            <td><?php echo $id;  ?></td>
                            <td><?php echo $name;  ?></td>
                            <td><?php echo $mobile;  ?></td>
                            <td><?php echo $email;  ?></td>
                            <td><?php echo $username;  ?></td>
                            <td><?php echo $password;  ?></td>
                            <td><?php echo '<span class="badge bg-success text-white">Active</span>' ?></td>
                            <td>

                                <select name="action" class="form-control" onchange="location = this.value;">
                                    <option value="#" selected>--Option--</option>
                                    <option value="edit.php?id=<?php echo $id; ?>">Edit</option>
                                    <option value="delete.php?id=<?php echo $id; ?>">Delete</option>
                                    <option value="#">Active</option>
                                    <option value="#">Inactive</option>
                                </select>


                            </td>



                        </tr>




                <?php
                    }
                }
                ?>








            </tbody>
        </table>
    </div>

</body>

</html>