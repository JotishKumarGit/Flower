<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VIZHI ENTERPRISES</title>
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
    <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- include header  -->
    <?php
    include("header.php");
    ?>

    <!--  -->

    <!-- Crousel Start  -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ab-1.webp" class="d-block w-100" alt="..." height="500px" width="100%" style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="img/ab-7.jpg" class="d-block w-100" alt="..." height="500px" width="100%" style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="img/ab-9.jpg" class="d-block w-100" alt="..." height="500px" width="100%" style="object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--  Crousel end  -->



    <!-- About Start -->
    <div class="container-fluid about bg-light py-5 animate-img">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft back" data-wow-delay="0.2s">
                    <div class="about-img " style="height: 500px; width: 100%;">
                        <img src="img/about.jpg" class="img-fluid rounded" alt="Image" style="height: 450px; width: 100%; object-fit :cover; border: 1px solid #15b9d9;">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">About Us</h4>
                        <h3 class="display-5 mb-4">Welcome To VIZHI ENTERPRISES</h3>
                        <p class="mb-4"> We specialize in manufacturing a variety of flours, including idiyappam, rice, and ragi, using only locally sourced organic ingredients. Our commitment to quality ensures that each product is made from the freshest grains, directly obtained from trusted farmers. By partnering with local farmers, we support sustainable farming practices and contribute to the local economy. Our flours are not only nutritious but also rich in natural flavors, preserving the traditional essence of your favorite dishes. Choose our products for a wholesome and authentic culinary experience.</p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>I am doing Manufacturer.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>I am a supplier.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>I am services Provider.</p>
                        </div>
                        <a href="about.php" class="btn btn-primary rounded-pill text-white py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Product Start -->
    <div class="container-fluid service ">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Products</h4>
                </div>
                <h3 class="display-5 mb-4">Our Products</h3>
                <p class="mb-0">Discover the excellence of our Premium Organic Long-Grain Rice, harvested from the finest fields to deliver exceptional quality and flavor.</p>
            </div>
            <div class="row g-4 justify-content-center h-100">
                <!--  -->

                <?php
                include('database.php');

                $ins = "SELECT * FROM `product`";
                // $ins = "SELECT * FROM `product`  limit 3";
                $data = mysqli_query($con, $ins);
                $result = mysqli_num_rows($data);
                if ($result) {
                    while ($row = mysqli_fetch_array($data)) {
                ?>
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                                <div class="service-img rounded-top">
                                    <img src="<?php echo $row['pro_image'] ?>" style="object-fit: cover; border: 1px solid #15b9d9;" height="250px" width="100%" class=" rounded-top w-100" alt="">
                                </div>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <br>
                                    <div class="service-content-inner">
                                        <h5 class="mb-4 text-center"><?php echo $row['pro_name'] ?></h5>
                                        <div class="text-center">
                                            <br>
                                            <div class="display-flex" style="height: auto; width: 100%;">
                                                <span><a href="single.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2 text-center">Detail</a></span>
                                                <span><a href="" class="btn btn-primary rounded-pill text-white py-2   mb-2 text-center btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <br>
                <!-- <div class="service-content-inner">

                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Product More</a>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Product End -->




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



        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Clients Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/person.png" class="img-fluid rounded-circle"  alt="">
                            </div>
                            <p class="text-white fs-7">Using VIZHI ENTERPRISES’ Idiyappam Flour has been a game-changer in our kitchen! The quality of the flour is outstanding—fine, consistent, and perfect for making the most delicious Idiyappam. The texture is spot-on, and it cooks up beautifully every time. It’s so easy to use, saving us time while still delivering that authentic taste we love. Our family and friends are always impressed with the results, and we’re thrilled to have found a product that makes traditional cooking so effortless. Highly recommend to anyone who wants to enjoy genuine South Indian flavors at home!.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Jotish Yadav</h5>
                                <p class="mb-2 text-white-50">Bihar , India</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/person.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">The spices from VIZHI ENTERPRISES have completely transformed my cooking. The freshness and intensity of the flavors are unmatched. Each spice blend is vibrant and aromatic, adding depth to every dish. It’s like having a little bit of culinary magic in my kitchen!.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Karan Yadav</h5>
                                <p class="mb-2 text-white-50">Tamil Nadu, India</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/person.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">I’ve been using VIZHI ENTERPRISES’ spices for months now, and I’m continually impressed by their quality. The consistency is perfect, and I can always count on them to provide the same great taste with every batch. These spices are a staple in my pantry!.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Jay Karan</h5>
                                <p class="mb-2 text-white-50">Delhi, India</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                    </div>
                    <h1 class="display-5 mb-4">As summer reaches its peak, it's the perfect time to embrace the season's fresh</h1>
                    <p class="mb-0">Experience the sweet and savory combination of juicy peaches and creamy burrata cheese. Toss fresh arugula with grilled peach slices, drizzle with a balsamic reduction, and top with crumbled burrata. A sprinkle of toasted almonds adds a delightful crunch. This salad is perfect as a light lunch or a sophisticated side dish.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/idya.jpg" class="img-fluid w-100" alt="Image" style="height: 200px; width: 100%; border: 1px solid #15b9d9">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Idiyappam Flour</a>
                                <p class="my-4">We use only the finest rice to produce our Idiyappam Flour, ensuring a high-quality product that meets the highest standards.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/flour.webp" class="img-fluid w-100" alt="Image" style="height: 200px; width: 100%; border: 1px solid #15b9d9">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Fresh Flour</a>
                                <p class="my-4">Our flour is ground to order to preserve its natural freshness and flavor. Enjoy the benefits of freshly milled flour in every recipe.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/ragi.webp" class="img-fluid w-100" alt="Image" style="height: 200px; width: 100%; border: 1px solid #15b9d9">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Fresh Ragi</a>
                                <p class="my-4">Ragi is renowned for its impressive nutritional profile, including high levels of calcium, iron, dietary fiber, and essential amino acids.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


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
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
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
                                        <button  type="button" class="btn btn-primary text-white w-100 py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal" >SUBMIT NOW</button>
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
        include("footer.php");
        ?>