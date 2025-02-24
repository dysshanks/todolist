<!doctype html>
<html lang="en">
<head>
    <?php require_once "recources/views/components/head.php"; ?>
    <title>Home</title>
    <script src="public_html/js/form_switch.ts"></script>
</head>
<body id="login">
<header>
    <?php require_once "recources/views/components/header.php"; ?>
</header>
<main>
    <div class="login">
        <form action="app/Http/Controllers/Auth/logincontroller.php" method="post" id="login-form">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username" required maxlength="30" minlength="3">
            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="password" required minlength="8" maxlength="50">
            <p style="display: none">forgot password? <a href="#">reset here</a></p>
            <input type="submit" value="login">
            <p>don't have an account? <a href="#" id="reg-switch">register</a></p>
        </form>
        <form action="app/Http/Controllers/Auth/registercontroller.php" method="post" id="register-form" style="display: none;">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username" required maxlength="30" minlength="3">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="email" required>
            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="password" required minlength="8" maxlength="50">
            <input type="submit" value="register">
            <p>already have an account? <a href="#" id="log-switch">login</a></p>
        </form>
    </div>
</main>
<?php require_once "recources/views/components/footer.php"; ?>
</body>
</html>
