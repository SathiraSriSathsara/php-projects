<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acssets/css/style.css">
    <title>Login with name | Example by Sathira Sri Sathsara</title>
</head>
<body>
    <section class="container">
        <h1>Welcome  
        <?php
        // coded by Sathira Sri Sathsara
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            }

            echo $name;
        ?>
        </h1>
        <form method="post" action="auth.php">
            <img class="logo" src="acssets/img/user-solid.svg">
            <input type="text" id="username" name="username" placeholder="Username">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
        <p>Demo code by <a target="_blank" href="https://www.githib.com/SathiraSriSathsara">Sathira Sri Sathsara</a></p>
    </section>
</body>
</html>