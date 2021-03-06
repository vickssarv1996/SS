<?php
  if(isset($_POST["submitbutton"])){
    $ToEmail = 'vickssarv1996@gmail.com';
    $EmailSubject = "Subject: ".$_POST["Subject"]."";
    $mailheader = "From: ".$_POST["Email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["Email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "Name: ".$_POST["Name"]."<br>";

    $MESSAGE_BODY .= "Message: ".nl2br($_POST["Message"])."";
    if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)){
      echo "<div class='w3-container w3-white' style='padding:128px 16px' >
<h2 class='w3-center'>Your message has been sent!</h2></div>";
    }

  }
  ?>


<html lang="en">
    <head>
        <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <title>Wunderkind - Multipurpose Responsive Onepage Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="img/assets/favicon.png" rel="icon" type="image/png">
        <link href="css/init.css" rel="stylesheet" type="text/css">
        <link href="css/ion-icons.min.css" rel="stylesheet" type="text/css">
        <link href="css/etline-icons.min.css" rel="stylesheet" type="text/css">
        <link href="css/theme.css" rel="stylesheet" type="text/css">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/colors/purple.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300" rel="stylesheet" type="text/css">
    </head>
    <body data-fade-in="true" style="overflow-x:hidden;">

        <div class="pre-loader"><div></div></div>

        <!-- Start Header -->
        <nav class="navbar nav-down" data-fullwidth="true" data-menu-style="transparent" data-animation="shrink"><!-- Styles: light, dark, transparent | Animation: hiding, shrink -->
            <div class="container">

                <div class="navbar-header">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <a class="navbar-brand to-top" href="#"><img src="img/assets/logo-light.png" class="logo-light" alt="#"><img src="img/assets/logo-dark.png" class="logo-dark" alt="#"></a>
                    </div>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <div class="container">
                        <ul class="nav navbar-nav menu-right">

                            <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
                            <li><a href="#hero">Home</a></li>

                                    <li><a href="#trailers">News</a></li>
                                    <li><a href="#posts">Posts</a></li>


                            <li><a href="#movies">Movies</a></li>
                            <li><a href="#merchandise">Merchandise</a></li>
                            <li><a href="blog-grid.html">Blog</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact</a></li>

                            <li class="nav-separator"></li>
                            <li  class="nav-icon"><a href="http://facebook.com" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            <li  class="nav-icon"><a href="http://twitter.com" target="_blank"><i class="ion-social-twitter"></i></a></li>
                            <li  class="nav-icon"><a href="#" target="_blank"><i class="ion-help-buoy"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
        <!-- End Header -->

        <!-- Hero -->
        <section id="hero" class="hero-fullscreen" data-overlay-dark="5">
            <div class="background-image" >
              <video loop muted autoplay poster="img/backgrounds/bg-1.jpg" style="position :relative;min-height:100%;min-width:100%">
     <source src="img/mersal.webm" type="video/webm">
     <source src="img/mersal.mp4" type="video/mp4">
     <source src="img/mersal.ogv" type="video/ogg">
            </div>

            <div class="container">
                <div class="row">



                        <div style="text-align: center">
                            <h1>Poster Contest<br><strong>Mersal</strong></h1>
                            <p class="lead">Chance to win Mersal tickets!</p>
                            <a href="contestform.php" class="btn btn-lg btn-primary btn-scroll">Participate</a>
                        </div>




                </div>
            </div>
        </section>
        <!-- End Hero -->
        <!--photo slider-->

                <section id="trailers" class="pt100 pb90" data-overlay-dark="9">
                    <div class="background-image">
                        <img src="img/backgrounds/bg-10.jpg" alt="#">
                    </div>
                    <div class="container">
                        <div class="row">



                            <div class="col-md-12 text-center">

                                <div class="testimonials quote-icons quote-slider" data-autoplay="false" data-speed="4000">

                                    <!-- Testimonial One -->
                                    <div>
                                        <p>
                                            <i class="vossen-quote color"></i>
                                          <iframe width="560" height="315" src="https://www.youtube.com/embed/lxxY33oRlL8?autoplay=1" frameborder="0"  allowfullscreen></iframe>

                                            <i class="vossen-quote color"></i>
                                        </p>
                                    </div>
                                    <!-- Testimonial Two -->
                                    <div>
                                        <p>
                                            <i class="vossen-quote color"></i>
                                             <iframe width="560" height="315" src="https://www.youtube.com/embed/YQ6ShcAU_dQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
                                            <i class="vossen-quote color"></i>
                                        </p>
                                    </div>
                                    <!-- Testimonial Three -->
                                    <div>
                                        <p>
                                            <i class="vossen-quote color"></i>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/lxxY33oRlL8?autoplay=1" frameborder="0"  allowfullscreen></iframe>
                                            <i class="vossen-quote color"></i>
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


                </section>


      <!--end photo slider-->





