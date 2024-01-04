<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Fleet Insurance - Beat That Quotes</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="canonical" href="https://www.beatthatquotes.com/compare/fleet-insurance/">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
      <link href="css/loading/select2.css" rel="stylesheet">
      <link href="css/loading/bootstrap.min.css" rel="stylesheet">
      <link href="css/loading/pricing.css" rel="stylesheet">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="../assets/dist/date-picker/jquery-ui.js"></script>
      <script src="../assets/dist/date-picker/date-picker.js"></script>

        <script type="text/javascript" src="https://webservices.data-8.co.uk/javascript/loader.ashx?key=I8X6-X4HH-MU2M-PMSA&load=PhoneValidation,EmailValidation"></script>
        <!-- <script type="text/javascript" src="https://webservices.data-8.co.uk/javascript/jqueryvalidation_min.js"></script> -->

      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @keyframes progressAnimation {
        from {
            width: 0%;
        }
        to {
            width: 100%;
        }
        }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      ul#list_company{
	  white-space:nowrap;
	  padding:0px;
	}
	ul#list_company li{
	  list-style: none;
		padding: 5px;
		background: #ddd;
		border-bottom: 1px solid #fff;
	}

    .container {
        max-width: 960px;
        height: 100vh;
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


    <div class="d-flex align-items-center justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">

    <h2>
        <strong role="status">We are matching you with a provider ...</strong>
    </h2>
    </div>

    <div class="progress" style="height: 60px">
        <div class="progress-bar bg-purple" style="width: 0%; height: 60px; animation: progressAnimation 6s linear forwards;"></div>
    </div>


  </header>


  <footer class="pt-4 pt-md-5">
<div class="row text-center">
<div class="col-12 col-md">
    <small class="d-block mb-3 text-muted"><div class="terms">&copy; 2023 Nova Connect. Beat That Quotes is a trading name of Nova Connect (UK) Ltd. Company Registration Number 09376126. Registered Office : 3 Redwing Court Business Centre, Ashton Road, Romford, Essex, RM3 8QQ</div></small>
  </div>

</div>
</footer>
</div>
</body>
</html>  <script>
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

<script>
    $(document).ready(function() {
        // Function to redirect to www.test.com
        function redirectToTest() {
            window.location.href = "https://quote.beatthatquotes.com/insurance/thank-you";
        }

        // CSS animation
        $(".progress-bar").on("animationend", function() {
            // When the animation is complete, trigger the redirect
            redirectToTest();
        });
    });
</script>
