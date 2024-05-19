<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="/Fmi_web_php_books/public/css/registration.css">
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form id="registrationForm" action="/Fmi_web_php_books/handlers/registrationHandler.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <div class="error" id="usernameError"></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="repeatPassword">Repeat Password</label>
                <input type="password" id="repeatPassword" name="repeatPassword" required>
                <div class="error" id="passwordError"></div>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>