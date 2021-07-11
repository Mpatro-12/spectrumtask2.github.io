<?php 
  include 'connectdb.php';

  if(!isset($_SESSION['isLoggedin']) || !isset($_SESSION['user_id'])) {
    header("Location: index.php");
  }
  if(isset($_SESSION['user_id'])) {
    $user_query = "select * from users where id=".$_SESSION['user_id'];
    $result = mysqli_query($conn, $user_query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-trasparent sticky-top">
                <h5 class="text-white">welcome <?php if(isset($row['name'])) echo $row['name']; ?> ! </h5>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav text-center ml-lg-auto">
                  
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                      <a href="logout.php" class="nav-link text-white"><b>Logout</b></a>
                    </li>
                    
                  </ul>
                </div>
              </nav>
        </header>
     
       <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto pt-5">
                    <div class="card shadow my-5">
                        <div class="card-image-top">
                        <img src="images/profile.jpg" class="round-circle" id="img" width="200px"/>
                        </div>
                        <div class="card-body">
                          <div class="body-box">
                            <h6>Name:</h6>
                            <p><?php if(isset($row['name'])) echo $row['name']; ?></p>
                          </div>
                          <div class="body-box">
                            <h6>Email:</h6>
                            <p><?php if(isset($row['email'])) echo $row['email']; ?></p>
                          </div>
                          <div class="body-box">
                            <h6>Mobile Number:</h6>
                            <p><?php if(isset($row['mobile'])) echo $row['mobile']; ?></p>
                          </div>
                          <div class="body-box">
                            <h6>Branch:</h6>
                            <p><?php if(isset($row['branch'])) echo $row['branch']; ?></p>
                          </div>
                          <div class="body-box">
                            <h6>Year:</h6>
                            <p><?php if(isset($row['year'])) echo $row['year']; ?></p>
                          </div>
                          <div class="body-box">
                            <h6>Domain:</h6>
                            <p><?php if(isset($row['domain'])) echo $row['domain']; ?></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
    </body>
    </html>