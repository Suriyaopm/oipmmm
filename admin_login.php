<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Administrator Login</h2>
    <form onsubmit="return validateLogin()">
        <input type="text" id="username1" name="username1" placeholder="Username" required>
        <input type="password" id="password1" name="password1" placeholder="Password" required>
        <button type="submit" class="login-btn">Login</button>
        <p id="error-message" class="error-message">Invalid username or password</p>
    </form>
</div>

<script>
    function validateLogin() {
        const username1 = document.getElementById('username1').value;
        const password1 = document.getElementById('password1').value;

        if (username1 === 'admin' && password1 === '123') {
            window.location.href = 'admin_page.php'; // Redirect to the admin dashboard
            return false; // Prevent the form from actually submitting
        } else {
            document.getElementById('error-message').style.display = 'block'; // Show error message
            return false; // Prevent the form from submitting
        }
    }
</script>

</body>
</html>
