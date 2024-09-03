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
            margin-left: 150px;
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

        /* This is for form  */
        .container {
           
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .btn {
            margin-top: 1rem;
        }

        /* Ensure image input is styled appropriately */
        .form-control-file {
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }

        /* This is for form  */
        /* General Styling */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .card {

            border-radius: 0.5rem;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-bottom: 0;
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control-file {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>

<body>
    <!-- Side Navigation -->
    <nav id="sidebar" class="bg-dark text-white" >
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


                <li class="nav-item mt-auto">
                    <a class="nav-link" href="logout.php">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

    include('../database.php');

    if (isset($_POST['btn'])) {
        $name = $_POST['pro_name'];
        $description = $_POST['decsription'];
        // 
        $image = $_FILES["pro_image"]["name"];
        $fld1 = "img/" . $image;
        // $fld2 = "upload/" . $image;
        move_uploaded_file($_FILES["pro_image"]['tmp_name'], $fld1);

       

        $ins = "INSERT INTO `product`(`pro_name`, `pro_image`, `decsription`) values('$name', '$fld1', '$description')";

        $data = mysqli_query($con, $ins);

        if ($data) {
    ?>

            <script type="text/javascript">
                alert("Data Add Successfully");
                header("location:header.php");
            </script>

        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Data Save Feilds ");
            </script>
    <?php
        }
    }
    ?>



    <!-- Main Content -->
    <div id="content" class="p-4">

        <div class="container" style=" margin-top: 50px;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h3 class="mb-0">Add Products</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="pro_name" placeholder="Enter your product name" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    <input type="file" class="form-control-file" id="image" name="pro_image" accept="image/*" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Product Content</label>
                                    <textarea type="text" class="form-control" id="name" name="decsription" placeholder="Enter your product name" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name='btn'>Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>