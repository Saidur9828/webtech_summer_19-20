<?php

function NameValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        if(!isset($name))
        {
        echo "can not keep empty.";
        }
         if(!preg_match("/^[a-zA-Z]/i",$name))
        {
            echo "it must have alphabets!";
        }
                else
        {
            echo $name;
        }
    }
}

?>
<?php  
    function EmailValid()
    {

    }

?>




<html>

<head>
    <title>Form Submission</title>
</head>

<body>
    <div>
        <form method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=""></td>
                    <td><input type="submit" value="Submit">
                    <?php   NameValid();      ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
    <div>
        <form method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=""></td>
                    <td><input type="submit" value="Submit"></td>

                </tr>
            </table>
        </form>
    </div>
</body>

</html>