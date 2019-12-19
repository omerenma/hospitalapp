

<?php
include("include/db.php");
if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $number = $_POST['number'];
    $department = $_POST['department'];
    $doctor =  $_POST['doctor'];
    $date =  $_POST['date'];
    if(empty($name) && empty($email) && empty($number) && empty($department) && empty($doctor) && empty($date)){
        echo "Please fill all fields";

    }else{

    $Insert = "INSERT INTO appointment (name, email, number, department, doctor, date) VALUES ('$name', '$email', '$number', '$department', '$doctor', '$date')";
    $Query = mysqli_query($connect, $Insert);
    }


    
}


?>

<!-- Login Modal Code -->
<?php
include('include/db.php');
if(isset($_POST['Login'])){
    $email = $_POST['modalemail'];
    $password = $_POST['modalpassword'];
    $passmd5 = md5($password);

    $Select = "SELECT * FROM register WHERE email = '$email' AND password = '$passmd5' ";
    $Query = mysqli_query($connect, $Select);
    $fetch = mysqli_fetch_array($Query);
    if($fetch['email'] == $email AND $fetch['password'] == $passmd5){
        $id = $fetch['id'];
        session_start();
        $_SESSION['id'] = $id;
        header("Location: myprofile.php");

    }else{
        echo "Wrong email and password sullpied";

    }
}

?>



<!-- Register Modal Code -->

<?php include("include/session.php"); ?>
<?php include("include/db.php"); ?>
<?php

 if(isset($_POST['Account'])){
    $name = $_POST['modalname'];
    $email = $_POST['modalEmail'];
    $password =  $_POST['ModalPassword'];
    $md5 = md5($password);


 
    if($connect && $db){

        $queryTable = "SELECT * FROM register";
         $exec = mysqli_query($connect, $queryTable);
        $data = mysqli_fetch_array($exec);
        if($data['email'] === $email){
         echo Message();
          $_SESSION["ErrorMessage"] = "User with this Email already exists";


        } 

        else{
            $Insert = "INSERT INTO register (name, email, password) VALUES('$name', '$email', '$md5')";
            $query = mysqli_query($connect, $Insert);
            if($query){
                echo Success();
                $_SESSION["SuccessMessage"] = "User successfully registered";
                header("Location: login.php");

        }else{
         echo Message();
          $_SESSION["SuccessMessage"] = "Something went wrong. Please try again";

         }
        }

        
   
    }

  
 
 }
?>
<?php  include("header.php"); ?>



