<?php

if(isset($_POST['loginSubmit']))
{
    if($_POST['loginUserName'] == $_session['userName'] && $_POST['loginPassword'] == $_session['password'])
    {
        header('location:edit_profile.html');
    }
}

?>