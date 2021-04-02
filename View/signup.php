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
                <input type='user_name' id='user_name' name='user_name' value='' placeholder='user name'
                    class='login-text-input login-text' required>
                <br>
                <input type='user_email' id='user_email' name='user_email' value='' placeholder='user email'
                    class='login-text-input login-text' required>
                <br>
                <input type='tel' id='phone_number' name='phone_number' value='' placeholder='phone number'
                    class='login-text-input login-text' required>
                <br>
                <input type='text' id='user_type' name='user_type' value='' placeholder='user type'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='city' name='city' value='' placeholder='city'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='country' name='country' value='' placeholder='country'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='region' name='region' value='' placeholder='region'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='password_1' name='password_1' value='' placeholder='password 1'
                    class='login-text-input login-text' required>
                <br>
                <input type='password' id='password_2' name='password_2' value='' placeholder='password 2'
                    class='login-text-input login-text' required>
                <div class='login-text-input login-signup-cont'>
                    <div class='signup-btns login-btn-div'>
                        <input type="submit" value="SignUp" class='signup-btn'>
                    </div>
                </div>
                <div class='login-text-input login-forgot-password' onclick="location.href='login.php'">
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