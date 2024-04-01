<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/accountcreation.css"> 
</head>
<body>
<div class = "header">
    <div class="account">
        <img src ="images/Gratify.png" alt="Gratify Logo">
        <form class = "accountform" action ="account_hf.php" method ="post">
            <p>To change password please enter credentials below</p><br><br>
            <input type="text" name="oldpassword" size="20" maxlength="40" placeholder = "Old Password">
            <input type="text" name="password" size="20" maxlength="40" placeholder = "New Password">
            <input type="text" name="passverify" size="20" maxlength="40" placeholder = "Retype New Password">
            <input type="submit" name="pass_change" value="Change Password">
        </form>
    </div>  
</div>
</body>

</html>