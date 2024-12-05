<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }
        .sidebar h2 {
            text-align: center;
            padding: 20px 0;
            margin: 0;
            font-size: 20px;
        }
        .sidebar .user-profile {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #444;
            margin-bottom: 20px;
        }
        .sidebar .user-profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .sidebar .user-profile h2 {
            margin: 0;
            font-size: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #444;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .sidebar ul li a:hover {
            background-color: #007bff;
            padding-left: 20px;
            transition: 0.3s;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .main-content h1 {
            font-size: 28px;
            color: #333;
        }
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card i {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 15px;
        }
        .card h3 {
            font-size: 24px;
            margin: 10px 0;
            color: #333;
        }
        .card p {
            color: #666;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-profile">
            <img src="https://i.pinimg.com/originals/d2/91/0f/d2910fd5794ef00f0cb242a54cd04808.jpg" alt="User Profile Image"> <!-- Replace with actual image URL -->
            <h2>myles</h2> <!-- Replace with actual user's name -->
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-users"></i> Profile</a></li>
            <li><a href="viewbook.html"><i class="fas fa-book"></i> View Books</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> Book Reservations</a></li>
            <li><a href="#"><i class="fas fa-book-open"></i> Borrowed Books</a></li> <!-- Added Borrowed Books -->
            <li><a href="#"><i class="fas fa-undo"></i> Returned Books</a></li> <!-- Added Returned Books -->
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome, John Doe!</h1>
        <p>Here’s an overview of your account and actions:</p>

        <div class="dashboard-cards">
            <div class="card">
                <i class="fas fa-book"></i>
                <h3>1,234</h3>
                <p>Books Available</p>
            </div>
            <div class="card">
                <i class="fas fa-calendar-alt"></i>
                <h3>5</h3>
                <p>Books Reserved</p>
            </div>
        
            <div class="card">
                <i class="fas fa-book-open"></i>
                <h3>7</h3>
                <p>Books Borrowed</p>
            </div>
            <div class="card">
                <i class="fas fa-undo"></i>
                <h3>2</h3>
                <p>Books Returned</p>
            </div>
        </div>

        <div class="footer">
            &copy; 2024 Online Library Management System. All rights reserved.
        </div>
    </div>
</body>
</html>
