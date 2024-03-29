<?php
include("config.php");

$id = $_GET['id'];
if(!empty($id)){

$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn , $sql);

if ($row= mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $mobile = $row['mobile'];
        $email = $row['email'];
        $username = $row['username'];
        $password = $row['password'];
        $status = $row['status'];
}
    // echo "<pre>"; print_r($result); echo "</pre>";
} else {
    header( "Location:show_data.php" ) ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sliding Registration Form</title>

  <!-- CSS File Link -->
  <link rel="stylesheet" href="./assets/style.css">

  <!-- Javacript file and Library Link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="./assets/style.js"></script>

  <!-- fontawesome files link -->
  <link rel="stylesheet" href="./assets/fonts/css/all.css">
  <script src="./assets/fonts/js/all.js"></script>
  <!-- Remixicon Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<body>

  <div class="container" id="container"> 

    <!-- Sign Up Form -->
    <div class="form-container sign-up-container" >
      <form action="./config.php" method="POST">
        <h1>Sign Up</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or Use Your Email</span>
        <input type="hidden" name="id" value='<?php echo $id;?>' />
       
        <input type="text"  name="name" value='<?php echo $name;?>'  placeholder="Enter your Name"  class="form-control "  required />
        <input type="text"  name="mobile" value='<?php echo $mobile;?>' placeholder="Enter your Mobile-NO"  class="form-control "  required />
        <input type="email"  name="email" value='<?php echo $email;?>'  placeholder="Enter your Email"  class="form-control "  required />
        <input type="text"  name="username" value='<?php echo $username;?>'  placeholder="Username"  class="form-control "  required />
        <input type="password"  name="password"  value='<?php echo $password;?>' placeholder="Enter Password"  class="form-control "  required />
        <!-- <input type="submit" id="submit" class="btn btn-danger" name="submit"  value="Signup" /> -->
        <button type="submit" class="btn btn-danger" name="submit">Update</button>
      </form>
    </div>

    <!-- Sign in Form -->
    <div class="form-container sign-in-container">
      <form>
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or Use Your Account</span>
        <input type="text"  name=""  placeholder="Username"  class="form-control "  required />
        <input type="email"  name=""  placeholder="Enter email"  class="form-control "  required />
        <input type="password" placeholder="Password" required />
        <a href="#">Forgot your password?</a>
        <button>Sign In</button>
      </form>
    </div>

    <!-- Card Slider -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Explorer!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>