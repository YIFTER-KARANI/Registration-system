<?php
include 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
        .welcome {
            color: #333;
            margin-bottom: 20px;
        }
        .content {
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Home Page</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
        
        <div class="welcome">
            <h3>Hello, <?php echo htmlspecialchars($username); ?>!</h3>
        </div>
        
        <div class="content">
            <p>Welcome to your dashboard. You have successfully logged into the system.</p>
            
            <h4>Simple Text Content:</h4>
            <p>This is a simple registration and login system built with PHP and MySQL. The system includes:</p>
            
            <ul>
                <li>User registration with username, email, phone, and password</li>
                <li>Secure login using email and password</li>
                <li>Password hashing for security</li>
                <li>Session management</li>
                <li>Logout functionality</li>
            </ul>
            
            <p>You can customize this home page to add more functionality as needed for your application.</p>
            
            <p>Thank you for using our registration system!</p>
        </div>
    </div>
</body>
</html>
