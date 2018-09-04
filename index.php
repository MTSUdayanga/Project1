
<html>

    <head>
        <title> MyProfile </title>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/ProfilePic.css" rel="stylesheet" type="text/css"/>
        <script src="js/ProfilePic.js" type="text/javascript"></script>
        <link href="Plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #FFF;">

        <!--header-->

        <!--        <div class="panel heading">
        
                    <div class="panel-heading" >
        
                        <i class="fa fa-phone">
                            <span class="details"><a href="tel:+94718905282">+94 71 890 5282</a></span>
                        </i>
                        <span class="separate hidden-sm hidden-xs">||</span>
                        <i class="fa fa-envelope-o hidden-sm hidden-xs">
                            <span class="details"><a href="mailto:keerthiyaa@gmail.com">keerthiyaa@gmail.com</a></span>
                        </i>
                        <div class="visitor-login-name" style="float: right;"> Hi ..  </div>
        
                        <div class="dropdown" style="float: right;" >
                            <button class="drop" type="button" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Logout</a></li>
        
                            </ul>
                        </div>
        
                        <hr>
                        <h1>Sri Lankan Toursim</h1>
        
                    </div>
                </div>-->

        <div class="container-fluid h-st1" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-left">
                            <div class="contact-detail">
                                <i class="fa fa-phone">
                                    <span class="details"><a href="tel:+94718905282">+94 71 890 5282</a></span>
                                </i>
                                <span class="separate hidden-sm hidden-xs">||</span>
                                <i class="fa fa-envelope-o hidden-sm hidden-xs">
                                    <span class="details"><a href="mailto:keerthiyaa@gmail.com">keerthiyaa@gmail.com</a></span>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown" style="float: right;">
                        <div class="visitor-login-name">
                            Hi                </div>
                        <img class="img-circle add-user-logged" id="visitor_pic" src="#" alt="" />
                        <!--                        <div class="dropdown-content">
                                                    <a href="#">
                                                        <i class="fa fa-user"></i>
                                                        My profile
                                                    </a>
                                                    <a href="post-and-get/logout.php">
                                                        <i class="fa fa-power-off"></i>
                                                        Log out
                                                    </a>
                                                </div>-->
                    </div>
                </div>
                <hr style="padding-top: -10px !important;">
                <div class=" hidden-sm hidden-xs " >
                    <div class="col-md-5 p-o">
                        <div class="sec-header sec-header-pad">
                            <a class="head-link-hover" href="index.php">
                                <h2>Sri Lanka Tourism</h2>
                                <h3>Plan your trip to Sri Lanka</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <a href="index.php">
                            <img src="images/logo-intro2.png" alt="image" class="logo" id="logo1"/>  
                        </a>
                    </div>

                    <div class="col-md-3">
                        <div class="sec-header sec-header-pad">
                            <ul class="social-icon">
                                <h4>Follow us</h4>
                                <a data-original-title="Facebook" href="#"><i class="fa fa-facebook index-a-facebook"></i></a>
                                <a data-original-title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a data-original-title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a data-original-title="instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="sec-header sec-header-pad ">
                            <ul>
                                <li class="c-list-style"> 
                                    <a class="head-link-hover" href="member/index.php">
                                        <div class="c-button-member-mobile add-your" >
                                            <span>Add Your Business</span>
                                        </div>
                                    </a>
                                </li>
                            </ul> 
                        </div>
                    </div>

                </div>
                <div class=" hidden-lg hidden-md visible-sm visible-xs">
                    <div class="row">
                        <div class=" col-xs-4 col-sm-4 p-o">
                            <a href="index.php">
                                <img src="images/logo-intro2.png" alt="image" class="logo"/>  
                            </a>
                        </div>
                        <div class="col-xs-8 col-sm-8 p-o">
                            <div class="sec-header sec-header-pad c-sec-header-pad">
                                <a class="head-link-hover" href="index.php">
                                    <h2>Sri Lanka Tourism</h2>
                                    <h3>Plan your trip to Sri Lanka</h3>
                                </a>
                                <br>
                                <div class="c-padding">
                                    <h4 class="hidden-sm hidden-xs">Follow us</h4>
                                    <a data-original-title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a data-original-title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a data-original-title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a data-original-title="instagram" href="#"><i class="fa fa-instagram"></i></a>

                                    <a href="member/index.php">
                                        <div class="c-button-member-mobile add-your" >
                                            <span>Add Your Business</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--/header-->

        <div class="container">

            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-user" aria-hidden="true"></i>Profile</div>
                    <div class="panel-body"> 
                        <!--Profile img-->
                        <div class="col-sm-6"> 

                            <div class="col-md-4">

                                <div class="circle">
                                    <!-- User Profile Image -->
                                    <img class="profile-pic" src="images/ProfilePic.jpg" >

                                    <!-- Default Image -->
                                    <!-- <i class="fa fa-user fa-5x"></i> -->
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="list-group">
                                <li class="list-group-item"> <b>First Name :</b> <span class="badge" ></span></li>
                                <li class="list-group-item"> <b>Last Name  :</b> <span class="badge"></span></li>
                                <li class="list-group-item"> <b>Email : </b><span class="badge"></span></li>
                                <li class="list-group-item"> <b>Contact No : </b><span class="badge"></span></li>
                                <li class="list-group-item"> <b>Address : </b><span class="badge"></span></li>
                                <li class="list-group-item"> <b> City : </b><span class="badge"></span></li>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <input class="file-upload" type="file" accept="image/*"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">  

                <div class="list-group">
                    <a href="#" class="list-group-item"> <i class="fa fa-tachometer" aria-hidden="true"></i> My Profile</a>
                    <a href="#" class="list-group-item"> <i class="fa fa-user" aria-hidden="true"></i>  Edit Profile</a>
                    <a href="#" class="list-group-item"> <i class="fa fa-lock" aria-hidden="true"></i> Change Password</a>
                    <a href="#" class="list-group-item"> <i class="fa fa-comment" aria-hidden="true"></i> Message</a>
                    <a href="#" class="list-group-item"> <i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a>


                </div>
            </div>

        </div>


        <!--Footer-->

       

        <footer class="footer-style container-fluid"style="background-color: #003366; height: auto;">
            <div class="container">
                <div class="row footer-includes">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center footer-logo">
                        <img src="images/logo-intro.png" height="70px" alt="">
                    </div>
                    <div class="text-center" id="footer-link">
                        Copyright © 2017.<a target="_blank"  href="http://sublime.lk/">Sublime Holdings</a>.All rights reserved.
                    </div>
                    <div class="fbottom text-center">
                        <a href="#">Terms</a><span>|</span>
                        <a href="#">Privacy</a><span>|</span>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="Plugins/fontawesome/js/fontawesome.min.js" type="text/javascript"></script>
    </body>



</html>