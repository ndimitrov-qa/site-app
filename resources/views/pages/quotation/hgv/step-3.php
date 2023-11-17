<?php
session_start();
include("../config/mydb.php");
 

$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   
$address_line1 = '';
$address_line1 = '';
$address_line2 = '';
$locality = '';
$region = '';
$postal_code = '';

if(isset($_SESSION['leads']['quote_company_address']) && $_SESSION['leads']['quote_company_address'] != "")
{
    $address = json_decode(base64_decode($_SESSION['leads']['quote_company_address']));
    
    $address_line1 = isset($address->premises)? $address->premises . ", " : '';
    $address_line1 .= isset($address->address_line_1)? $address->address_line_1 : '';
    $address_line2 = isset($address->address_line_2)? $address->address_line_2 : '';
    $locality = isset($address->locality) ? $address->locality : '';
    $region = isset($address->region)? $address->region : '';
    $postal_code = isset($address->postal_code)?$address->postal_code : '';

}

if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['lead_contact_adddressline1'] = $_POST['lead_contact_adddressline1'];
    $_SESSION['leads']['lead_contact_adddressline2'] = $_POST['lead_contact_adddressline2'];
    $_SESSION['leads']['lead_contact_town'] = $_POST['lead_contact_town'];
    $_SESSION['leads']['lead_contact_county'] = $_POST['lead_contact_county'];
    $_SESSION['leads']['lead_contact_postcode'] = $_POST['lead_contact_postcode'];
    @header('location: step-4.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:30%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep3" id="frmStep3">  
        <input type="hidden" name="next" value="1">    
        <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
          <h1 class="display-4 fw-normal">Location</h1>
            <p class="fs-5 text-muted">What is business or operating postcode and where do you operate?</p>
            <div class="help-box manual_address <?=($postal_code == "") ? "d-none":'';?>"><p>We've found the following address for <?=$_SESSION['leads']['quote_company_name']?> from Companies House. <a href="javascript:;" class="postcode_address_search">If it's wrong or you need to amend it, click here</a></p></div>
            <div class="help-box manual_postcode_address <?=($postal_code != "") ? "d-none":'';?>"><p>Type in your postcode below and click <strong>Search</strong>. <a href="javascript:;" class="address_not_found">Address or postcode not found? Click here</a></p></div>
                <div class="bd-example manual_address">
                    <?php if($address_line1 !=""){?>
                    <h5><?=$address_line1?></h5>
                    <?php }?>
                    <?php if($address_line2 !=""){?>
                    <h5><?=$address_line2?></h5>
                    <?php }?>
                    <?php if($locality !=""){?>
                    <h5><?=$locality?></h5>
                    <?php }?>
                    <?php if($region !=""){?>
                    <h5><?=$region?></h5>
                    <?php }?>
                    <?php if($postal_code !=""){?>
                    <h5><?=$postal_code?></h5>
                    <?php }?>
                    
                </div>
                <div class="bd-example manual_postcode_address <?=($postal_code != "") ? "d-none":'';?>">
                  <div class="form-floating mb-3 postcode_field">                        
                            <div id="context"></div> 
                    </div>
                    <div class="form-floating mb-3">
                        
                            <input class="form-control" type="text" name="lead_contact_adddressline1" id="lead_contact_adddressline1" value="<?=$address_line1?>">
                            <label for="floatingInput" class="error lead_contact_adddressline1_error">Address Line 1</label>
                    </div>
                    <div class="form-floating mb-3">
                        
                            <input class="form-control" type="text" name="lead_contact_adddressline2" id="lead_contact_adddressline2" value="<?=$address_line2?>">
                            <label for="floatingInput" class="error ">Address Line 2</label>
                    </div>
                    <div class="form-floating mb-3">
                       
                            <input class="form-control" type="text" name="lead_contact_town" id="lead_contact_town" value="<?=$locality?>" >
                            <label for="floatingInput" class="error lead_contact_town_error">Town/City</label>
                    </div>
                    <div class="form-floating mb-3">
                       
                            <input class="form-control" type="text" name="lead_contact_county" id="lead_contact_county" value="<?=$region?>" >
                            <label for="floatingInput" class="error lead_contact_county_error">County</label>
                    </div>
                    <div class="form-floating mb-3">
                       
                            <input class="form-control" type="text" name="lead_contact_postcode" id="lead_contact_postcode" value="<?=$postal_code?>" >
                            <label for="floatingInput" class="error lead_contact_postcode_error">Postcode</label>
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
      line_1: "#lead_contact_adddressline1",
      line_2: "#lead_contact_adddressline2",
      post_town: "#lead_contact_town",
      county: "#lead_contact_county",
      postcode: "#lead_contact_postcode",
    },
  });
  $(".postcode_address_search").on("click", function(){
        $(".manual_address").addClass("d-none");
        $(".manual_postcode_address").removeClass("d-none");
        $("#lead_contact_adddressline1").val('');
        $("#lead_contact_adddressline2").val('');
        $("#lead_contact_town").val('');
        $("#lead_contact_county").val('');
        $("#lead_contact_postcode").val('');
  })

  $(".address_not_found").on("click", function(){
        $(".postcode_field").addClass("d-none");
        $(".help-box p").html("Please enter your full business address.");
        $("#lead_contact_adddressline1").attr("readonly", false).val('');
        $("#lead_contact_adddressline2").attr("readonly", false).val('');
        $("#lead_contact_town").attr("readonly", false).val('');
        $("#lead_contact_county").attr("readonly", false).val('');
        $("#lead_contact_postcode").attr("readonly", false).val('');
  })


    $("#btnNext").on("click", function(){
        if($("#lead_contact_adddressline1").val() == false)
        {
            $(".lead_contact_adddressline1_error").text("Please enter business address line 1");
            $("#lead_contact_adddressline1").css("border-color", "red");
        }else if($("#lead_contact_town").val() == false)
        {
            $(".lead_contact_town_error").text("Please enter business town");
            $("#lead_contact_town").css("border-color", "red");
        // }else if($("#lead_contact_county").val() == false)
        // {
        //     $(".lead_contact_county_error").text("Please enter business county");
        //     $("#lead_contact_county").css("border-color", "red");
        }else if($("#lead_contact_postcode").val() == false)
        {
            $(".lead_contact_postcode_error").text("Please enter business location postcode");
            $("#lead_contact_postcode").css("border-color", "red");
        }else{
            $("#frmStep3").submit();
        }
    })
    </script>