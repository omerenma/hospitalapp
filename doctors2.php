
<?php
session_start();
$user_id = '';

include("include/db.php");

$Select = "SELECT * FROM doctors_details WHERE id = 1 ";
$Select2 = "SELECT * FROM doctors_details WHERE id = 2";
$Select3 = "SELECT * FROM doctors_details WHERE id = 3";


$Query = mysqli_query($connect, $Select);

$Query2 = mysqli_query($connect, $Select2);
$Query3 = mysqli_query($connect, $Select3);

$result = mysqli_fetch_array($Query);
$result2 = mysqli_fetch_array($Query2);
$result3 = mysqli_fetch_array($Query3);










?>









<?php include("header.php");  ?>

<!-- End Main Header Section -->
    </header><!-- End Header -->
    <!-- Start Page Title Section -->
    <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Doctors</h1>
                <p><a href="index.php">Home</a> &#8594; <span>Doctors</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <div id="doctor-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
           
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="uploads/doctor-1.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a> <?php echo $result['name'];  ?></a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p><?php echo $result['specialty'];  ?></p>
                            </div>
                            <div class="doctor-details-extra">
                                <p><i class="fa fa-shield"></i><?php echo $result['position'];  ?></p>
                                <p><i class="fa fa-mortar-board"></i><?php echo $result['certification'];  ?></p>
                                <p><i class="fa fa-trophy"></i>Awards: <?php echo $result['awards'];  ?></p>
                                <p><i class="fa fa-star"></i>Experience: <?php echo $result['years_of_experience'];  ?></p>
                            </div>
                        </div>
                        <div class="doctor-social">
                            <ul class="social-list social-list-bordered social-list-rounded">
                                <li><a href="<?php echo $result['facebook']; ?>" target="_blank" class="fa fa-facebook"></a></li>
                                <li><a href="<?php echo $result['twitter']; ?>" target="_blank" class="fa fa-twitter"></a></li>
                                <li><a href="<?php echo $result['google']; ?>" target="_blank" class="fa fa-google"></a></li>
                                <li><a href="<?php echo $result['instagram']; ?>" target="_blank" class="fa fa-instagram"></a></li>
                                <li><a href="<?php echo $result['linkedin']; ?>" target="_blank" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="uploads/doctor-2.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a><?php echo $result2['name']; ?></a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p><?php echo $result2['specialty']; ?></p>
                            </div>
                            <div class="doctor-details-extra">
                                <p><i class="fa fa-shield"></i><?php echo $result2['position']; ?></p>
                                <p><i class="fa fa-mortar-board"></i><?php echo $result2['certification']; ?></p>
                                <p><i class="fa fa-trophy"></i>Awards: <?php echo $result2['awards']; ?></p>
                                <p><i class="fa fa-star"></i>Experience: <?php echo $result2['years_of_experience']; ?></p>
                            </div>
                        </div>
                        <div class="doctor-social">
                            <ul class="social-list social-list-bordered social-list-rounded">
                                <li><a href="<?php echo $result2['facebook']; ?>" target="_blank" class="fa fa-facebook"></a></li>
                                <li><a href="<?php echo $result2['twitter']; ?>" target="_blank" class="fa fa-twitter"></a></li>
                                <li><a href="<?php echo $result2['google']; ?>" target="_blank" class="fa fa-google"></a></li>
                                <li><a href="<?php echo $result2['instagram']; ?>" target="_blank" class="fa fa-instagram"></a></li>
                                <li><a href="<?php echo $result2['linkedin']; ?>" target="_blank" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="uploads/doctor-3.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a><?php echo $result3['name']; ?></a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p><?php echo $result3['specialty']; ?></p>
                            </div>
                            <div class="doctor-details-extra">
                                <p><i class="fa fa-shield"></i><?php echo $result3['position']; ?></p>
                                <p><i class="fa fa-mortar-board"></i><?php echo $result3['certification']; ?></p>
                                <p><i class="fa fa-trophy"></i>Awards: <?php echo $result3['awards']; ?></p>
                                <p><i class="fa fa-star"></i>Experience: <?php echo $result3['years_of_experience']; ?></p>
                            </div>
                        </div>
                        <div class="doctor-social">
                            <ul class="social-list social-list-bordered social-list-rounded">
                                <li><a href="<?php echo $result3['facebook']; ?>" target="_blank" class="fa fa-facebook"></a></li>
                                <li><a href="<?php echo $result3['twitter']; ?>" target="_blank" class="fa fa-twitter"></a></li>
                                <li><a href="<?php echo $result3['google']; ?>" target="_blank" class="fa fa-google"></a></li>
                                <li><a href="<?php echo $result3['instagram']; ?>" target="_blank" class="fa fa-instagram"></a></li>
                                <li><a href="<?php echo $result3['linkedin']; ?>" target="_blank" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- 
            <ul class="theme-pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
            </ul> -->
        </div>
    </div><!-- End Doctor List Section -->
    <!-- Start Department List Section -->
    <div class="parallax-background parallax-background-2">
        <div class="layer-stretch">
            <div class="layer-wrapper layer-bottom-10">
                <div class="layer-ttl layer-ttl-white">
                    <h3>Our Department </h3>
                </div>
                <div class="row">
                     <?php
                        $ReviewSelect = "SELECT * FROM dept ";
                        $execute = mysqli_query($connect, $ReviewSelect);
                        
                     while($Result = mysqli_fetch_array($execute)){
                         $ResultName = $Result['name'];
                         $ResultDesc = $Result['description'];
                         
                     
                     ?>
                    <div class="col-md-4">
                        <div class="department-block">
                            <div class="tbl-cell department-icon"><i class="fa fa-female"></i></div>
                            <div class="tbl-cell department-detail">
                                <h5><?php echo $ResultName; ?></h5>
                                <p class="paragraph-small paragraph-white"><?php  echo $ResultDesc; ?></p>
                            </div>
                        </div>
                    </div>
                  
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><!-- End Department List Section -->
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
                <div class="modal-body">
                    <div class="appointment-error"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-user-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="appointment-name">
                                <label class="mdl-textfield__label" for="appointment-name">Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-envelope-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="appointment-email">
                                <label class="mdl-textfield__label" for="appointment-email">Email</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-phone"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="appointment-mobile">
                                <label class="mdl-textfield__label" for="appointment-mobile">Mobile Number</label>
                                <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-hospital-o"></i>
                                <select class="mdl-selectfield__select" id="appointment-department">
                                    <option value="">&nbsp;</option>
                                    <option value="1">Gynaecology</option>
                                    <option value="2">Orthology</option>
                                    <option value="3">Dermatologist</option>
                                    <option value="4">Anaesthesia</option>
                                    <option value="5">Ayurvedic</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-department">Choose Department</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-user-md"></i>
                                <select class="mdl-selectfield__select" id="appointment-doctor">
                                    <option value="">&nbsp;</option>
                                    <option value="1">Dr. Daniel Barnes</option>
                                    <option value="2">Dr. Steve Soeren</option>
                                    <option value="3">Dr. Barbara Baker</option>
                                    <option value="4">Dr. Melissa Bates</option>
                                    <option value="5">Dr. Linda Adams</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-calendar-o"></i>
                                <input class="mdl-textfield__input" type="text" id="appointment-date" onfocus="(this.type='date')" onblur="(this.type='text')">
                                <label class="mdl-textfield__label" for="appointment-date">Date</label>
                                <span class="mdl-textfield__error">Please Enter Valid Date Number!</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-lg make-appointment">Submit</button>
                    </div>
                </div>
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
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>    
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="loginpopup-email">
                        <label class="mdl-textfield__label" for="loginpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="loginpopup-password">
                        <label class="mdl-textfield__label" for="loginpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password!</span>
                        <div class="forgot-pass">Forgot Password?</div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
                        <i class="fa fa-question"></i>
                        <input class="mdl-textfield__input" type="number" id="loginpopup-bot">
                        <label class="mdl-textfield__label" for="loginpopup-bot">What is 7 plus 1 = <em>* </em></label>
                        <span class="mdl-textfield__error">Please Enter Correct Value!</span>
                    </div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Login Now</button>
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
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-user-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="registerpopup-name">
                        <label class="mdl-textfield__label" for="registerpopup-name">Name <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="registerpopup-email">
                        <label class="mdl-textfield__label" for="registerpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="registerpopup-password">
                        <label class="mdl-textfield__label" for="registerpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="login-condition">By clicking Creat Account you agree to our <a href="#">terms &#38; condition</a></div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Create Account</button>
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
            </div>
        </div>
    </div><!-- End Register Modal -->
    <!-- Fixed Appointment Button at Bottom -->
    <div id="appointment-button" class="animated fadeInUp">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Button at Bottom -->
    <!-- Start Footer Section -->
    <?php  include("footer.php"); ?>
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
</body>
</html>