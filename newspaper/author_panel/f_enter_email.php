<?php include('forget_password.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Password Reset PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <form class="login-form" action="f_enter_email.php" method="post">
        <h2 class="form-title">Reset password</h2>
        <!-- form validation messages -->
        <?php include('f_messages.php'); ?>
        <div class="form-group">
            <label>Your email address</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <button type="submit" name="reset-password" class="login-btn">Submit</button>
        </div>
    </form>
</body>

</html>