<?php
    session_start();
    include "signup.php";
    // validation start
    if(isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["email"]!=null && $_POST["pass"] != null)
    {
        $is_email_pass_matched = Admin::is_email_pass_matched($_POST["email"], $_POST["pass"]);
        if($is_email_pass_matched != 1)
        {
            $_SESSION["is_valid"] = 0;
        } else 
        {
            setcookie('loggedin_email', $_POST["email"], [
                'expires' => time()+3600, // 3600 sec = 1 hour
                'path' => '/',
                'domain' => '',
                'secure' => false,
                'httponly' => true, // JavaScript can not access it
                'samesite' => 'Lax',
            ]);
            header("Location:profile.php");
        }
    } else
    {
        $_SESSION["is_valid"] = 0;
    }
    if(isset($_SESSION["is_valid"]) && $_SESSION["is_valid"]==0)
    {
        header("signup.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">

    <div class="SignupContainer">
        <form class="form_class" action="login.php" method="post">
            <div class="sign_up_form">
                <div class="container">
                    <div class="container_left" style="margin: auto;float: unset;">
                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email">
                        <label for="pass"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pass">
                        <?php
                        if(isset($_SESSION["is_valid"]) && $_SESSION["is_valid"]==0)
                         echo "<span style='color:red;'>Email or Password does not match.</span>";
                    ?>
                        <button name="btnClick" value="Submit" type="submit">Login</button>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php
    unset($_SESSION["is_valid"]);
?>