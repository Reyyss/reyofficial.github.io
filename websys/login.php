<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cms";

    session_start();

    $data = mysqli_connect($host,$user,$password,$db);
    if($data===false)
    {
        die("connection error");
    }
    
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        $sql = "select * from login where username='" .$username. "' AND password='" .$password. "' ";
    
        $result=mysqli_query($data,$sql);
    
        $row=mysqli_fetch_array($result);
    
        if($row["usertype"]=="admin")
        {
            $_SESSION["username"]=$username;

            header("location:menu.php");
        }
    
        elseif($row["usertype"]=="user")
        {   
            $_SESSION["username"]=$username;

            echo "user";
        }
    
        else 
        {
            echo "username or password incorrect";
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <title>CMS</title>

</head>
<body>

<div class="container">
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="#" method="POST">
            <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div> 
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div> 
               <div class="remember">
                    <label><input type="checkbox"> Remember Me</label>
               </div>
               <button type="submit">Login</button>
               <div class="signUp-link">
                <p>Don't have an account? ><a href="#" class="signUpBtn-link">Sign Up</a></p>
               </div>
            </form>
        </div>

        <div class="form-wrapper sign-up">
            <form action="">
            <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div> 
               <div class="remember">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
               </div>
               <button type="submit">Sign Up</button>
               <div class="signUp-link">
                <p>Already have an account? ><a href="#" class="signInBtn-link">Sign In</a></p>
               </div>
            </form>
        </div>
    </div>
</div>

</body>

<script type="text/javascript">

        const signInBtnLink = document.querySelector('.signInBtn-link');
        const signUpBtnLink = document.querySelector('.signUpBtn-link');
        const wrapper = document.querySelector('.wrapper');

        signUpBtnLink.addEventListener('click', () => { wrapper.classList.toggle('active')});
        signInBtnLink.addEventListener('click', () => { wrapper.classList.toggle('active')});

</script>


</html>