


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
            margin-left: 250px;
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
        <!-- Table for heading -->
        <div class="container my-5">
            <h2 class="mb-4 text-center">All Products</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SR No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <?php
                include('../database.php');

                $sr = 1;
                $ins = "SELECT * FROM `product`";
                $data = mysqli_query($con, $ins);
                $result = mysqli_num_rows($data);
                if ($result) {
                    while ($row = mysqli_fetch_array($data)) {

                ?>

                        <tbody>
                            <tr>
                                <th scope="row"><?php echo "$sr" ?></th>
                                <td><?php echo $row['pro_name'] ?></td>
                                <td><img src="<?php echo $row['pro_image']; ?>" alt="" class="" height="100px" width="100px"></td>
                                <td class="text-center"><a href="update.php?pro_id=<?php echo $row['pro_id']; ?>" class="btn btn-outline-success">Update</a></td>
                                <input type="hidden" name="pro_id" value="<?php echo $row['pro_id']; ?>">
                                <td class="text-center"><a href="delete.php?pro_id=<?php echo $row['pro_id']; ?>" class="btn btn-outline-danger">Delete</a></td>
                            </tr>
                        </tbody>
                <?php
                        $sr++;
                    }
                }
                ?>
            </table>
        </div>
    </div>























    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>