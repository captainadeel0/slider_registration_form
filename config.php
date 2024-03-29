
<?php
// database connection
$conn = mysqli_connect("localhost", "root", "", "registration_form");
if (!$conn) {
    die("database not connected");
}




if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    if(empty($name)) {
        echo "<div class='alert alert-danger alert-dismissible'>
        <strong>Warning!</strong> Name is required.
      </div>";
      exit();
    }
 // $id = $_POST['id'];
    $mobile = $_POST['mobile'];

    $email = $_POST['email'];
     // Already exist.....
     $already_exist="SELECT email FROM users WHERE email='$email'"; 
     $result1=mysqli_query($conn,$already_exist);
     $get_num_of_rows=mysqli_num_rows($result1);
      
      if ($get_num_of_rows > 0) {
          echo "<div class='alert alert-danger alert-dismissible'>
          <strong>Warning!</strong>This Email already exists in our records. Please try again with another one.
        </div>";
        exit();
      }
      //   End of already exist
  
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = 1;
    
  
    // insert into the table
    $sql = "INSERT INTO users (`name`, `mobile`, `email`, `username`, `password`, `status`) VALUES('$name', '$mobile', '$email', '$username', '$password', '$status')";


    if(mysqli_query($conn, $sql)) {

         
        header("Location:show_data.php");

}
}













?>