<!-- Blog slider-->

        <section id="posts" class="parallax pt100 pb90" data-overlay-dark="8">
          <div class="background-image">
              <img src="img/backgrounds/bg-6.jpg" alt="#">
          </div>
                              <div class="container">
                                  <div class="row" style="padding:10px;">

                                      <div class="col-md-12">
                                          <div class="quote-slider navigation container white text-center" data-autoplay="true" data-speed="2000">
                                              <div>
                                            <a href="post1.html"><h2>
                                                      <i class="vossen-quote color"></i>
                                                      <strong>The Week Forward </strong><br>

                                                       Is it going to give you the list and the
                                                       <br> details of movies that is going to be released this week?
                                                      <i class="vossen-quote color"></i>
                                                  </h2></a>
                                                  <p class="label label-primary">Vicky Sivakumar</p>
                                              </div>
                                              <div>
                                                <a href="post1.html"><h2>
                                                          <i class="vossen-quote color"></i>
                                                          <strong>Insight: Mersal Trademark </strong><br>

                                                           After being the first Kollywood movie to have its
                                                           <br> own emoji in twitter, the marketing team
                                                           <br>of Mersal just aren’t stopping!
                                                          <i class="vossen-quote color"></i>
                                                      </h2></a>
                                                      <p class="label label-primary">Vicky Sivakumar</p>
                                              </div>
                                              <div>
                                                <a href="post1.html"><h2>
                                                          <i class="vossen-quote color"></i>
                                                          <strong>Sensible Reviews: Vivegam </strong><br>

                                                           Spoof of an Action Film
                                                          <i class="vossen-quote color"></i>
                                                      </h2></a>
                                                      <p class="label label-primary">Threka</p>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                              </div>

        </section>




<!-- End Blog slider-->
<!-- Portfolio-->
<section id="movies" class="pt100 pb110">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-12 text-center pb20">
                <h2>Movies</h2>

            </div>

            <div class="portfolio" data-gap="20"><!-- Values: 10, 15, 20, 25, 30 and 35 -->

                <!-- Portfolio Category Filters -->
                <ul class="vossen-portfolio-filters" data-initial-filter="NowShowing">
                    <li data-filter="NowShowing">Now Showing</li>
                    <li data-filter="NextWeek">Next Change</li>
                    <li data-filter="ComingSoon">Coming Soon</li>

                </ul>

                <!-- Portfolio Items Container-->
                <div class="vossen-portfolio">

                    <!-- Portfolio Item -->

                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="NowShowing">
                        <a href="desc1.html">
                            <div class="portfolio-item">
                                <div class="item-caption">

                                </div>
                                <div class="item-image">
                                    <img alt="#" src="img/portfolio/mersal.jpg" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="NowShowing">
                        <a href="desc2.html">
                            <div class="portfolio-item">
                                <div class="item-caption">

                                </div>
                                <div class="item-image">
                                    <img alt="#" src="img/portfolio/gulebakavali.jpg" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->

                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="NextWeek">
                        <a href="desc3.html">
                            <div class="portfolio-item">
                                <div class="item-caption">

                                </div>
                                <div class="item-image">
                                    <img alt="#" src="img/portfolio/nenjilthunivirundha.jpg" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="ComingSoon">
                        <a href="desc4.html">
                            <div class="portfolio-item">
                                <div class="item-caption">

                                </div>
                                <div class="item-image">
                                    <img alt="#" src="img/portfolio/sollividava.jpg" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->


                </div>

            </div>



        </div>
    </div>
