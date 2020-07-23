<?php

function NameValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        if(!isset($name))
        {
            echo "Can not be empty.";
        }
        elseif(!preg_match("/^[a-zA-Z]/",$name))
        {
            echo "it must have alphabets!";
        }
    }
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
</body>

</html>