<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <div>
        <center>
            <h3>Enter correct details</h3>
        </center>
        <form action="POST">
            <center><label for="email">Email:</label></center><br>
            <center><input type="email" id="email1" placeholder="user@gmail.com" required autofocus></center><br>
            <center><label for="username">Username:</label></center><br>
            <center><input type="text" placeholder="username/email" required maxlength="8"></center><br>
            <center><label for="contact">Contact<p>(optional)</p>:</label></center><br>
            <center><input type="number" placeholder="+254 7xx xxx xxx"></center><br>
            <center><label for="password">Password:</label></center><br>
            <center><input type="password" placeholder="password" minlength="8" required></center><br>
            <center><a href="reset-password.html">Forgotten password</a>
                <button>Login</button>
            </center>
        </form>

    </div>
</body>

</html>