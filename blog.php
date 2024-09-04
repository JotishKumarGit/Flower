<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Terapia - Physical Therapy Website Template</title>
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
        <div class="container-fluid bg-breadcrumb bg-blog">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active text-primary">Blog</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->



    
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


        <?php
        
        include('footer.php');
        
        ?>