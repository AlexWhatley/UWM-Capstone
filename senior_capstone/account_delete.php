<?php session_start(); 
if (empty($_SESSION['username'])){
    header("Location:login.php"); 
    $_SESSION['message'] = "<p style = \"color:red;\">Please login and try again</p>";
    exit();
}else{
    
}
?>
<!DOCTYPE html>
<html>
    <!--Started it cuz i wanted to add css -N-->
<head>
</head>
<body>
<form  action="account_hf.php" method="post">
    <p>Are you sure you want to permanaently delete your account?</p><br><br>
    <button type="submit" name="del_yes" value="Yes">Yes</button><br><br>
    <button type="submit" name="del_no" value="No">No</button>
</form>
</body>

</html>