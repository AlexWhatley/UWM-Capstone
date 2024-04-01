<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css"> <!-- Css page for the header for every page but the homepage -->
    <link rel="stylesheet" href="css/filter.css">
</head>
<body>
    <!--for breaking a flexbox line
    <div class="container">
        <div class="item"></div>
        <div class="break"></div>
        <div class="item"></div>
    </div>
    -->

    <div class ="logo">
        <img src ="images/Gratify.png" alt="Gratify Logo" width="100px" height="100px">
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
<div id = "results">
    <?php echo $message ?>
</div>
</body>
</html>