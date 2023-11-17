<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
 

if(isset($_REQUEST['next']))
{
  $_SESSION['leads']['lead_details_adddressline1'] = $_POST['lead_details_adddressline1'];
  $_SESSION['leads']['lead_details_adddressline2'] = $_POST['lead_details_adddressline2'];
  $_SESSION['leads']['lead_details_town'] = $_POST['lead_details_town'];
  $_SESSION['leads']['lead_details_county'] = $_POST['lead_details_county'];
  $_SESSION['leads']['lead_details_postcode'] = $_POST['lead_details_postcode'];
  @header('location: step-9.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:80%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep8" id="frmStep8">  
        <input type="hidden" name="next" value="1">   
        <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
          <h1 class="display-4 fw-normal">Your Details</h1>
            <p class="fs-5 text-muted">We just need a couple of additional details to ensure your quote is correct</p>
            <div class="help-box"><p>Type in your postcode below and click <strong>Search</strong>. <a href="javascript:;" class="use_same_address">Use the address added previously? Click here</a></p></div>
            <div class="bd-example">
                  <div class="form-floating mb-3 postcode_field">                        
                            <div id="context"></div>                         
                        
                    </div>
                    <div class="form-floating mb-3">
                        
                            <input class="form-control" type="text" name="lead_details_adddressline1" id="lead_details_adddressline1" value="" readonly>
                            <label for="floatingInput" class="error lead_details_adddressline1_error">Address Line 1</label>
                    </div>
                    <div class="form-floating mb-3">
                        
                            <input class="form-control" type="text" name="lead_details_adddressline2" id="lead_details_adddressline2" value="" readonly>
                            <label for="floatingInput" class="error ">Address Line 2</label>
                    </div>
                    <div class="form-floating mb-3">
                       
                            <input class="form-control" type="text" name="lead_details_town" id="lead_details_town" value="" readonly>
                            <label for="floatingInput" class="error lead_details_town_error">Town/City</label>
                    </div>
                    <div class="form-floating mb-3">
                       
                            <input class="form-control" type="text" name="lead_details_county" id="lead_details_county" value="" readonly>
                            <label for="floatingInput" class="error lead_details_county_error">County</label>
                    </div>
                    <div class="form-floating mb-3">
                       
                            <input class="form-control" type="text" name="lead_details_postcode" id="lead_details_postcode" value="" readonly>
                            <label for="floatingInput" class="error lead_details_postcode_error">Postcode</label>
                    </div>
                </div>
        </div>
        <main>
                <button type="button" class="w-100 btn btn-primary btn-lg"  name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>


  <script src="../assets/dist/js/jquery.postcodes.js"></script>
  <?php include("footer.php")?>
  <script>
     $('#context').setupPostcodeLookup({
    output_fields: {
      line_1: "#lead_details_adddressline1",
      line_2: "#lead_details_adddressline2",
      post_town: "#lead_details_town",
      county: "#lead_details_county",
      postcode: "#lead_details_postcode",
    },
  });

  $(".use_same_address").on("click", function(){
      $(".help-box").addClass("d-none");
      $(".postcode_field").addClass("d-none");
      $("#lead_details_adddressline1").val('<?=$_SESSION['leads']['lead_contact_adddressline1']?>');
      $("#lead_details_adddressline2").val('<?=$_SESSION['leads']['lead_contact_adddressline2']?>');
      $("#lead_details_town").val('<?=$_SESSION['leads']['lead_contact_town']?>');
      $("#lead_details_county").val('<?=$_SESSION['leads']['lead_contact_county']?>');
      $("#lead_details_postcode").val('<?=$_SESSION['leads']['lead_contact_postcode']?>');
    })


    $("#btnNext").on("click", function(){
        if($("#lead_details_adddressline1").val() == false)
        {
            $(".lead_details_adddressline1_error").text("Please enter your address line 1");
            $("#lead_details_adddressline1").css("border-color", "red");
        }else if($("#lead_details_town").val() == false)
        {
            $(".lead_details_town_error").text("Please enter your town");
            $("#lead_details_town").css("border-color", "red");
        }else if($("#lead_details_county").val() == false)
        {
            $(".lead_details_county_error").text("Please enter your county");
            $("#lead_details_county").css("border-color", "red");
        }else if($("#lead_details_postcode").val() == false)
        {
            $(".lead_details_postcode_error").text("Please enter your location postcode");
            $("#lead_details_postcode").css("border-color", "red");
        }else{
            $("#frmStep8").submit();
        }
    })
    </script>