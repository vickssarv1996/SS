<?php
$conn = new mysqli("localhost", "root", "", "crm");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
if (!empty($_FILES["file"]["name"])) {
    $file_name=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $imgtype=$_FILES["file"]["type"];

    $imagename=$_FILES["file"]["name"];

    $target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

$tdate=date("Y-m-d");

    $query_upload="INSERT INTO crm.images_tbl (name,email,phone,images_path,submission_date) VALUES ('$name','$email','$phone','$target_path','$tdate')";
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
