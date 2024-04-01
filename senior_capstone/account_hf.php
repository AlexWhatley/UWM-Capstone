<?php

include('mysqli_connect.php');
if(isset($_POST['login'])){  #ACCOUNT LOGIN
    session_start();
    header("Location:login.php");
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    if(empty($username) || empty($password)){
        $_SESSION['message']="<p style =\"color:red;\">Please enter login information</p>"; 
    }else{
        $query = "SELECT username FROM users WHERE username = '$username' AND pass = SHA2('$password', 256);";
        
        $result = mysqli_query($dbc, $query);
        
        $row_count = mysqli_num_rows($result);
        
        if ($row_count == 1){
            $_SESSION['username'] = $username;
            
            $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
            
            $_SESSION['message'] = "<p style = \"color:green;\">Logged in as: " . $username . "</p>";
            if($usertoprevpage = true){
                $usertoprevpage = false;
                header("Location:event_registration.php");
                exit();
            }else{
                header("Location:login.php");
                exit();
                 #redirect to login
            }
            
        }else{
            
            $_SESSION['message'] = "<p style =\"color:red;\">No Account with those credentials</p>";
            header("Location:login.php");
            exit();
        }
    }
}

if(isset($_POST['logout'])){      #ACCOUNT LOGOUT
    session_start();
    unset($_SESSION['username']);
    
    $_SESSION['message'] = "<p style =\"color:green;\">Logged Out</p>";
    header("Location:login.php"); 
    exit();
}
if(isset($_POST['create_account'])) {  #ACCOUNT CREATION
    session_start();
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    $passverify = mysqli_real_escape_string($dbc, trim($_POST['passverify']));
    $firstname = mysqli_real_escape_string($dbc, trim(ucfirst($_POST['firstname'])));#Naming variables and escaping/triming them
    $lastname = mysqli_real_escape_string($dbc, trim(ucfirst($_POST['lastname'])));
    if($password == $passverify){
        if(!empty($username) and !empty($firstname) and !empty($lastname)){   #Checks if any of the fields are empty before running the query
            $query = "SELECT * FROM users WHERE username = '$username';";
            $result = mysqli_query($dbc, $query);  #Storing result
            $row_count = mysqli_num_rows($result);
            if($row_count == 0){
                $query = "INSERT INTO users(username, pass, firstname, lastname) Values('$username',SHA2('$password', 256),'$firstname','$lastname');";
                $result = mysqli_query($dbc, $query);  #Storing result
                $_SESSION['message']="<p style =\"text-align:center;color:green;\">Account created succesfully.<br>Please login</p>";
                header("Location:login.php");   
            }else{
                $_SESSION['message2']="<p style =\"color:red;\">Account not created, please try a different username</p>";
                header("Location:accountcreation.php");
                exit();    
            }
        }else{
            $_SESSION['message']="<p style =\"color:red;\">Account not created, please try again later</p>";
            header("Location:login.php"); 
            exit();    
        }
    }else{
        $_SESSION['message2'] = "<p style='color:red;'>Passwords did not match</p>";
        header("Location:accountcreation.php");
        exit();
    }
}

if(isset($_POST['del_yes'])){       #ACCOUNT DELETE
    session_start();
    header("Location:account_delete.php");
    $username = $_SESSION['username'];
    $query2 = "SELECT username, firstname, lastname, password FROM users WHERE username = '$username'";

    $result2 = mysqli_query($dbc, $query2);

    $row_count2 = mysqli_num_rows($result2);
     
    if ($row_count2 == 1){
        $query3 = "DELETE FROM users WHERE username= '$username'";
        $result3 = mysqli_query($dbc, $query3);
        $del = False;
        unset($_SESSION['username']);
        header("Location:login.php");
        $_SESSION['message'] = "<p style =\"color:red;\">Account Deleted</p>";
        exit();
        #redirect to homepage
    }else {
        $del = false;
        header("Location:login.php");
        echo "<p style = \"color:red;\">Please login first yes was pressed<p>";
        exit();
    }  
}elseif(isset($_POST['del_no'])){
    $del = false;
    header("Location:login.php");
    exit();
}

if(isset($_POST['pass_change'])){  #PASSWORD CHANGE
    session_start();
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    $passverify = mysqli_real_escape_string($dbc, trim($_POST['passverify']));
    $oldpassword = mysqli_real_escape_string($dbc, trim($_POST['oldpassword']));
    $username = $_SESSION['username'];
    if(!empty($password) && !empty($passverify) && !empty($oldpassword)){
        
    
        if($password == $passverify){
            $query = "UPDATE users SET pass = SHA2('$password', 256) WHERE pass = SHA2('$oldpassword', 256) AND username = '$username';";
            $result = mysqli_query($dbc, $query);  
            unset($_SESSION['username']);
            $_SESSION['message']="<p style =\"text-align:center;color:green;\">Password succesfully changed.<br>Please login</p>";
            header("Location:login.php"); 
            exit();
                
           
        }else{
            $_SESSION['message']="<p style =\"text-align:center;color:red;\">Passwords did not match</p>";
            header("Location:login.php");
            exit();
           
        }
        
    }else{
        $_SESSION['message']="<p style =\"text-align:center;color:red;\">Please try again later</p>";
        header("Location:login.php");  
    }
}
if(isset($_POST['usertoprevpage'])){
    $usertoprevpage = true;
}
if(isset($_POST['register'])){  #registering for an event NOT DONE
    session_start();
    if(!empty($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        $firstname = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
        $lastname = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
        if(!empty($firstname) && !empty($lastname)){
            $fullname = $firstname ." ". $lastname;
            $query = "UPDATE event SET registered_users = SHA2('$password', 256) WHERE pass = SHA2('$oldpassword', 256) AND username = '$username';";
            $result = mysqli_query($dbc, $query);  
            unset($_SESSION['username']);
            $_SESSION['message']="<p style =\"text-align:center;color:green;\">Password succesfully changed.<br>Please login</p>";
            header("Location:login.php"); 
            exit();
        }else{
            $_SESSION['eventregmessage']="<p style =\"text-align:center;color:red;\">Please try again later</p>";
            header("Location:login.php");  
        }
    }
    
    
}

exit();
mysqli_close($dbc);
?>