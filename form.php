
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class=registration-form>
    <h1>Registration</h1>
    <form action="databases.php" method="POST">
        <p>Fullname:</p>
        <input type="text" name="fullname" placeholder="fullname">
        <p>Email:</p>
        <input type="text" name="email" placeholder="email">
        <p>Country:</p>
        <input type="text" name="country" placeholder="country">
        <p>Password:</p>
        <input type="text" name="password" placeholder="password">
        <p>Confirmpassword:</p>
        <input type="text" name="confirmpassword" placeholder="confirm password"><br><br>
        <button>Register</button>
    </form>
   </div>
</body>
</html>