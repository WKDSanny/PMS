<?php

$host="localhost";
$user="root";
$password="";
$db="example";

mysql_connect($host,$user,$password)
mysql_select_db($db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from login where username='".$uname."' 'AND Pass= '".$password."' limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " You have Successfully logged in";
        exit();
    }
    else{
        echo "you have entered incorrect password";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!---- Navbar section-->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">Employee Performance Management System</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">
                        Home
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="#login" class="navbar__links" id="Login-page">
                        Signup
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Login window -->
    <div class="main__container">
        <div class="login__Window">
    <h1>Login</h1>
    <form method="POST" action="#">
        <div class="form_input">
            <label>Username</label>
            <input type="text" name="username" placeholder=" Enter Your User Name "/>
        </div>
        <div class="form_input">
            <label>Password </label>
            <input type="passport" name="passport" placeholder=" Enter Your Password "/>
        </div>
        <button type="submit">Login</button>
    </form>
        </div>
    </div>  
    <script src="app.js"></script>
</body>
</html>