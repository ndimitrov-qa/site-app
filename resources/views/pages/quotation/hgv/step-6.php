<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();

if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_license_years'] = $_POST['quote_license_years'];
    $_SESSION['leads']['quote_license_type'] = $_POST['quote_license_type'];
    $_SESSION['leads']['quote_license_operators'] = $_POST['quote_license_operators'];

    @header('location: step-7.html');
}
include("header.php");
?>

    <div class="progress" style="height:20px">
        <div class="progress-bar bg-purple" style="width:50%;height:20px"></div>
    </div>
    <form action="" method="post" name="frmStep6" id="frmStep6">  
    <input type="hidden" name="next" value="1"> 
      
    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <h1 class="display-4 fw-normal">Licence Details</h1>
        <p class="fs-5 text-muted">We need a few details about the license(s) you hold</p>
        
            <div class="bd-example">
                <div class="form-floating mb-3">
                    <select class="form-control" name="quote_license_type" id="quote_license_type">
                        <option value="">- please select -</option>
                        <option value="UK - Car &amp; Van (Category B/BE)">UK - Car &amp; Van (Category B/BE)</option>
                        <option value="UK - HGV (Category C1/C1E)">UK - HGV (Category C1/C1E)</option>
                        <option value="UK - HGV (Category C)">UK - HGV (Category C)</option>
                        <option value="EU Licence">EU Licence</option>
                        <option value="International">International</option>
                        <option value="Other">Other</option>
                    </select>
                <label for="floatingInput" class="quote_license_type_error">Driving License Held</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-control" name="quote_license_years" id="quote_license_years">
                        <option value="">- please select -</option>
                        <option value="1 year or less">1 year or less</option>
                        <option value="2 years">2 years</option>
                        <option value="3 years">3 years</option>
                        <option value="4 years">4 years</option>
                        <option value="5 years">5 years</option>
                        <option value="6 years">6 years</option>
                        <option value="7 years">7 years</option>
                        <option value="8 years">8 years</option>
                        <option value="9 years">9 years</option>
                        <option value="10 years">10 years</option>
                        <option value="10+ years">10+ years</option>
                    </select>
                <label for="floatingInput" class="quote_license_years_error">Years License Held</label>
                </div>
                
        <div class="help-box"><p>You will usually need a licence to carry goods in a lorry, van or other vehicle with either: A gross plated weight of over 3,500 kg or an unladen weight of more than 1,525 kg.</p></div>
                
                <div class="form-floating mb-3">
                    <select class="form-control" name="quote_license_operators" id="quote_license_operators">
                        <option value="">- please select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                <label for="floatingInput" class="quote_license_operators_error">Operators Licence Held</label>
                </div>
                
               <div class="form-floating mb-3 d-none" id="quote_license_operators_fld">
                <input type="text" class="form-control" name="quote_license_operators_val" id="quote_license_operators_val" placeholder="Operators Licence Number" value="" >
                <label for="floatingInput" class="quote_license_operators_val_error">Operators Licence Number</label>
                </div>

            </div>
    </div>
    <main>
                <button type="submit" class="w-100 btn btn-primary btn-lg"   name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>

  <script>
    $("#btnNext").on("click", function(){ 
        if($("#quote_license_type").val() == false)
        {
            $(".quote_license_type_error").text("Please select driving license held");
            $(".quote_license_type_error").css("color", "red");
            return false;
        }else if($("#quote_license_years").val() == false)
        {
            $(".quote_license_years_error").text("Please select the years license held");
            $(".quote_license_years_error").css("color", "red");
            return false;
        }else if($("#quote_license_operators").val() == false)
        {
            $(".quote_license_operators_error").text("Please select operators licence held");
            $(".quote_license_operators_error").css("color", "red");
            return false;
        }else if($("#quote_license_operators").val() == "Yes" && $("#quote_license_operators_val").val() == false)
        {
            $(".quote_license_operators_val_error").text("Please select operators licence number");
            $(".quote_license_operators_val_error").css("color", "red");
            return false;
        }else{
            $("#frmStep5").submit();
        }
    });

    $("#quote_license_operators").on("change", function(){
        if($(this).val() == "Yes"){
            $("#quote_license_operators_fld").removeClass("d-none");
        }else{
            $("#quote_license_operators_val").val(""); 
            $("#quote_license_operators_fld").addClass("d-none");   
        }
    })
    </script>
  <?php include("footer.php")?>