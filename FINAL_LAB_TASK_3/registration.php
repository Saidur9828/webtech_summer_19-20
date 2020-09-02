<?php
session_start();

    
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $UserName = $_POST["username"];
    $Password = $_POST["password"];
    $Gender = "Male";
    $User = $_POST["type"];
    
    if(empty($Name) || empty($Email)||empty($UserName)||empty($Password))
    {
        echo "Null Submission!!";
    }
    else
    {
        $connection = mysqli_connect('localhost','root','','midlabexam');
        if(!$connection)
        {
            echo "Database Connection Failed!!";
        }
        else
        {

            $sql = "INSERT INTO user (Name,Email,Username,Password,Type,Gender) VALUES ('".$Name."','".$Email."','".$UserName."','".$Password."','".User."','".$Gender."');";

            $result = mysqli_query($connection,$sql);

            if( $result == false )
            {
                echo "Data is not Inserted!";
            }
            else
            {
                echo "Data is Inserted";
            }

        }
    }


?>
