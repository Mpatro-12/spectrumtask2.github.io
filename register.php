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
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>signup</title>
</head>
<body>
    <main class=" d-flex justify-content-between align-items-center">
      <div class="container p-5">
         
       <div class="row shadow-lg rows ">
       <div class="col-md-5 col-12 order-md-1 order-2 image ">
          <div class="signup_image">
          <img class="img-fluid" src="images/register.jpg">
          </div>
        </div>
          <div class="col-md-7 col-12  order-md-2 order-1 form p-5" >
              <div class="signup_container">
                  <h2 class="mb-3 text-center">Welcome to Spectrum Club</h2>
            <form method="POST">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" name="username" class="form-control form-control-sm" id="name" aria-describedby="emailHelp" required>
                
              </div>
              <div class="form-group">
                <label for="email">Email address *</label>
                <input type="email" name="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp" required>
                
              </div>
              <div class="form-group">
                <label for="mobile">Mobile Number *</label>
                <input type="number" name="mobile" class="form-control form-control-sm" id="mobile" aria-describedby="emailHelp" required>
                
              </div>
              <div class="form-group">
                <label for="branch">Branch *</label>
                <select name="branch" id="branch" class="form-control form-control-sm" required>
                  <option value="">Select</option>
                  <option value="B.Tech">B.Tech</option>
                  <option value="M.Tech">M.Tech</option>
                  <option value="M.C.A">M.C.A</option>
                  <option value="Int.M.Sc.">Int.M.Sc.</option>
                  <option value="M.Sc.">M.Sc.</option>
                </select>
              </div>
              <div class="form-group">
                <label for="year">Year *</label>
                <select name="year" id="year" class="form-control form-control-sm" required>
                  <option value="">Select</option>
                  <option value="1st">1st year</option>
                  <option value="2nd">2nd year</option>
                  <option value="3rd">3rd year</option>
                  <option value="4th">4th year</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="domain">Domain *</label>
                <input type="text" name="domain" class="form-control form-control-sm" id="domain" aria-describedby="emailHelp">
                
              </div>
              <div class="form-group">
                <label for="pass">Password *</label>
                <input type="password" name="password" minlength="4" class="form-control form-control-sm" id="pass" required>
              </div>
              <div class="form-group">
                <label for="cpass">Confirm Password *</label>
                <input type="password"name="con-password" class="form-control form-control-sm" id="cpass" required>
              </div>
              <button type="submit" name="signup" class="btn btn-primary">Signup</button>
              </form>
              <div class="bottom text-center mb-5">
                <p href="#" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2"><a href="login.php">Login</a></button></p>
            </div>
            </form>
            </div>
          </div>
       </div>
      </div>
    </main>
</body>
</html>


<?php
if(isset($_REQUEST["signup"])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = strtolower($_POST["username"]);
    $user_email =  $_POST["email"];
    $mobile =  $_POST["mobile"];
    $branch =  $_POST["branch"];
    $year =  $_POST["year"];
    $year =  $_POST["year"];
    $domain =  $_POST["domain"];
    $pass =  $_POST["password"];
    $conpass =  $_POST["con-password"];
    $pass_hash = md5($pass);

    if ($pass == $conpass) {
      $submit_form_sql = "INSERT INTO users (name, email, mobile, branch, year, domain, password) VALUES ('$user_name', '$user_email', '$mobile', '$branch', '$year', '$domain', '$pass_hash')";
      $result = mysqli_query($conn, $submit_form_sql);
      if ($result) {
          $sql = "SELECT id FROM users WHERE email='$user_email'";
          $res = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($res);
          unset($_SESSION["msg"]);
          $_SESSION["isLoggedin"] = true;
          $_SESSION['email'] = $user_email;
          $_SESSION['user_id'] = $row['id'];
          header("Location: index.php?signup=success");
          exit();
      } else {
        $_SESSION["msg"] = "Something error happened in signup.";
        $_SESSION["isLoggedin"] = false;
        header("Location: register.php?signup=failed");
        exit();
      }
    } else {
      $_SESSION["msg"] = "Password did not match!";
      $_SESSION["isLoggedin"] = false;
      header("Location: register.php?signup=failed");
      exit();
    }
  }
}

// Connection closed
  mysqli_close($conn);
?>


