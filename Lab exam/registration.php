<?php

session_start();

if(isset($_POST['Submit']))
{
    
     $_SESSION['name'] = $_POST['name'];
     $fullName = $_SESSION['name'];
     $_SESSION['email'] = $_POST['email'];
     $email = $_SESSION['email'];
     $_SESSION['userName'] = $_POST['userName'];
     $userName = $_SESSION['userName'];
     $_SESSION['password'] = $_POST['password'];
     $password = $_SESSION['password'] ;
     $_SESSION['gender'] = $_POST['gender'];
     $gender = $_SESSION['gender'];
     $_SESSION['conPassword'] = $_POST['confirmPassword'];
     $conPassword = $_SESSION['conPassword'];
     $_SESSION['date'] = $_POST['date'];
     $date = $_SESSION['date'] ;
     $_SESSION['month'] = $_POST['month'];
     $_SESSION['year'] = $_POST['year'];
    
    if(empty($fullName) || empty($email) || empty($userName) || empty($password) || empty($gender) || empty($conPassword) || empty($date))
    {
        echo "Null Feild!";
    }
    else if($password != $conPassword)
    {
        echo "Password And Confirm Password did not matched.!";
    }
    else
    {
        header('location:login.html');
    }
    
    
   
    
    
}




?>