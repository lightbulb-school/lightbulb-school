<!DOCTYPE html>
<html lang="en">
<?php
include('../View/head.php');
?>

<body>
    <div class='login-wrapper'>
        <div class='signup-cont'>
            <form id='signup-form' method='POST' action="../lightbulb/Routes/Web.php">
                <div class='login-text-input logo-cont'>
                    lightbulb
                </div>
                <input type='text' id='first_name' name='first_name' value='' placeholder='first name'
                    class='login-text-input login-text' required>
                <br>
                <input type='text' id='last_name' name='last_name' value='' placeholder='last name'
                    class='login-text-input login-text' required>
                <br>
                <input type='email' id='user_email' name='user_email' value='' placeholder='last name'
                    class='login-text-input login-text' required>
                <br>
                <input type='tel' id='user_phone' name='user_phone' value='' placeholder='last name'
                    class='login-text-input login-text' required>
                <br>
                <input type='text' id='user_type' name='user_type' value='' placeholder='last name'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='password_1' name='password_1' value='' placeholder='new password'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='password_2' name='password_2' value='' placeholder='confirm password'
                    class='login-text-input login-text' required>

                <div class='login-text-input login-signup-cont'>
                    <div class='signup-btns login-btn-div'>
                        <input type="submit" value="SignUp" class='signup-btn'>
                    </div>
                </div>
                <div class='login-text-input login-forgot-password' onclick="location.href='View/login.php'">
                    back to login
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include('../Libraries/Libraries.php');
?>

</html>