<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Fleet Insurance - Beat That Quotes Insurance</title>
    <!-- Bootstrap core CSS -->
      <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="pricing.css" rel="stylesheet">
        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }

        </style>
</head>
<body>
    
<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="http://www.beatthatquotes.com" class="d-flex align-items-center text-dark text-decoration-none"><img src="../images/xbtq-logo.png" width="250px"></a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="me-3 py-2 text-dark text-decoration-none" href="call:08000831566">Got a question? Call 0800 083 1566</a>
      </nav>
    </div>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:100%;height:20px"></div>
      </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Thank you <?=$_SESSION['leads']['quote_contact_firstname'];?></h1>
      <p class="fs-5 text-muted">Your quotation request is on it's way to our insurance partners.  They'll be in touch soon with your quotation</p> 
        <p><a href="https://www.beatthatquotes.com">Return to Beat That Quotes</a></p>
      </div>
    
  </header>

  <?php unset($_SESSION['leads']);
  include("footer.php")?>
