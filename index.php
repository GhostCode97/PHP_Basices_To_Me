<?php
if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'admin')
    {
        // open session
        session_start();
        // set session
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        // redirect to admin page
        // header('Location: admin.php');
        // set cookie
        setcookie('username', $username, time()+3600);
        setcookie('password', $password, time()+3600);
        //include 'admin.php';
        echo '<script>window.location.href = "../admin.php";</script>';
        echo 'Welcome to admin page';

    }else{
        echo 'Invalid username or password';
        // redirect to login page
        // header('Location: login.php');
        // delete cookie and session
        setcookie('username', $username, time()-3600);
        setcookie('password', $password, time()-3600);
        //session_destroy();


    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--create login form and regastration -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <legend>Login Form</legend>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required value="<?=isset($_COOKIE['username'])?$_COOKIE['username']:"username"  ?>">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required value="<?= isset($_COOKIE['password'])?$_COOKIE['password']:'' ?>">
        <br>
        <input type="submit" name="submit" value="Login">
    </fieldset>
</form>
</body>
</html>

