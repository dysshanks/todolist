<!doctype html>
<html lang="en">
<head>
    <?php require_once "recources/views/components/head.php"; ?>
    <title>Home</title>
</head>
<body id="login">
<header>
    <?php require_once "recources/views/components/header.php"; ?>
</header>
<main>
    <div class="login">
        <form action="" method="post" id="login-form">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username">
            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="login">
            <p>don't have an account? <a href="#">register</a></p>
        </form>
        <form action="" method="post" id="register-form" style="display:none">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="email">
            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="register">
            <p>already have an account? <a href="#">login</a></p>
        </form>
    </div>
</main>
<?php require_once "recources/views/components/footer.php"; ?>
</body>
</html>
