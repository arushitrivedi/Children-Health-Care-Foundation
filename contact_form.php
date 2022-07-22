<?php

if(isset($_POST['submit']))
{
  //echo "Successful Submission";
$name = $_POST['txtName'];
$visitor_email = $_POST['txtEmail'];
$message =$_POST['txtMessage'];

$emailTo="radhikatrivedi231@gmail.com";
$headers="From: The Children's Health Care Website".
$txt="You have received a mail from ".$name."\n\n".$message;

//mail($emailTo, $txt, $headers);

}?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The CHCF Payment Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
    
<div class="card text-center">
  <div class="card-header bg-success p-2 text-dark bg-opacity-50 mt-3" >
    Message Submitted Successfully.
  </div>
  <div class="card-body">
    <h5 class="card-title">The Children's Health Care Foundation</h5>
    <p class="card-text">We thank you for your valuable suggestions for our NGO.</p>
    <a href="index.html #contact" class="btn btn-secondary">Back</a>
  </div>
  <div class="card-footer text-muted bg-success p-2 text-dark bg-opacity-50">
  <i class="fa fa-phone"></i> 6388760176
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


