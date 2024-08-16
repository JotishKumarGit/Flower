<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
        <div class="container-fluid bg-breadcrumb bg-contact">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


    <!-- Contact  Start -->
    <div class="container-fluid appointment py-5 bg-primary">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="">
                    <p class="fs-4 text-uppercase text-primary text-center">Get In Touch</p>
                    <h3 class="display-5 text-center">Contact If You have Any Query</h3>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start" style="border: 1px solid #15b9d9;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3885.7668510777967!2d80.22262622566632!3d13.113951211740204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo%20383%2F11B%20AMUDHAM%20STREET%2CPERIYAR%20NAGAR%20SOUTH!5e0!3m2!1sen!2sin!4v1723550738655!5m2!1sen!2sin" width="100%" height="450" style="border:0; background-size: cover; object-fit:cover;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s" >
                    <div class="appointment-form rounded p-5" style="border: 1px solid #15b9d9;">
                        <form>
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-6">
                                    <input type="text" class="form-control py-3 border-primary bg-transparent text-white" placeholder="First Name">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" class="form-control py-3 border-primary bg-transparent text-white" placeholder="Email">
                                </div>
                                <div class="col-xl-12">
                                    <input type="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Phone">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-primary bg-transparent text-white" name="text" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary text-white w-100 py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    
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




        <?php
        
        include('footer.php');
        
        ?>