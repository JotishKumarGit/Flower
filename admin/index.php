

<?php
session_start();

if (!isset($_SESSION["password"])) {
    header("Location:http://localhost/vizhiinter/admin/login.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px 0;
        }

        #sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        #sidebar .nav-link.active,
        #sidebar .nav-link:hover {
            background-color: #575757;
        }

        #content {
           
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 767.98px) {
            #sidebar {
                width: 100%;
                height: auto;
                position: relative;
                display: block;
            }

            #content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Side Navigation -->
    <nav id="sidebar" class="bg-dark text-white">
        <div class="container">
            <h2 class="text-center my-4">Admin Panel</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-tachometer-alt "></i> Dashboard
                    </a>
                </li>
                <li class="nav-item pt-4">
                    <a class="nav-link" href="product.php">
                        <i class="fas fa-box"></i>View Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addproduct.php">
                        <i class="fas fa-cube"></i> Add Products
                    </a>
                </li>
            
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-line"></i> Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                </li> -->
                <li class="nav-item mt-auto">
                    <a class="nav-link" href="logout.php">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="content" class="p-4">
       <?php include('addproduct.php')?>
      
    </div>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>