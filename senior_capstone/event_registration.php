<?php 
session_start(); 
if(empty($_SESSION['message'])){
    $_SESSION['message']='';
}
if(empty($_SESSION['username'])){
    $fullname = "<input type=\"text\" name=\"first_name\" size=\"20\" maxlength=\"40\" placeholder = \"First Name\">
                <input type=\"text\" name=\"last_name\" size=\"20\" maxlength=\"40\" placeholder = \"Last Name\">";
    $register = "<p>Login in to see who else is volunteering at this event</p>
                <button name = \"usertoprevpage\" onclick=\"location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/login.php'\">Login</button>";
}else{
    $fullname ="";
    $register ="";
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
    <div class="registrationbody">
        <div class="registration">
            <div class = "eventinfo">
                <?php echo $eventinfo; ?>
            </div>
            <form class = "registrationform" action="account_hf.php" method="post">
                <?php echo $fullname;?>
                <input type="submit" name="register" value="Register">
                
                
                
            </form>
            <?php echo $register;?>
                
        </div>   
        
    </div>
    <footer>
        <img src="images/Gratify.png" alt="Gratify Logo" width="100px" height="100px">
    </footer>
</body>
</html>