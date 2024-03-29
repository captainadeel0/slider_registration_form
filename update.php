
<?php
// database connection
include("config.php");

if($_POST['submit']) {

    if(!isset($_POST['name']) || empty($_POST['name'])) {
        die("Name filed is required");
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    
    $sql = "UPDATE students SET name='$name', mobile='$mobile', email='$email', username='$username', WHERE id=$id";

    if(mysqli_query($conn, $sql)) {

         
            header("Location:show_data.php");
        

    }

}


?>
