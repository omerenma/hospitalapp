
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

 <?php
     include("include/db.php");
     if (isset($_POST['review_submit'])) {
    $reviewName = $_POST['review_name'];
    $reviewEmail = $_POST['review_email'];
    $reviewComment = $_POST['review_comment'];
    if(empty($reviewName) && empty($reviewEmail) && empty($reviewComment)){
        echo "Fill all fields";

    }else{

    $ReviewInsert = "INSERT INTO review (name, email, comment) VALUES('$reviewName', '$reviewEmail', '$reviewComment')";
    $QueryReview = mysqli_query($connect, $ReviewInsert);

    }


    }

?>






<?php  include("header.php"); ?>


<!-- End Header Top Section -->
        <!-- Start Main Header Section -->
       <!-- End Header -->
    <!-- Start Page Title Section -->
    <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Skin Care</h1>
                <p><a href="index.php">Home</a> &#8594; <a href="service.php">Services</a> &#8594; <span>Skin Care</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Service Section -->
    <div id="service-page-1">
        <div class="layer-stretch">
            <div class="row layer-wrapper">
                <div class="col-lg-8 text-center">
                    <div class="theme-material-card">
                        <div class="theme-img theme-img-scalerotate"><img src="./images/6.jpg" width="500" height="470" alt=""></div>
                        <div class="service-post">
                            <p class="paragraph-medium paragraph-black text-left">Sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <div class="theme-quote">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                            <p class="paragraph-medium paragraph-black text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum modi libero molestias quaerat veritatis impedit consequatur est ut, officiis, sit ea qui architecto nostrum reiciendis accusantium eaque assumenda quas deserunt!</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ol class="theme-list">
                                        <li>1. Asperiores quis voluptates voluptas</li>
                                        <li>2. Asperiores quis voluptates voluptas</li>
                                        <li>3. Asperiores quis voluptates voluptas</li>
                                        <li>4. Asperiores quis voluptates voluptas</li>
                                        <li>5. Asperiores quis voluptates voluptas</li>
                                        <li>6. Asperiores quis voluptates voluptas</li>
                                    </ol>
                                </div>
                                <div class="col-md-6">
                                    <div class="theme-img theme-img-scalerotate">
                                        <img src="./images/8.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <p class="paragraph-medium paragraph-black text-left">Food poisoning, also referred foodborne illness is the result of eating contaminated, spoiled, or toxic food as well as chemical or natural toxins such as poisonous mushrooms. Contamination can also occur at home if food is incorrectly handled or cooked. </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="theme-img theme-img-scalerotate">
                                        <img src="./images/12.jpg" height="180" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="theme-img theme-img-scalerotate">
                                        <img src="./images/11.jpg" height="180" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="theme-img theme-img-scalerotate">
                                        <img src="./images/10.jpg" height="180" alt="">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <p class="paragraph-medium paragraph-black text-left">Food poisoning, also referred foodborne illness is the result of eating contaminated, spoiled, or toxic food as well as chemical or natural toxins such as poisonous mushrooms. Contamination can also occur at home if food is incorrectly handled or cooked. </p>
                            <ul class="theme-list text-left">
                                <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas food as well as chemical or natural</li>
                                <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas food as well as chemical or natural</li>
                                <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas food as well as chemical or natural</li>
                                <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas food as well as chemical or natural</li>
                                <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas food as well as chemical or natural</li>
                                <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas food as well as chemical or natural</li>
                            </ul>
                            <p></p>
                            <div class="theme-quote theme-quote-colored">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                        </div>
                    </div>
                    <div class="theme-material-card">
                        <div class="sub-ttl">Reviews:<?php  ?> </div>
                         <?php
                        $ReviewSelect = "SELECT * FROM review ORDER BY id desc";
                        $execute = mysqli_query($connect, $ReviewSelect);
                        $fetch = mysqli_fetch_assoc($execute);
                     while($Result = mysqli_fetch_array($execute)){
                         $ResultName = $Result['name'];
                         $ResultEmail = $Result['email'];
                         $ResultComment = $Result['comment'];
                     
                     $numCount =  count($Result);
                     $GLOBALS['numcount'] = $numcount;
                     ?>
   

                        <ul class="comment-list">
                            <li>
                                <div class="row">
                                    <div class="col-2 hidden-xs-down pr-0 comment-img">
                                        <div class="theme-img">
                                            <img src="uploads/comment-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 comment-detail text-left">
                                        <div class="comment-meta">
                                            <span><?php  echo $ResultName; ?></span>
                                            <span>27 June 2017</span>
                                        </div>
                                        <div class="comment-post">
                                           <?php  echo $ResultComment; ?>
                                        </div>
                                        <ul class="comment-action">
                                            <li><a><i class="fa fa-thumbs-up"></i>Like</a></li>
                                            <li><a><i class="fa fa-thumbs-down"></i>Dislike</a></li>
                                            <li><a><i class="fa fa-reply"></i>Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="theme-material-card">
                       
                        <div class="sub-ttl layer-ttl-white">Write a Review</div>
                        <form action="service.php" method="POST">
                        <div class="row comment-form">
                            <div class="col-sm-6">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="comment-name" name="review_name">
                                    <label class="mdl-textfield__label" for="comment-name">Name <em> *</em></label>
                                    <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                    <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="comment-email" name="review_email">
                                    <label class="mdl-textfield__label" for="comment-email">Email <em> *</em></label>
                                    <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mdl-textfield mdl-js-textfield form-input">
                                    <textarea class="mdl-textfield__input" rows="4" id="comment-message" name="review_comment"></textarea>
                                    <label class="mdl-textfield__label" for="comment-message">Your Comment ...</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-submit">
                                    <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" name="review_submit">Submit Comment</button>
                                </div>
                            </div>  
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="theme-material-card">
                        <div class="sub-ttl">Our Services</div>
                        <ul class="category-list">
                            <li><a href="#"><i class="fa fa-stethoscope"></i>Cardiovascular centre</a></li>
                            <li><a href="#"><i class="fa fa-child"></i>Childbirth Center</a></li>
                            <li><a href="#"><i class="fa fa-heartbeat"></i>Cardiology</a></li>
                            <li><a href="#"><i class="fa fa-wheelchair-alt"></i>Skin Care</a></li>
                            <li><a href="#"><i class="fa fa-flask"></i>Laboratory Services</a></li>
                            <li><a href="#"><i class="fa fa-certificate"></i>Mammography</a></li>
                            <li><a href="#"><i class="fa fa-h-square"></i>Dermatologist</a></li>
                            <li><a href="#"><i class="fa fa-glass"></i>Anesthesiology</a></li>
                            <li><a href="#"><i class="fa fa-stethoscope"></i>Paediatrics</a></li>
                            <li><a href="#"><i class="fa fa-eye"></i>Eye Care</a></li>
                            <li><a href="#"><i class="fa fa-bullhorn"></i>Radiology Center</a></li>
                        </ul>
                    </div>
                    <div class="theme-material-card text-center">
                        <div class="sub-ttl">Make An Appointment</div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="sideapnt-name" name="name">
                            <label class="mdl-textfield__label" for="sideapnt-name">Name</label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="sideapnt-email"  name="email">
                            <label class="mdl-textfield__label" for="sideapnt-email">Email</label>
                            <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="sideapnt-mobile"  name="number">
                            <label class="mdl-textfield__label" for="sideapnt-mobile">Mobile Number</label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>
                        <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                            <i class="fa fa-hospital-o"></i>
                            <select class="mdl-selectfield__select" id="sideapnt-department">
                                <option value=""></option>
                                <option value="Gynaecology">Gynaecology</option>
                                <option value="Orthology">Orthology</option>
                                <option value="Dermatologist">Dermatologist</option>
                                <option value="Anaesthesia">Anaesthesia</option>
                                <option value="Ayurvedic">Ayurvedic</option>
                            </select>
                            <label class="mdl-selectfield__label" for="sideapnt-department">Choose Department</label>
                        </div>
                        <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                            <i class="fa fa-user-md"></i>
                            <select class="mdl-selectfield__select" id="sideapnt-doctor">
                                <option value=""></option>
                                <option value="Daniel Barnes">Dr. Daniel Barnes</option>
                                <option value="Steve Soeren">Dr. Steve Soeren</option>
                                <option value="Barbara Baker">Dr. Barbara Baker</option>
                                <option value="Melissa Bates">Dr. Melissa Bates</option>
                                <option value="Linda Adams">Dr. Linda Adams</option>
                            </select>
                            <label class="mdl-selectfield__label" for="sideapnt-doctor">Choose Doctor</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-calendar-o"></i>
                            <input class="mdl-textfield__input datetimepicker" type="text" id="sideapnt-date" readonly>
                            <label class="mdl-textfield__label" for="sideapnt-date">Date</label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>
                        <div class="side-error"></div>
                        <button class="btn button-primary button-lg side-appointment" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Processing" name="submit">Submit</button>
                    </div>
                    <div class="theme-material-card">
                        <div class="sub-ttl">Time Table</div>
                        <ul class="timetable">
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Mon</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Tue</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Wed</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Thu</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Fri</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Sat</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Sun</a><a class="pull-right">Holiday</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Service Section -->
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

 <?php 
        include("include/db.php");
            if (isset($_POST['email-submit'])) {
                $emailSub = $_POST['subscribe-email'];
                $SelectEmail = "SELECT * FROM newsletter WHERE email = '$emailSub'";
                $ExecEmail = mysqli_query($connect, $SelectEmail);
                $fetch = mysqli_fetch_array($ExecEmail);
                if($fetch['email'] == $emailSub){
                    echo "This Email has already subscribed for our Newsletter";
                }elseif  (!empty($emailSub)) {
                     $Insert = "INSERT INTO newsletter (email) VALUES ('$emailSub')";
                    $EmailExe = mysqli_query($connect, $Insert);
                }else
                {
                    echo "Please enter your email";
                }
            }
  ?>
    <?php include("footer.php"); ?>
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