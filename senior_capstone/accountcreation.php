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
                <input type="text" name="firstname" size="20" maxlength="40" placeholder = "First Name">
                <input type="text" name="lastname" size="20" maxlength="40" placeholder = "Last Name">
                <input type="text" name="username" size="20" maxlength="40" placeholder = "Username">
                <input type="text" name="password" size="20" maxlength="40" placeholder = "Password">
                <input type="text" name="passverify" size="20" maxlength="40" placeholder = "Retype Password">
                <input type="submit" name="create_account" value="Create Account">
                
            </form>
            <?php echo $_SESSION['message2']; 
            $_SESSION['message2']=''?>
        </div>  
    </div>
        
    

</body>
    
</html>