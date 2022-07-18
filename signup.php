<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="BodyClass">
    <div class="SignupContainer">
   <form class="form_class" action="signup.php" method="post">
        <div class="sign_up_form">
            <div class="container">
                    <label class="cont_label" for="uname"><b>Username</b></label>
                    <input style="margin-left: 20px;" type="text" placeholder="Enter Username" name="uname">
                    <br><label for="email"><b>Email</b></label>
                    
                    <input  style="margin-left: 48px;" type="email" placeholder="Enter Email" name="email">
                    <div class="container_gender">
                        <label for="gender"><b>Gender</b></label>
                        <input style="margin-left: 36px;" type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Others">Others
                    </div>
                    <label for="contact"><b>Contact No</b></label>
                    <input style="margin-left: 12px;" type="text" placeholder="Enter contact" name="contact">
                
                    <br><label for="title"><b>Title</b></label>
                    <input style="margin-left: 58px;" type="text" placeholder="Enter title" name="title">
                    <br><label for="address"><b>Address</b></label>
                    <input style="margin-left: 34px;" type="text" placeholder="Enter address" name="address">
                    <br><label for="pass"><b>Password</b></label>
                    
                    <input style="margin-left: 24px;" type="password" placeholder="Enter Password" name="pass">
                    <br><button style="margin-left: 304px" name="btnClick" value="Submit" type="submit">SignUp</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>