<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Online Library Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('images/library.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px -80%;
            background: rgba(0, 0, 0, 0.391);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 600;
        }
        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar .nav-links li {
            margin-left: 50px;
        }
        .navbar .nav-links a {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            transition: color 0.3s;
            text-align: left;
        }
        .navbar .nav-links a:hover {
            color: #5f5847b3;
        }
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 60px;
            margin-bottom: 20px;
            color: #fff;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #ddd;
        }
        .hero .btn {
            text-decoration: none;
            background-color: #007bff;
            padding: 10px 20px;
            color: #fff;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .hero .btn:hover {
            background-color: #0056b3;
        }
        .features {
            background: rgba(0, 0, 0, 0.8);
            padding: 50px 20px;
            text-align: center;
        }
        .features h2 {
            font-size: 36px;
            color: #fff;
            margin-bottom: 30px;
        }
        .features .feature-box {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }
        .features .feature {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            color: #fff;
        }
        .features .feature i {
            font-size: 50px;
            margin-bottom: 10px;
            color: #ffb400;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Online Library</div>
        <ul class="nav-links">
            <li><a href="home.html">Home</a></li>

            <li><a href="login.php">Login</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>Welcome to the Online Library</h1>
            <p>Access thousands of books and resources at your fingertips.</p>
            <a href="register.php" class="btn">Get Started</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features">
        <h2>Our Features</h2>
        <div class="feature-box">
            <div class="feature">
                <i class="fas fa-book"></i>
                <h3>Wide Collection</h3>
                <p>Explore a wide range of books across various genres.</p>
            </div>
            <div class="feature">
                <i class="fas fa-users"></i>
                <h3>User-Friendly</h3>
                <p>Seamless experience for managing your library activities.</p>
            </div>
            <div class="feature">
                <i class="fas fa-calendar-alt"></i>
                <h3>Track Borrowing</h3>
                <p>Easily manage and track your borrowed books and due dates.</p>
            </div>
        </div>
    </div>
</body>
</html>
