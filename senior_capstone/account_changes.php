<?php 
session_start();
if(empty($_SESSION['username'])){
    $_SESSION['message'] = "<p style =\"color:red;\">Please login and try again</p>";
    header("Location:login.php"); #redirect to login
    exit();
}else{
    
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<button onclick="location.href='pass_change.php'" type="button">Change Password</button><br><br>
<button onclick="location.href='account_delete.php'" type="button">Delete Account</button>
</form>
</body>
