<?php
// Include the database connection
include('../database.php');

// Fetch existing data
if (isset($_GET['pro_id'])) {
    $id = mysqli_real_escape_string($con, $_GET['pro_id']);
    
    $sql = "SELECT * FROM `product` WHERE `pro_id` = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_array($result)) {
        $name = htmlspecialchars($row['pro_name']);
        $image = htmlspecialchars($row['pro_image']);
    } else {
        die("Record not found.");
    }

    mysqli_stmt_close($stmt);
}

// Handle form submission
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($con, $_GET['pro_id']);
    $name = mysqli_real_escape_string($con, $_POST['pro_name']);
    
    // Handle file upload
    $image = $_FILES['pro_image']['name'];
    $fld1 = "img/" . basename($image);
    
    if (move_uploaded_file($_FILES['pro_image']['tmp_name'], $fld1)) {
        if (!empty($image)) {
            $sql1 = "UPDATE `product` SET `pro_name` = ?, `pro_image` = ? WHERE `pro_id` = ?";
            $stmt1 = mysqli_prepare($con, $sql1);
            mysqli_stmt_bind_param($stmt1, 'ssi', $name, $fld1, $id);
        } else {
            $sql1 = "UPDATE `product` SET `pro_name` = ? WHERE `pro_id` = ?";
            $stmt1 = mysqli_prepare($con, $sql1);
            mysqli_stmt_bind_param($stmt1, 'si', $name, $id);
        }
        
        if (mysqli_stmt_execute($stmt1)) {
            header("Location: product.php");
            exit();
        } else {
            die("Error updating record: " . mysqli_error($con));
        }
        
        mysqli_stmt_close($stmt1);
    } else {
        die("Failed to upload image.");
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>

<body>
    <!-- <form action="" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="pro_name" value="<?php echo htmlspecialchars($name); ?>"><br>
        Image: <input type="file" name="pro_image"><br>
        <input type="submit" name="submit" value="Update">
    </form> -->
    
    <div class="container">
        <h2>Update Product</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pro_name">Name:</label>
                <input type="text" class="form-control" id="pro_name" name="pro_name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
            <div class="form-group">
                <label for="pro_image">Image:</label>
                <input type="file" class="form-control-file" id="pro_image" name="pro_image">
                <?php if (!empty($image)) { ?>
                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Current Image" class="img-thumbnail mt-3" width="150">
                <?php } ?>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <a href="product.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</body>

</html>
