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
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./login_page.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="container mt-3">
        <h2 class="text-center text-white bg-success p-2 mb-3">Registered Candidate </h2>

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
                            <td><?php if ($status == 1) {
                                    echo "<span class='badge bg-success'>Active</span>";
                                } else if ($status == 0) {
                                    echo "<span class='badge bg-warning'>Inactive</span>";
                                } else {
                                    echo "<span class='badge bg-danger'>removed</span>";
                                }
                                ?></td>
                                <td>

                                    <select name="action" class="form-control" onchange="location = this.value;">
                                        <option value="#" selected>--Option--</option>
                                        <option value="edit.php?id=<?php echo $id; ?>">Edit</option>
                                        <option value="delete.php?id=<?php echo $id; ?>">Delete</option>
                                        <option value="active.php">Active</option>
                                        <option value="inactive">Inactive</option>
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