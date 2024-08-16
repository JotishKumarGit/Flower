<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services</title>
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

    <?php
    include('header.php');
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb bg-service">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item active text-primary">Services</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
 


    <!-- Services Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-5 ">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Services</h1>
                <p> We offer a diverse selection of rice varieties including basmati, jasmine, and long-grain, all
                    cultivated with care to ensure exceptional taste and texture.</p>
            </div>
            <div class="row g-4 ">
                <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5  shadow-lg">
                        <img class="img-fluid mb-4" src="./img/icons8-customer-support-48.png" alt="" height="35px"
                            width="35%">

                        <h4 class="mb-3">Customer Support</h4>
                        <p class="mb-4">.Our dedicated customer support team is here to assist you with any questions or
                            concerns you may have. have inquiries about our products, or require assistance with returns
                            or exchanges.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="contact.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5  shadow-lg">
                        <img class="img-fluid mb-4" src="img/icons8-phone-60.png" alt="" height="35px" width="35%">
                        <h4 class="mb-3">Customized orders</h4>
                        <p class="mb-4">we believe in delivering products that perfectly match your unique vision. Our
                            Customized Orders service allows you to personalize our offerings to meet your specific
                            needs and preferences.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="contact.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5  shadow-lg">
                        <img class="img-fluid mb-4" src="img/icons8-delivery-tracking-66.png" alt="" height="35px"
                            width="35%">
                        <h4 class="mb-3">Prompt Delivery</h4>
                        <p class="mb-4">we understand that timely delivery is crucial to our customers. That’s why we
                            are committed to ensuring that your orders arrive swiftly and efficiently, right when you
                            need them.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="contact.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services End -->


    <?php
    
    include('footer.php');
    
    ?>