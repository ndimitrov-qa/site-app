<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   

include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:1%;height:20px"></div>
      </div>
      
    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <h1 class="display-4 fw-normal">HGV Insurance</h1>
        <p class="fs-5 text-muted">Before we start your quotation we just need to check a few things.</p>
        <p>Looking to insure 2 or more HGV's then you'll probably suit fleet. <a href="#">Get a fleet insurance quote.</a></p>
        <div class="info-box">
            <p>To make sure your quote is valid and accurate, you'll need to be:</p>
            <ul>
                <li>At least 18 years old and a UK resident</li>
                <li>Your vehicle <strong>is not</strong> a horse box, horse truck or horse trailer</li>
            </ul>
            <p>You have a duty to provide clear, accurate and complete information in your quote request. By continuing you are agreeing to our <a class="link" target="_blank" href="https://www.nova-insurance.com/privacy-and-data-protection/">privacy policy</a>.</p>
        </div>
    </div>
  </header>

  <main>

      <a class="w-100 btn btn-primary btn-lg" href="step-1.html">Next</a>
  </main>

<?php include("footer.php") ?>
