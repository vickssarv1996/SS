<!DOCTYPE html>
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
<nav class="navbar nav-down" data-fullwidth="true" data-menu-style="light" data-animation="shrink"><!-- Styles: light, dark, transparent | Animation: hiding, shrink -->
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
                  <li><a href="index.php#hero">Home</a></li>

                          <li><a href="index.php#trailers">Trailers</a></li>
                          <li><a href="index.php#posts">Posts</a></li>


                  <li><a href="index.php#movies">Movies</a></li>
                  <li><a href="index.php#merchandise">Merchandise</a></li>
                  <li><a href="blog-grid.html">Blog</a></li>
                  <li><a href="index.php#about">About Us</a></li>
                  <li><a href="index.php#contact">Contact</a></li>

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



        <!-- Contact Form -->
        <section id="contact" class="pt120 pb100">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center pb20">
                        <h2><strong>Contest Submission Form</strong></h2>

                    </div>

                    <div class="col-md-8 col-md-offset-2 contact box-style">

                        <!-- Forms can be functional only on server. Upload to your server when testing. -->
                        <form method="post" action="" enctype="multipart/form-data">
                           <div id="message-info">Select the movie</div>
                           <div class="col-sm-6">

                             <select name="movie">

                          <option value="mersal">Mersal</option>

                          </select>
                           </div>

                            <div class="col-sm-12">
                                <input name="name" id="name" required placeholder="Your Name *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="email" id="email" required placeholder="Your Email *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="phone" id="phone" required placeholder="Your Phone"/>
                            </div>
                            <div class="col-sm-12">
                              <input type="file" name="file"/>


                            </div>
<div class="col-sm-12">
<br><br>
</div>

                            <div class="col-md-12">
                                <input type="submit" class="submit btn btn-lg btn-primary" id="submit" onclick="CheckFileName();" value="Send Message"/>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Form -->


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
        <script type="text/javascript">
        $("[type=file]").on("change", function(){
// Name of file and placeholder
var file = this.files[0].name;
var dflt = $(this).attr("placeholder");
if($(this).val()!=""){
  $(this).next().text(file);
} else {
  $(this).next().text(dflt);
}
});
function CheckFileName() {
        var fileName = document.getElementById("files").value
        if (fileName == "") {
            alert("Browse to upload the poster");
            return false;
        }
        else if (fileName.split(".")[1].toUpperCase() == "PNG" ||fileName.split(".")[1].toUpperCase() == "JPG" )
            return true;
        else {
            alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with png or jgp extensions");
            return false;
        }
        return true;
    }

        </script>
        <script src="js/jquery.js"></script>
        <script src="js/init.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
<?php
$conn = new mysqli("localhost", "root", "", "crm");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$movie=$_POST['movie'];
if (!empty($_FILES["file"]["name"])) {
    $file_name=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $imgtype=$_FILES["file"]["type"];

    $imagename=$_FILES["file"]["name"];

    $target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

$tdate=date("Y-m-d");

    $query_upload="INSERT INTO crm.images_tbl (name,email,phone,movie,images_path,submission_date) VALUES ('$name','$email','$phone','$movie','$target_path','$tdate')";
    mysqli_query($conn,$query_upload);
    echo '<script language="javascript">';
echo 'alert("Poster successfully sent")';
echo '</script>';
}else{
  echo '<script language="javascript">';
echo 'alert("Error While uploading image on the server")';
echo '</script>';

}
}




 mysqli_close($conn);

 ?>
