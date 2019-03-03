<?php 
  $conn = mysqli_connect('127.0.0.1','root','','redact');
  $result = mysqli_query($conn,"SELECT * FROM USER");
  $row = mysqli_fetch_assoc($result);
  $first =$row['first'];    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOCREDACTOR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="reg.css">
</head>
<body >
    
           <script>// Animations init
                new WOW().init();</script>   
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

      <header>
              <!--Navbar-->
              <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                 
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="home.html" style="font-size: 24px;">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        
                      </li>
                      
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">  
                      <li class="nav-item">                      
                      <a class="nav-link" href="#" style="font-size: 24px;"><?php echo $first ?> <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php" style="font-size: 24px;">Logout <span class="sr-only">(current)</span></a>
                        
                      </li>
                      </ul>
                    <!-- <form class="form-inline">
                      <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      </div>
                    </form> -->
                  </div>
                </div>
              </nav>
              <!-- Navbar -->
              <!-- Full Page Intro -->
              <div class="view" style="background-image: url('image/bg_1.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light align-items-center">
                  <!-- Content -->
                  <br><br><br><br><br>
                  <div class="col-lg-6 mx-auto">
                  <div class="card wow fadeInRight col-md-6 mx-auto text-center" data-wow-delay="0.3s">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-left">
                                <label class="text-white" style="font-size:20px;">Image File:</label>
                                <input type="file" class="text-warning" name="file" onclick="myFunction()"><br><br>
                                <label class="text-white" style="font-size:20px;">Text File:</label>
                                <input class="text-warning" type="file" name="file" onclick="myFunction()"><br><br>
                                
                               <a href="redact.php"> <button class="btn btn-success" id="demo" type="submit"></button></a>
                                <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Redact File";
}
</script>
                    </div>
                    </div>
                    </div>
                    </div>
</body>
</html>