<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   


if(isset($_REQUEST['next']))
{

$quote_contact_firstname = $_SESSION['leads']['quote_contact_firstname'];
$quote_contact_lastname = $_SESSION['leads']['quote_contact_lastname'];
$quote_company_name = $_SESSION['leads']['quote_company_name'];
$quote_company_age = $_SESSION['leads']['quote_company_age'];
$lead_contact_adddressline1 = $_SESSION['leads']['lead_contact_adddressline1'];
$lead_contact_adddressline2 = $_SESSION['leads']['lead_contact_adddressline2'];
$lead_contact_town = $_SESSION['leads']['lead_contact_town'];
$lead_contact_county = $_SESSION['leads']['lead_contact_county'];
$lead_contact_postcode = $_SESSION['leads']['lead_contact_postcode'];
$quote_company_trade = $_SESSION['leads']['quote_company_trade'];
$quote_cover_history = $_SESSION['leads']['quote_cover_history'];
$quote_cover_vehicle_file = $_SESSION['leads']['quote_cover_vehicle_file'];
$quote_cover_start = $_SESSION['leads']['quote_cover_start'];
$quote_cover_drivers = $_SESSION['leads']['quote_cover_drivers'];
$quote_company_number = $_SESSION['leads']['quote_company_number'];

$lead_details_adddressline1 = $_SESSION['leads']['lead_details_adddressline1'];
$lead_details_adddressline2 = $_SESSION['leads']['lead_details_adddressline2'];
$lead_details_town = $_SESSION['leads']['lead_details_town'];
$lead_details_county = $_SESSION['leads']['lead_details_county'];
$lead_details_postcode = $_SESSION['leads']['lead_details_postcode'];

$quote_contact_dob = date("Y-m-d", strtotime(str_replace("/","-",$_POST['quote_contact_dob'])));
$quote_contact_email = $_POST['quote_contact_email'];
$quote_contact_tel = $_POST['quote_contact_tel'];
$quote_contact_alt_tel = $_POST['quote_contact_alt_tel'];

$quote_source = "Beat That Quotes";
$quote_ip = $_SERVER['REMOTE_ADDR'];



  $db_con->query("INSERT INTO np_leads_contact SET `_LeadsType`='Insurance', `_LeadsSubType`='Fleet', `_LeadsContactTitle`='Mr', 
  `_LeadsContactFirstName`='".stripslashes($quote_contact_firstname)."', `_LeadsContactLastName`='".stripslashes($quote_contact_lastname)."',
   `_LeadsContactDOB`='".$quote_contact_dob."', `_LeadsContactEmail`='".stripslashes($quote_contact_email)."', 
   `_LeadsContactPhone`='$quote_contact_tel', `_LeadsContactAltPhone`='$quote_contact_alt_tel', 
   `_LeadsContactAddress`='".stripslashes($lead_details_adddressline1)."', `_LeadsContactAddress2`='".stripslashes($lead_details_adddressline2)."',
   `_LeadsContactCity`='".stripslashes($lead_details_town)."',`_LeadsContactCounty`='".stripslashes($lead_details_county)."', `_LeadsContactPostcode`='".stripslashes($lead_details_postcode)."', `_LeadsContactPrefEmail`=0, `_LeadsContactPrefPhone`=0, `_LeadsContactPrefSMS`=0,
    `_LeadsContactAddedOn`=NOW(), `_LeadsContactAddedBy`=1, `_LeadsContactStatus`=1");
   $leads_contact_id =  $db_con->lastInsertID();
  $leads_data = json_encode($_SESSION['leads']);
  $db_con->query("INSERT INTO np_leads SET _LeadsContactID = '".$leads_contact_id."', _LeadsCategoryID = 3, _LeadsCompanyName = '".$quote_company_name."', _LeadsCompanyNnumber = '".$quote_company_number."', _LeadsData = '". $leads_data ."', _LeadsSource = '". $quote_source ."', _LeadsAddedIP = '". $quote_ip ."', _LeadsCreatedDate = NOW(), _LeadsStatus = 0");
  @header('location: thank-you.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:90%;height:20px"></div>
      </div>
    <form action="" method="post" name="frmStep9" id="frmStep9">  
        <input type="hidden" name="next" value="1">   
        <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
          <h1 class="display-4 fw-normal">Contact Details</h1>
            <p class="fs-5 text-muted">What details should be use for the quote and how can we get in touch?</p>
            <div class="bd-example">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="quote_contact_dob" autocomplete="off" id="quote_contact_dob" placeholder="Date of Birth" value="" >
                        <label for="floatingInput" class="quote_contact_dob_error">Date of Birth</label>
                        
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control required  d8val_email "  d8validation="email" d8validationlevel="Address" name="quote_contact_email" id="quote_contact_email" placeholder="Email Address" value="" >
                    <label for="floatingInput" class="quote_contact_email_error">Email Address</label>
                    <input type="hidden" name="quote_contact_email_valid" id="quote_contact_email_valid" value="">
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control required  d8val_phone" d8validation="phone" d8errortext="Invalid telephone number" d8options="RequiredCountry=GB&BarredPrefixes=+4490" name="quote_contact_tel" id="quote_contact_tel" placeholder="Telephone Number" value="" >
                    <label for="floatingInput" class="quote_contact_tel_error">Telephone Number</label>
                    <input type="hidden" name="quote_contact_tel_valid" id="quote_contact_tel_valid" value="">
                    </div>
                    <div class="form-floating mb-3 d-none add_alternate_fld">
                    <input type="text" class="form-control" name="quote_contact_alt_tel" id="quote_contact_alt_tel" placeholder="Alternate Telephone Number" value="" >
                    <label for="floatingInput" class="quote_contact_alt_tel_error">Alternative Telephone Number</label>
                    </div>
                </div>
            <br><p><strong><a href="javascript:;" class="add_alternate_btn">Add alternative contact number</a></strong></p>
        
        </div>
        <main>
            <button type="button" class="w-100 btn btn-primary btn-lg"  name="nextgo" id="btnNext" value="nextgo">Next</button>
        </main>
      </form>
  </header>


  <?php include("footer.php")?>
  <script>
     $( function() {
      $( "#quote_contact_dob" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          dateFormat: "d/m/yy",
          changeMonth: true,
          changeYear: true,
          yearRange: "1980:",
          maxDate: new Date()
        });
    } );
    $(".add_alternate_btn").on("click", function(){
      $(".add_alternate_fld").toggleClass('d-none');
     var alt_text = $(".add_alternate_btn").text();

    if(alt_text == "Add alternative contact number")
        $(".add_alternate_btn").text("Remove alternative contact number");
    else  
        $(".add_alternate_btn").text("Add alternative contact number");
    });

    
    function IsValidEmail(email, level="MX") {
      /// <param name="email">string</param>
      /// <param name="level">string. One of the following values: Syntax, MX, Server, Address</param>
      var emailvalidation = new data8.emailvalidation();
      
      emailvalidation.isvalid(
        email,
        level,
        [
          new data8.option('MissingMXRecordHandling', 'ServerCheck')
        ],
        showIsValidEmailResult
      );
    }

 function showIsValidEmailResult(result) {
  // Check that the call succeeded, and show the error message if there was a problem.

  // return result;
  if (result.Result == "Invalid") {
    $(".quote_contact_email_error").text("Please enter a valid email ID");
    $("#quote_contact_email_valid").val('');
    $("#quote_contact_email").css("border-color", "red");
    var error = true;
    return false;
  }else {
    $("#quote_contact_email_valid").val(1);
    $(".quote_contact_email_error").text("Email Address"); 
    error = false;
    return true;
  }
}

function showIsValidPhoneResult(result) {
  // Check that the call succeeded, and show the error message if there was a problem.
  //console.log(result);
  // console.log(result.Result.ValidationResult);
  if (result.Result.ValidationResult == "Invalid") {
    $(".quote_contact_tel_error").text("Please enter a valid Phone number");
    $("#quote_contact_tel_valid").val('');
    $("#quote_contact_tel").css("border-color", "red");
    var error = true;
    return false;
  }else {
    $("#quote_contact_tel_valid").val(1);
    $(".quote_contact_tel_error").text("Telephone Number");
    error = false; 
    return true;
  }
}

function IsValidPhone(telephoneNumber, defaultCountry="GB") {
  /// <param name="telephoneNumber">string</param>
  /// <param name="defaultCountry">string</param>
  var phonevalidation = new data8.phonevalidation();
  
  phonevalidation.isvalid(
    telephoneNumber,
    defaultCountry,
    [
      new data8.option('RequiredCountry', ''),
      new data8.option('AllowedPrefixes', ''),
      new data8.option('BarredPrefixes', ''),
      new data8.option('TreatUnavailableMobileAsInvalid', 'false'),
      new data8.option('ExcludeUnlikelyNumbers', 'false'),
      new data8.option('DefaultFormatType', 'National'),
      new data8.option('DifferentFormatCountries', '44'),
      new data8.option('DifferentFormatType', 'National'),
      new data8.option('UseLocalFormatting', 'true'),
      new data8.option('EndUserIPAddress', '')
    ],
    showIsValidPhoneResult
  );
}




    $("#quote_contact_email").focusout(function(){
      IsValidEmail($("#quote_contact_email").val());
    });
    $("#quote_contact_tel").focusout(function(){
      IsValidPhone($("#quote_contact_tel").val());
    })
      $("#btnNext").on("click", function(){
        if($("#quote_contact_dob").val() == false)
        {
            $(".quote_contact_dob_error").text("Please enter your date of birth");
            $("#quote_contact_dob").css("border-color", "red");
            error = true;
        }else if($("#quote_contact_email").val() == false)
        {
            $(".quote_contact_email_error").text("Please enter your email id");
            $("#quote_contact_email").css("border-color", "red");
            error = true;
        }else if($("#quote_contact_tel").val() == false)
        {
            $(".quote_contact_tel_error").text("Please enter your telephone number");
            $("#quote_contact_tel").css("border-color", "red");
            error = true;
        }else if($("#quote_contact_email_valid").val() != "1")
        {
            $(".quote_contact_email_error").text("Please enter a valid email id");
            $("#quote_contact_email").css("border-color", "red");
            error = true;
        }else if($("#quote_contact_tel_valid").val() != "1")
        {
            $(".quote_contact_tel_error").text("Please enter a valid Phone number");
            $("#quote_contact_tel").css("border-color", "red");
            error = true;
        }else{
          $("#btnNext").attr("disabled", true);
          setTimeout(() => {
              $("#frmStep9").submit();
            }, 2000);        
          
        }
        
    });    

    </script>