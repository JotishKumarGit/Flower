<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- include header  -->
    <?php
    include("header.php");
    ?>
    <?php
    include('database.php');
$pro_id = $_GET['pro_id'];
    $ins = "SELECT * FROM `product` where `pro_id`='$pro_id'";
    // $ins = "SELECT * FROM `product`  limit 3";
    $data = mysqli_query($con, $ins);
    $result = mysqli_num_rows($data);
    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
    ?>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb bg-about">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?php  echo $row['pro_name']?></h1>
                <!-- <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol> -->
        </div>
    </div>
    <!-- Header End -->


            <!-- About Start -->
            <div class="container-fluid about bg-light py-5 animate-img">
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 wow fadeInLeft back" data-wow-delay="0.2s">
                            <div class="about-img " style="height: 500px; width: 100%;">
                                <img src="./admin/<?php echo $row['pro_image'] ?>" class="img-fluid rounded" alt="Image" style="height: 450px; width: 100%; object-fit :cover; border: 1px solid #15b9d9">
                            </div>
                        </div>
                        <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                       
                            <!-- <div class="section-title text-start mb-5">
                                <h4 class="sub-title pe-3 mb-0">About Us</h4>
                                <h3 class="display-5 mb-4">Welcome To VIZHI ENTERPRISES</h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum id natus sit quisquam. Inventore deleniti consectetur illo assumenda in rerum, eveniet dolore possimus repudiandae similique iure omnis porro id.</p>
                                <div class="mb-4">
                                    <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>I am doing Manufacturer.</p>
                                    <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>I am a supplier.</p>
                                    <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>I am services Provider.</p>
                                </div>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Enquery</a>
                            </div> -->
                            <?php echo $row['decsription'] ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <!-- About End -->

    
        <!-- This is for modal  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">WELCOME TO VIZHI ENTERPRISES
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6 my-2">
                                <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                            </div>
                            <div class="col-12  my-2">
                                <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- </button> -->


        <!-- THisi is also for modal jquery -->

        <script>
            function go() {
                var name = document.querySelector(".name").value;
                var email = document.querySelector(".email").value;
                var number = document.querySelector(".number").value;
                var url = "https://wa.me/91XXXXXX?text=" +
                    "Name: " +
                    name + " " +
                    "Number: " +
                    number + " " +
                    "Email :" + email;
                window.open(url, "_blank").focus();
            }
        </script>

    

    <!-- Footer Include -->
    <?php
    include("footer.php");
    ?>