</section>
<!-- End Portfolio -->


        <!-- Team -->
        <section id="merchandise" class="hero-fullscreen2 pt100 pb90" data-overlay-dark="10">
            <div class="container white ">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h2> <strong>Merchandise</strong></h2>

                    </div>

                    <div class="team-slider owl-carousel dark-pagination col-md-12">
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                  <a href="project-slides1.html"><img src="img/team/tshirt1.jpg" class="img-responsive" alt="#" /></a>
                                </div>

                            </div>

                            <h5>Mersal T-shirt</h5>
                            <p>Price:  ₹​ 250</p>
                        </div>
                <!-- dummy containers
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                  <a href="project-slides2.html"><img src="img/team/1.jpg" class="img-responsive" alt="#" /></a>
                                </div>

                            </div>

                            <h5>Mersal T-shirt</h5>
                            <p>Price:  ₹​ 500</p>
                        </div>
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                  <a href="project-slides3.html"><img src="img/team/1.jpg" class="img-responsive" alt="#" /></a>
                                </div>

                            </div>

                            <h5>Mersal T-shirt</h5>
                            <p>Price:  ₹​ 500</p>
                        </div>
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                  <a href="project-slides4.html"><img src="img/team/1.jpg" class="img-responsive" alt="#" /></a>
                                </div>

                            </div>

                            <h5>Mersal T-shirt</h5>
                            <p>Price:  ₹​ 500</p>
                        </div>

