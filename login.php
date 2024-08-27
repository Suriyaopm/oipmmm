<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Question Builder Application - Login</title>
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
        .role-btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .role-btn:hover {
            background-color: #dcdcdc;
        }
        .admin {
            background-color: #007bff;
            color: white;
        }
        .trainer {
            background-color: #28a745;
            color: white;
        }
        .employee {
            background-color: #ffc107;
            color: white;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login as:</h2>
    <button class="role-btn admin" onclick="window.location.href='admin_login.php'">Administrator</button>
    <button class="role-btn trainer" onclick="window.location.href='trainer_login.php'">Trainer</button>
    <button class="role-btn employee" onclick="window.location.href='employee_login.php'">Employee</button>
</div>

</body>
</html>
