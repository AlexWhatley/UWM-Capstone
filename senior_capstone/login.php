<?php 
session_start(); 
if(empty($_SESSION['message'])){
    $_SESSION['message']='';
}
?>
<!DOCTYPE html>
<html>
    <!--Started it cuz i wanted to add css -N-->
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css"> <!-- Css page for the header for every page but the homepage -->
</head>
<body>
    <div class ="logo">
            <img src ="images/Gratify.png" alt="Gratify Logo" width = "100px" height= "100px">
    </div>
    <div class = "header">
        
        
                   <!--Links-->
        <div class = "links">
            <nav>
                <ul>
                    <li><a href= "homepage.php">Home</a></li>
                    <li><a href= "volunteering.php">Volunteering</a></li>
                    <li><a href= "events.php">Events</a></li>
                    <li><a href= "login.php">Login</a></li>
                    <li><a href= "aboutus.php">About Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="loginbody">
        <div class="login">
            <img src ="images/Gratify.png" alt="Gratify Logo">
            <form class = "loginform" action="account_hf.php" method="post">
                <input type="text" name="username" size="20" maxlength="40" placeholder = "Username">
                <input type="text" name="password" size="20" maxlength="40" placeholder = "Password">
                <input type="submit" name="login" value="Login">
                <input type="submit" name="logout" value="Logout">
            </form>
                <a href="accountcreation.php">Register an Account Here</a>
                <a href="account_changes.php">Change Password or Delete Account</a>
                <?php echo $_SESSION['message']; ?>
           
        </div>   
        
    </section>
    <footer>
        <img src="images/Gratify.png" alt="Gratify Logo" width="100px" height="100px">
    </footer>
</body>
</html>