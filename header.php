 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
         <span class="sr-only">Loading...</span>
     </div>
 </div>
 <!-- Spinner End -->


 <!-- Topbar Start -->
 <div class="container-fluid bg-dark px-5 d-none d-lg-block">
     <div class="row gx-0 align-items-center" style="height: 45px;">
         <div class="col-lg-8 text-center text-lg-start mb-lg-0">
             <div class="d-flex flex-wrap">
                 <!-- <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a> -->
                 <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+91 6382413835</a>
                 <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>velvizhienterprise@gmail.com</a>
             </div>
         </div>
         <div class="col-lg-4 text-center text-lg-end">
             <div class="d-flex align-items-center justify-content-end">
                 <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                 <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                 <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                 <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->


 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
         <a href="index.html" class="navbar-brand  "  >
         <img src="img/vizhi-logo.jpeg" alt="logo" style="" height="110px" width="100px">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="index.php" class="nav-item nav-link ">Home</a>
                 <a href="about.php" class="nav-item nav-link">About</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                     <div class="dropdown-menu m-0">
                         <?php
                            include('database.php');

                            $ins = "SELECT * FROM `product`";
                            // $ins = "SELECT * FROM `product`  limit 3";
                            $data = mysqli_query($con, $ins);
                            $result = mysqli_num_rows($data);
                            if ($result) {
                                while ($row = mysqli_fetch_array($data)) {
                            ?>
                                 <a href="single.php?pro_id=<?php echo $row['pro_id'] ?>" class="dropdown-item"><?php echo $row['pro_name'] ?></a>
                         <?php }
                            } ?>
                     </div>
                 </div>
                 <a href="service.php" class="nav-item nav-link">Services</a>
                 <a href="blog.php" class="nav-item nav-link">Blog</a>
                 <a href="contact.php" class="nav-item nav-link">Contact Us</a>
             </div>
             <!-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a> -->
         </div>
     </nav>


 </div>
 <!-- Navbar & Hero End -->