<?php
  include 'connectdb.php';

  if(isset($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] == true) {
    header("Location: index.php");
  }
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    echo '<hr />';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <title>Log In</title>
</head>
<body>
  <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3">  </div>
                        <h3 class="mb-5 text-center heading">Login</h3>
                        <form method="POST">
                          <div class="form-group"> <label for="email" class="form-control-label text-muted">Email</label> <input type="email" id="email" name="email" class="form-control"> </div>
                          <div class="form-group"> <label for="pass" class="form-control-label text-muted">Password</label> <input type="password" id="pass" name="password" class="form-control"> </div>
                          <div class="row justify-content-center my-3 px-3"> <button type="submit" name="login" class="btn-block btn-color">Login to Spectrum</button>
                        </form> </div>
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2"><a href="register.php">Signup</a></button></p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">Welcome to our Spectrum.....</h3> <h4 class="text-white">Please Log in to Your account.</h4>
                     <!--<img src="log in.jpg" width="350px" height="500px"/>-->
                  </div>
            </div>
        </div>
    </div>
</div>
 <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
</body>
</html>


<?php
if(isset($_REQUEST['login'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST["email"];
    $pass = $_POST["password"];
    $pass_hash = md5($pass);

    $sql = "select * from users where email='$user_email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($pass_hash == $row["password"]) {
          $_SESSION["isLoggedin"] = true;
          $_SESSION['email'] = $row["email"];
          $_SESSION["user_id"] = $row["id"];
          unset($_SESSION["msg"]);
          header("Location: index.php?login=success");
          exit();
        } else {
          $_SESSION["msg"] = "Incorrect username or password.";
          $_SESSION["isLoggedin"] = false;
          header("Location: login.php?login=failed");
          exit();
        }
      } else {
        $_SESSION["msg"] = "No user found with this email.";
        $_SESSION["isLoggedin"] = false;
        header("Location: login.php?login=failed");
        exit();
      }
    } else {
      $_SESSION["msg"] = "Error in login.";
      $_SESSION["isLoggedin"] = false;
      header("Location: login.php?login=failed");
      exit();
    }
  }
}

// Connection closed
  mysqli_close($conn);
?>