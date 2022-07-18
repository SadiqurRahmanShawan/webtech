<?php
    session_start();

    include "signup.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">
    <div class="sign_up_form">
        <div class="SignupContainer">
            <div style="height: 215px;" class="container_left">
                <label for="uname"><b>Username:</b> <?= $user[0] ?></label><br>
                <label for="uname"><b>Email:</b> <?= $user[1] ?></label><br>
                <label for="uname"><b>Gender:</b> <?= $user[2] ?></label><br>
                <label for="uname"><b>Contact No:</b> <?= $user[3] ?></label><br>
                <label for="uname"><b>Title:</b> <?= $user[4] ?></label><br>
                <label for="uname"><b>Address:</b> <?= $user[5] ?></label><br>
            </div>
        </div>
    </div>
</body>

</html>
<?php
    unset($_SESSION["is_uname_required"]);
    unset($_SESSION["is_email_required"]);
    unset($_SESSION["is_pass_required"]);
?>