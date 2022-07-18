<?php
    class Admin
    {
        public static function insert($user)
        {
            $file=fopen('../database/admins.txt', 'a');
            fwrite($file, $user);
            fclose($file);
        }
        public static function is_email_pass_matched($email, $pass)
        {
            $file=fopen('../database/admins.txt','r');
            while(!feof($file))
            {
                $data=fgets($file);
                $user=explode("|", $data);
                if($email == $user[1] && $pass == preg_replace("/\s+/", "", $user[6]))
                {
                    return 1;
                }
            }
            return 0;
        }
        public static function get_user_by_email($email)
        {
            $file=fopen('../database/admins.txt','r');
            while(!feof($file))
            {
                $data=fgets($file);
                $user=explode("|", $data);
                if($email == $user[1])
                {
                    return $user;
                }
            }
            return 0;
        }
    }
$user="";
$uname="";
$email="";
$gender="";
$contact="";
$title="";
$address="";
$profile="";

 if(isset($_POST['btnClick']) && $_POST['user']) != "" && $_POST['uname']) != "" && $_POST['email']) != "" 
     && $_POST['gender']) != "" && $_POST['contact']) != "" && $_POST['title']) != "" && $_POST['address']) != "" ){
     $user=$_POST['user'];
     $uname=$_POST['uname'];
     $email=$_POST['email'];
     $gender=$_POST['gender'];
     $contact=$_POST['contact'];
     $title=$_POST['title'];
     $address=$_POST['address'];
     
             $profile = $_POST["uname"]."|".$_POST["email"]."|".$_POST["gender"]."|".$_POST["contact"]."|".$_POST["title"]."|".$_POST["address"]."|".$_POST["pass"]."\r\n";
        Admin::insert($user);
        header("Location:login.php");
 }
else{
    echo "Fill up the form properly";
    header("Location:signup.php");
}
?>

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

                    <input style="margin-left: 48px;" type="email" placeholder="Enter Email" name="email">
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
