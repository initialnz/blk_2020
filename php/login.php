<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Sayang</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/newlogin.css">
</head>

<body>
<div class="container">
    <section class="forms-section">
        <h1 class="section-title">FC <br>Fakboy Community</h1>
        <div class="forms">
        <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
            Login
            <span class="underline"></span>
            </button>
            <form class="form form-login" action="../process/proses_login.php" method="POST">
                <fieldset>
                    <legend>Please, enter your username and password for login.</legend>
                    <div class="input-block">
                    <label for="login-username">Username</label>
                    <input id="login-username" type="text" name="uname" required>
                    </div>
                    <div class="input-block">
                    <label for="login-password">Password</label>
                    <input id="login-password" type="password" name="pass" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-login" name="login">Login</button>
            </form>
        </div>
        <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
            Sign Up
            <span class="underline"></span>
            </button>
            <form class="form form-signup" action="../process/proses_signup.php" method="POST">
                <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <div class="input-block">
                    <label for="signup-username">Username</label>
                    <input id="signup-username" type="text" name="signup-username" required>
                    </div>
                    <div class="input-block">
                    <label for="signup-password">Password</label>
                    <input id="signup-password" type="password" name="signup-password" required>
                    </div>
                    <div class="input-block">
                    <label for="signup-password-confirm">Confirm password</label>
                    <input id="signup-password-confirm" type="password" name="confirm-password" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-signup" name="continue">Continue</button>
            </form>
        </div>
    </section>
</div>

<!-- js -->
<script src="../js/newlogin.js"></script>
</body>
</html>