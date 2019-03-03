<script>
  alert("Login Successfully!");
</script>
<?php
    extract($_POST);
    $conn = mysqli_connect('127.0.0.1','root','','redact');
    $result = mysqli_query($conn,"SELECT * FROM USER");

    $flag = 0;
    for($i = 0; $i < mysqli_num_rows($result); $i++ ){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] == $username  && $row['password'] == $password){
            $flag = 1;
            break;
        }
        // elseif($row['Email']==$email && $row['password'] == $password){
        //     $flag = 1;
        //     break;
        // }
    }

    if($flag){
        session_start();
        
        
        if(isset($_SESSION["submit"])){
            $_SESSION["submit"] = $username ;
        }
        // elseif(isset($_SESSION["submit"])){
        //     $_SESSION["submit"] = $email ;
        // }

        //header("Location: ../success.php");

    }
    else{
        header("Location: unsuccess.php");
    }
    $first =$row['first'];    
    $last =$row['last'];
    $email =$row['email'];
    $phone =$row['phone'];
    $username =$row['username'];
    $add = $row['address'];
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
</head>
<body >
    
           <script>// Animations init
                new WOW().init();</script>   
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

</body>
</html><html lang="en">
        <body>
    
            <header>
              <!--Navbar-->
              <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                 
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item ">
                        <a class="nav-link" style="font-size: 24px;" href="home.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="font-size: 24px;" href="choosefile.php">Choose File <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#" style="font-size: 24px;">Reducted File <span class="sr-only">(current)</span></a>
                        
                      </li>
                     
                      <li class="nav-item">
                      <a class="nav-link" href="#" style="font-size: 24px;">Reducted Information <span class="sr-only">(current)</span></a>
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
                      </div>
                      
                    
                    </div>
                </div>
              </nav>
              <div class="view" style="background-image: url('image/bg_1.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light align-items-center">
                  <!-- Content -->
                  <br><br><br><br><br><br><br><br>
                  <div class="container">
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-12 mb-4 text-white text-center">
                        <h1 class="ml-5">Welcome <?php echo $last; ?>!</h1>
                            <h2 class="ml-5" >Your Details: </h2>
                            <p class="ml-5" style="font-size: 20px;"><?php echo "Name:   ", $first;?></p>
                            <p class="ml-5" style="font-size: 20px;"><?php echo "Surname: ", $last;?></p>
                            <p class="ml-5" style="font-size: 20px;"><?php echo "Username: ", $username;?></p>
                            <p class="ml-5" style="font-size: 20px;"><?php echo "Email: ", $email;?></p>
                            <p class="ml-5" style="font-size: 20px;"><?php echo "Address: ", $add;?></p>
                            <p class="ml-5" style="font-size: 20px;"><?php echo "Mobile No: ", $phone;?></p>
                    </div>
                </div>
            </div>
        </div>