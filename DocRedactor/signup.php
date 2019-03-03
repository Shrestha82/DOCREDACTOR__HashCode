<?php
     include_once "connection.php";
     $first = mysqli_real_escape_string($conn,$_POST['first']);
     $last =  mysqli_real_escape_string($conn,$_POST['last']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $uid = mysqli_real_escape_string($conn,$_POST['username']);
     $add = mysqli_real_escape_string($conn,$_POST['address']);
     $phone = mysqli_real_escape_string($conn,$_POST['phone']);
     $psd = mysqli_real_escape_string($conn,$_POST['password']);
     $cpsd = mysqli_real_escape_string($conn,$_POST['cpassword']);
     $sql = "INSERT INTO USER(first,last,email,username,address,phone,password,cpassword)
            VALUES('$first','$last','$email','$uid','$add','$phone','$psd','$cpsd');";
    
     mysqli_query($conn,$sql);
        
    header("Location: login.php?registration_successfully");
?>