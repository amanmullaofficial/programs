<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="process_register.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>