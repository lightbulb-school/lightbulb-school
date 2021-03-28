<!DOCTYPE html>
<html lang="en">
<?php
// include('../View/head.php');
include('../View/head.php');
?>

<body>
    <div class='login-wrapper'>
        <div class='login-cont'>
            <form action="login.php">
                <div class='login-text-input logo-cont'>
                    lightbulb
                </div>
                <input type='email' id='' name='email' value='' class='login-text-input login-text' placeholder='Email'
                    required>
                <br>
                <input type='password' id='' name='password' value='' class='login-text-input login-text'
                    placeholder='Password' required>
                <div class='login-text-input login-signup-cont'>
                    <div class='login-signup-btns login-btn-div'>
                        <input type="submit" value="Login" class='login-btn'>
                    </div>

                    <div class='login-signup-btns signup-btn-div' onclick="location.href='View/signup.php'">
                        signup
                    </div>
                </div>
                <div class='login-text-input login-forgot-password' onclick="location.href='credentials.php'">
                    forgot password
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include('../Libraries/Libraries.php');
?>

</html>