<!-- End Header Top Section -->
        <div class="layer-stretch hdr-center">
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="hdr-center-logo">
                        <a href="index.html" class="d-inline-block"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-10">
                    <div class="hdr-center-submenu row pull-right">
                        <div class="col-md-auto mr-3 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <div class="tbl-cell">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="tbl-cell text-left p-0">
                                <p class="font-12 m-0 text-muted">Have a question?</p>
                                <p class="font-14 m-0">support@preciousclinics.com</p>
                            </div>
                        </div>
                        <div class="col-md-auto d-none d-sm-none d-md-block d-lg-block d-xl-block">
                            <div class="tbl-cell">
                                <i class="fa fa-mobile font-28"></i>
                            </div>
                            <div class="tbl-cell text-left p-0">
                                <p class="font-12 m-0 text-muted"> Need  a help?</p>
                                <p class="font-14 m-0">(+234)8130299583</p>
                            </div>
                        </div>
                        <div class="col-md-auto pl-3 d-none d-sm-block d-md-block d-lg-block d-xl-block">
                            <button class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect hdr-apointment"><i class="fa fa-calendar m-0 color-white"></i> Make An Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdr-center-menu">
            <div class="hdr layer-stretch">
                <div class="row align-items-center justify-content-end">
                    <!-- Start Menu Section -->
                    <ul class="col menu text-left">
                        <li>
                            <a id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home </a>
                            
                        </li>
                      
                        <li>
                            <a id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect" href="service.php">Service</a>
                            
                        </li>
                        <li class="menu-megamenu-li">
                            <a id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect" href="doctors2.php">Doctors</a>
                           
                        </li>
                    
                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect">Profile <i class="fa fa-chevron-down"></i></a>
                            <ul class="menu-dropdown">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register </a></li>
                                <li><a href="myappointment.php">My Appointment </a></li>
                                <li><a href="myrequest.php">My Request </a></li>
                                <li><a href="myprofile.php">My Profile </a></li>
                            </ul>
                        </li>
            
                        <li>
                        </li>
                        <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                    </ul><!-- End Menu Section -->
                    <div class="col-2 col-md-auto col-lg-auto">
                        <div class="mdl-button mdl-js-button mdl-button--fab hdr-search">
                            <i class="fa fa-search fa-2x color-white"></i>
                        </div>
                    </div>
                    <div id="menu-bar" class="col-2 col-md-auto"><a><i class="fa fa-bars color-white"></i></a></div>
                </div>
                <div class="search-banner animated fadeInUp">
                    <input type="text" placeholder="Search your Query ...">
                </div>
            </div>
        </div>
    </header><!-- End Header -->
    <!-- Start Slider Section -->
    <div id="slider" class="slider-height">
        <div class="flexslider slider-wrapper">
            <ul class="slides">
                <li>
                    <div class="slider-info">
                        <h2>24/7 Support Services</h2>
                        <p>We are always available to attend to your health needs</p>
                    </div>
                    <img src="./images/9.jpg"   style="width: 1920px; height: 800px; opacity:10"  alt="" />
                    <div class="slider-button slider-appointment">
                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">About Us<i class="fa fa-chevron-right"></i></a>
                    </div>
                </li>
                <li>
                    <div class="slider-info">
                        <h1 class="animated fadeInDown">Dedication</h1>
                        <p class="animated fadeInDown">We are dedicated to providing you with quality health care services</p>
                    </div>
                    <img src="./images/7.jpg" alt="" style="width: 1920px; height: 800px" />
                    <div class="slider-button slider-appointment">
                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">Make An Appointment<i class="fa fa-flag-checkered"></i></a>
                    </div>
                </li>
                <li>
                    <div class="slider-info">
                        <h2>Your Identity. Our Responsibility</h2>
                        <p>We keep your medical records secret</p>
                    </div>
                    <img src="./images/9.jpg" alt=""  style="width: 1920px; height: 800px"/>
                    <div class="slider-button slider-appointment">
                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">More Info<i class="fa fa-external-link"></i></a>
                    </div>
                </li>
              
            </ul>

        </div>
    </div><!-- End Slider Section -->
    <!-- Start Service Section -->
    <div id="hm-service" class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>What We Do</h3>
            </div>
            <div class="layer-container row">
                <div class="hm-service-left col-md-5">
                    <img src="./images/9.jpg" alt="Klinical Health care">
                </div>
                <div class="hm-service-right col-md-7">
                    <p class="paragraph-medium paragraph-black">We provide quality health care services for everyone</p>
                    <div class="hm-service">
                        <div class="hm-service-block">
                            <i class="fa fa-stethoscope"></i>
                            <span>Cardiovascular centre</span>
                        </div>
                        <div class="hm-service-block">
                            <i class="fa fa-child"></i>
                            <span>Childbirth Center</span>
                        </div>
                        <div class="hm-service-block">
                            <i class="fa fa-certificate"></i>
                            <span>Mammography</span>
                        </div>
                        <div class="hm-service-block">
                            <i class="fa fa-h-square"></i>
                            <span>Dermatologist</span>
                        </div>
                        <div class="hm-service-block">
                            <i class="fa fa-stethoscope"></i>
                            <span>Paediatrics</span>
                        </div>
                        <div class="hm-service-block">
                            <i class="fa fa-bullhorn"></i>
                            <span>Radiology Center</span>
                        </div>
                    </div>
                    <div class="hm-service-view text-center">
                        <a href="service.php" class="button-icon">
                            <span>View All Services</span>
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Service Section -->
    <!-- Start About Section -->
    <div id="hm-about" class="colored-background">
        <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl layer-ttl-white">
                    <h3>Who We Are</h3>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="hm-about-block">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
                            <div class="tbl-cell hm-about-number">
                                <span class="counter">54</span>
                                <p>Doctor(s)</p>
                            </div>
                        </div>
                        <div class="hm-about-block">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-ambulance"></i></div>
                            <div class="tbl-cell hm-about-number">
                                <span class="counter">130</span>
                                <p>Room(s)</p>
                            </div>
                        </div>
                        <div class="hm-about-block">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-calendar"></i></div>
                            <div class="tbl-cell hm-about-number">
                                <span class="counter">51</span>
                                <p>Year of Experience(s)</p>
                            </div>
                        </div>
                        <div class="hm-about-block">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-clock-o"></i></div>
                            <div class="tbl-cell hm-about-number">
                                <span class="counter">168</span>
                                <p>Opening Hours per Week</p>
                            </div>
                        </div>
                        <div class="hm-about-paragraph">
                            <p class="paragraph-medium paragraph-white">
                                <span class="theme-dropcap color-white">W</span> e are a group of health practioners who are commited to humanity.
                            </p> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img class="img-thumbnail" src="./images/1.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- End About Section -->

    <!-- Start Feature Section -->
    <div id="hm-feature" class="layer-stretch">
        <div class="layer-wrapper layer-bottom-10">
            <div class="layer-ttl">
                <h3>Why Choose Us</h3>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="hm-feature-block-1">
                        <div class="theme-img theme-img-scalerotate">
                            <img src="./images/13.jpg" height="100" alt="">
                        </div>
                        <span>Emergency Departments</span>
                        <p class="paragraph-small paragraph-black">We respond to every distress call</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="hm-feature-block-1">
                        <div class="theme-img theme-img-scalerotate">
                            <img src="./images/4.jpg" alt="">
                        </div>
                        <span>24 hour Service</span>
                        <p class="paragraph-small paragraph-black">Our doctors are on duty 24 hours</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="hm-feature-block-1">
                        <div class="theme-img theme-img-scalerotate">
                            <img src="./images/5.jpg" alt="">
                        </div>
                        <span>Advanced Technology</span>
                        <p class="paragraph-small paragraph-black">Our Hospital is equiped with modern technology</p>
                    </div>
                </div>
            
            </div>
        </div>
    </div><!-- End Feature Section -->
    <!-- Start Doctor Section -->
    <div class="colored-background">
        <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl layer-ttl-white">
                    <h3>Our Team</h3>
                </div>
                <div class="layer-container">

                    <div id="hm-doctor-slider" class="owl-carousel owl-theme theme-owl-dot">
                        <?php 
                        $TeamSelect = "SELECT * FROM doctors_details ORDER BY id desc";
                        $execute = mysqli_query($connect, $TeamSelect);
                        $fetch = mysqli_fetch_assoc($execute);
                     while($Result = mysqli_fetch_array($execute)){
                         $ResultName = $Result['name'];
                         $ResultSpecialty = $Result['specialty'];
            
                     ?>
                        <div class="hm-doctor">
                            <img class="img-responsive" src="./images/3.jpg" alt="">
                            <h6><?php echo$ResultName; ?></h6>
                            <p><?php  echo $ResultSpecialty; ?></p>
                        
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Doctor Section -->
    <!-- Start Blog Section -->
    <div id="hm-blog" class="layer-stretch">
       
        <div class="layer-wrapper layer-bottom-10">
            <div class="layer-ttl">
                <h3>Latest Posts</h3>
            </div>
            
            
                 
                <div class="row">

              
                
                     <?php
                 include("include/db.php");
                $PostSelect = "SELECT * FROM posts ";
                $execute = mysqli_query($connect, $PostSelect);
                        
                     while($Result = mysqli_fetch_array($execute)){
                         $ResultTitle = $Result['title'];
                         $ResultAuthor = $Result['author'];
                         $ResultDate = $Result['date'];
                         $ResultContent = $Result['content'];

                        ?>
                        <div class="col-md-6">
                    <div class="blog-list-block">
                        <div class="blog-list-picture">
                            <div class="theme-img theme-img-scalerotate">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="blog-list-ttl">
                            <h3><a href="#"><?php echo $ResultTitle;  ?></a></h3>
                        </div>
                        <div class="blog-list-meta">
                            <p>Posted By <?php echo $ResultAuthor; ?> On <?php echo $ResultDate; ?></p>
                        </div>  
                        <div class="blog-list-post">
                            <p class="paragraph-medium paragraph-black">
                                <span><?php echo $ResultContent;  ?> </span>
                                <a href="#">(Read More)</a>
                            </p>
                        </div>
                        
                    </div>
                  
                    
                </div>
               
                 <?php } ?>
                
            </div>
           
            
        </div>
        
    </div>
    
    <!-- End Blog Section -->
    <!-- Start Testimonial Section -->
    <div id="testimonial" class="colored-background">
        <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl layer-ttl-white">
                    <h3>What People Say</h3>
                </div>
                <div class="layer-container">
                    <div id="testimonial-slider" class="owl-carousel owl-theme theme-owl-dot">
                        <div class="testimonial-block">
                            <!-- Image should be here -->
                            <div class="paragraph-medium paragraph-white">
                                <i class="fa fa-quote-left"></i>
                                This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
                            </div>
                            <a>Reuben </a>
                        </div>
                        <div class="testimonial-block">
                            <!-- Image should be here -->
                            
                            <div class="paragraph-medium paragraph-white">
                                <i class="fa fa-quote-left"></i>
                                Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.
                            </div>
                            <a>Grace Ben</a>
                        </div>
                        <div class="testimonial-block">
                            <!-- Image should be here -->
                            <div class="paragraph-medium paragraph-white">
                                <i class="fa fa-quote-left"></i>
                                Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.
                            </div>
                            <a>Judith Gabo</a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Testimonial Section -->
    <!-- Start Emergency Section -->
    
    <?php  include("emergency.php"); ?>

    <!-- End Emergency Section -->
    <!-- Start Make an Appointment Modal -->
    <div id="appointment" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Make An Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" action="index.php">
                    <div class="modal-body">
                    <div class="appointment-error"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-user-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="appointment-name" name="name">
                                <label class="mdl-textfield__label" for="appointment-name">Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-envelope-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="appointment-email" name="email">
                                <label class="mdl-textfield__label" for="appointment-email">Email</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-phone"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="appointment-mobile" name="number">
                                <label class="mdl-textfield__label" for="appointment-mobile">Mobile Number</label>
                                <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-hospital-o"></i>
                                <select class="mdl-selectfield__select" id="appointment-department" name="department">
                                    <option value="">&nbsp;</option>
                                    <option value="Gynaecology">Gynaecology</option>
                                    <option value="Orthology">Orthology</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Anaesthesia">Anaesthesia</option>
                                    <option value="Ayurvedic">Ayurvedic</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-department">Choose Department</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-user-md"></i>
                                <select class="mdl-selectfield__select" id="appointment-doctor" name="doctor">
                                    <option value="">&nbsp;</option>
                                    <option value="Dr. Daniel Barnes">Dr. Daniel Barnes</option>
                                    <option value="Dr. Steve Soeren">Dr. Steve Soeren</option>
                                    <option value="Dr. Barbara Baker">Dr. Barbara Baker</option>
                                    <option value="Dr. Melissa Bates">Dr. Melissa Bates</option>
                                    <option value="Dr. Linda Adams">Dr. Linda Adams</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-calendar-o"></i>
                                <input class="mdl-textfield__input" type="text" id="appointment-date" onfocus="(this.type='date')" onblur="(this.type='text')" name="date">
                                <label class="mdl-textfield__label" for="appointment-date">Date</label>
                                <span class="mdl-textfield__error">Please Enter Valid Date Number!</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-lg make-appointment" name="submit">Submit</button>
                    </div>
                </div>
                    
                </form>
                
            </div>
        </div>
    </div><!-- End Make an Appointment Modal -->
    <!-- Start Login Modal -->
    <div id="loginpopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Login Now</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="index.php" method="POST">
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>    
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="loginpopup-email" name="modalemail">
                        <label class="mdl-textfield__label" for="loginpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="loginpopup-password" name="modalpassword">
                        <label class="mdl-textfield__label" for="loginpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password!</span>
                        <div class="forgot-pass">Forgot Password?</div>
                    </div>
                    
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" name="Login">Login Now</button>
                    </div>
                    <div class="or-using">Or Using</div>
                    <div class="social-login">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-google"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Don't have an account?</span>
                        <a href="#" class="">Register as New User</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div><!-- End Login Modal -->
    <!-- Start Register Modal -->
    <div id="registerpopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Register as New User</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="index.php" method="POST">
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-user-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="registerpopup-name" name="modalname">
                        <label class="mdl-textfield__label" for="registerpopup-name">Name <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="registerpopup-email" name="modalEmail">
                        <label class="mdl-textfield__label" for="registerpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="registerpopup-password" name="ModalPassword">
                        <label class="mdl-textfield__label" for="registerpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="login-condition">By clicking Creat Account you agree to our <a href="#">terms &#38; condition</a></div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" name="Account">Create Account</button>
                    </div>
                    <div class="or-using">Or Using</div>
                    <div class="social-login">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-google"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Already have an account?</span>
                        <a href="#" class="">Login Now</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div><!-- End Register Modal -->
    <!-- Fixed Appointment Button at Bottom -->
    <div id="appointment-button" class="animated fadeInUp">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Button at Bottom -->
    <!-- Start Footer Section -->
    <?php  include("footer.php");  ?>
   <!-- End of Footer Section -->

    <!-- **********Included Scripts*********** -->

    <!-- Jquery Library 2.1 JavaScript-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Popper JavaScript-->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="js/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="js/mdl-selectfield.min.js"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="js/jquery.flexslider.min.js"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="js/jquery-scrolltofixed.min.js"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="js/jquery.counterup.js"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="js/smoothscroll.min.js"></script>
    <!--Custom JavaScript for Klinik Template-->
    <script src="js/custom.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93901876-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>