-->
                    </div>

                </div>
            </div>
        </section>
        <!-- End Team -->

                <!-- Clients Section -->
        <!--        <section class="pt70 pb70">
                    <div class="container">
                        <div class="row">

                            <div class="clients-slider" data-autoplay="false" data-speed="4000">
                                <div><img src="img/clients/1.png" class=" " alt="#"></div>
                                <div><img src="img/clients/2.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/3.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/4.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/5.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/6.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/7.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/8.png" class="img-responsive" alt="#"></div>
                                <div><img src="img/clients/9.png" class="img-responsive" alt="#"></div>
                            </div>

                        </div>
                    </div>
                </section> -->
                <!-- End Clients -->

                        <!-- Services -->
                        <section id="about" class="pt100 pb90">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-12 text-center pb20">
                                        <h2 class="">What We Do<br><strong>Our Tinsel Strokes</strong></h2>

                                    </div>

                                    <div class="col-md-4 col-sm-6 feature-left">
                                        <i class="icon-video size-3x color"></i>
                                        <i class="icon-video back-icon"></i>
                                        <div class="feature-left-content">
                                            <h4><strong>Entertainment Journalism</strong></h4>
                                            <p>Even if somebody twitches in Tinsel Town, you will get to know.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 feature-left">
                                        <i class="icon-basket size-3x color"></i>
                                        <i class="icon-basket back-icon"></i>
                                        <div class="feature-left-content">
                                            <h4><strong>Merchandise</strong></h4>
                                            <p>Tinsel Town costumes at your doorstep!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 feature-left">
                                        <i class="icon-puzzle size-3x color"></i>
                                        <i class="icon-puzzle back-icon"></i>
                                        <div class="feature-left-content">
                                            <h4><strong>Live Contests</strong></h4>
                                            <p>Unleash all the knowledge accumulated by watching movies to win exciting prizes!</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 feature-left">
                                        <i class="icon-layers size-3x color"></i>
                                        <i class="icon-layers back-icon"></i>
                                        <div class="feature-left-content">
                                            <h4><strong>Brand Indentity</strong></h4>
                                            <p>Get associated with the upcoming trends.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 feature-left">
                                        <i class="icon-pencil size-3x color"></i>
                                        <i class="icon-pencil back-icon"></i>
                                        <div class="feature-left-content">
                                            <h4><strong>Theater Company</strong></h4>
                                            <p>The theater field in Chennai evolved to 'the seventh sense' four years ago. Don't forget to catch us at our next show!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 feature-left">
                                        <i class="icon-wine size-3x color"></i>
                                        <i class="icon-wine back-icon"></i>
                                        <div class="feature-left-content">
                                            <h4><strong>Themed Parties</strong></h4>
                                            <p>Make your special day more special by celebrating with your beloved characters. Frisking you to the other side of celluloid!</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- End Services -->



        <!-- Who We Are -->
        <section id="who-we-are" class="pt40 pb40" data-overlay-dark="8">
            <div class="background-image">
                <img src="img/backgrounds/bg-2.jpg" alt="#">
            </div>
            <div class="container">
                <div class="row vertical-align">

                    <div class="col-md-12 pr30 mt40 mb40" style="width:100%">
                        <h2><strong>Our Inception</strong><br><span class="color">Dream-like Mission</span></h2>
                        <p>From its inception, cinema has shouldered itself the whole of humanity’s imagination. It is safe to say that every human being’s life would have been changed at least once by a 180 minute story known as cinema. Perception is a tricky thing. You may perceive cinema as a medium to escape and enter into a new world or a medium which transcends celluloid to impart emotions via empathy. Whatever your perception, the fact that cinema is bigger than all of us is undeniable.</p>
                        <p>This treasure trove of stories is not easy to create. The paradox of life is that ‘the illusion’ stands the test of time whereas ‘the real creator’ gets perished by it and the creator clings on to his creation on the hope that he is remembered for it. The ends to which humans go to create cinema which transcends time is an epic in itself. And we, as a tribute to those untiring creators bring you their stories.</p>
                        <p>Stories inspire, endear and even destroy but our stories are a testament to the will of humanity which is ready to increase its stakes in whatever it believes in irrespective of reality. Bringing you the stories behind the greatest and most beautiful illusion!</p>
                    </div>
                    <div class="col-md-12">
                      <section id="elements-circles" class="pt100 pb100">


                                  <div class="white progress-circle-icon progress-circles" data-animate-on-scroll="on">

                                      <div class="progress-circle style-1"  data-circle-percent="64" data-circle-text="Romance">
                                          <i class="icon-heart"></i>
                                          <!-- Change circle percent & text in attributes above -->
                                          <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                                      </div>

                                      <div class="progress-circle style-1"  data-circle-percent="44" data-circle-text="Sci-fi">
                                          <i class="icon-genius"></i>
                                          <!-- Change circle percent & text in attributes above -->
                                          <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                                      </div>

                                      <div class="progress-circle style-1"  data-circle-percent="86" data-circle-text="Mystery">
                                          <i class="icon-magnifying-glass"></i>
                                          <!-- Change circle percent & text in attributes above -->
                                          <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                                      </div>

                                      <div class="progress-circle style-1"  data-circle-percent="52" data-circle-text="Action">
                                          <i class="icon-hazardous"></i>
                                          <!-- Change circle percent & text in attributes above -->
                                          <svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>
                                      </div>

                                  </div>


                              </div>
                          </div>
                      </section>

                    </div>


        </section>
        <!-- End Who We Are -->

                <!-- Fun Facts -->
                <section id="fun-facts" data-animate="true">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-3 counter">
                                <h1 class="bold" data-count="7"></h1>
                                <h5>Senses</h5>
                            </div>
                            <div class="col-sm-3 counter">
                                <h1 class="bold" data-count="9000"></h1>
                                <h5>Nerd Level</h5>
                            </div>
                            <div class="col-sm-3 counter">
                                <h1 class="bold" data-count="4"></h1>
                                <h5>Cartoon Fingers</h5>
                            </div>
                            <div class="col-sm-3 counter">
                                <h1 class="bold" data-count="24"></h1>
                                <h5>Categories of Oscar Awards</h5>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Fun Facts -->

        <!-- Get Connected -->
        <section id="contact" class="parallax pt100 pb100" data-overlay-dark="6">
            <div class="background-image">
                <img src="img/backgrounds/bg-7.jpg" alt="#">
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-8 mr-auto text-center">
                        <h2>Get Connected<br><strong>Follow Us</strong></h2>
                        <p class="lead">Get connected with us on social networks!</p>
                    </div>

                    <div class="col-md-12">
                        <ul class="connected-icons social-icons">

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-facebook"></i>
                                    <h5>Facebook</h5>
                                    <p>Be Our Friend</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-youtube"></i>
                                    <h5>Youtube</h5>
                                    <p>Watch Our Videos</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-twitter"></i>
                                    <h5>Twitter</h5>
                                    <p>Follow Us</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-instagram"></i>
                                    <h5>Instagram</h5>
                                    <p>See Our Pictures</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-googleplus"></i>
                                    <h5>Google+</h5>
                                    <p>Join Our Circle</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-skype"></i>
                                    <h5>Skype</h5>
                                    <p>Get in Touch</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Get Connected -->
        <!-- Contact Info -->
        <section class="parallax pt110 pb70" data-overlay-dark="8">
            <div class="background-image">
                <img src="img/backgrounds/bg-8.jpg" alt="#">
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 details white text-center">
                        <div class="phone-number mb10">
                            <h1 class="bold">9003060366 / 9884842372</h1>
                        </div>
                        <div class="col-lg-12">
                            <h3>seventhsense@<span class="color">gmail.com</span></h3>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Info -->

        <!-- Contact Form -->
        <section id="contactform" class="pt120 pb100">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center pb20">
                        <h2>Get In Touch<br><strong>Contact Us</strong></h2>
                        <p class="lead">We would like to <span class="color">hear from you</span></p>
                    </div>

                    <div class="col-md-8 col-md-offset-2 contact box-style">
                        <div id="message-info"></div>
                        <!-- Forms can be functional only on server. Upload to your server when testing. -->
                        <form id="contactform" method="post" action="">

                            <div class="col-sm-12">
                                <input name="name" id="name" placeholder="Your Name *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="email" id="email" placeholder="Your Email *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="phone" id="phone" placeholder="Your Phone"/>
                            </div>
                            <div class="col-sm-12">
                                <textarea name="message" rows="9" id="message" placeholder="Your Message *"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="submit btn btn-lg btn-primary" id="submit" value="Send Message"/>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Form -->

        <!-- Google Map -->
        <section
            id="vossen-map"
            data-map-address="11th street, Ram Nagar North Extension, Madipakkam, Chennai - 600091"
            data-marker-info="Come visit us today!<br>11th street, Ram Nagar North Extension, Madipakkam, Chennai - 600091"
            data-maps-api-key="AIzaSyBD3JE1T5ssqLMdfRgR1bErpuWNBtIMHbI"
            data-map-zoom="16"
            data-map-height="500px"
            data-map-style="light"> <!-- dark, light, standard -->
        </section>
        <!-- End Google Map -->

        <!-- Start Footer -->
        <footer id="footer" class="footer style-1 dark">

            <a href="index.php"><img src="img/assets/foot.jpg" alt="#" class="mr-auto img-responsive"></a>
            <ul>
                <li><a href="https://www.twitter.com/" target="_blank" class="color"><i class="ion-social-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="color"><i class="ion-social-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank" class="color"><i class="ion-social-linkedin"></i></a></li>
                <li><a href="https://www.pinterest.com/" target="_blank" class="color"><i class="ion-social-pinterest"></i></a></li>
                <li><a href="https://plus.google.com/" target="_blank" class="color"><i class="ion-social-googleplus"></i></a></li>
            </ul>


            <!-- Back To Top Button -->
            <span><a class="scroll-top"><i class="ion-chevron-up"></i></a></span>

        </footer>
        <!-- End Footer -->

        <script src="js/jquery.js"></script>
        <script src="js/init.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
