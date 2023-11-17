<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
 

if(isset($_REQUEST['next']))
{

    $_SESSION['leads']['quote_cover_start'] = $_POST['quote_cover_start'];
    $_SESSION['leads']['quote_cover_type'] = $_POST['quote_cover_type'];
    $_SESSION['leads']['quote_cover_drivers'] = $_POST['quote_cover_drivers'];
    
    @header('location: step-8.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:60%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep7" id="frmStep7">  
            <input type="hidden" name="next" value="1">  
            <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
            <h1 class="display-4 fw-normal">Cover Requirements</h1>
                <p class="fs-5 text-muted">When do you need cover from and who will be driving?</p>
                
                <div class="bd-example">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="quote_cover_start" autocomplete="off" id="quote_cover_start" placeholder="Cover Start Date" value="" >
                        <label for="floatingInput" class="quote_cover_start_error">Cover Start Date</label>
                    </div>
                        
                    <div class="form-floating mb-3">
                            <select class="form-control" name="quote_cover_type" id="quote_cover_type">
                                <option value="">- please select -</option>
                                <option value="Comprehensive">Comprehensive</option>
                                <option value="Third Party, Fire &amp; Theft">Third Party, Fire &amp; Theft</option>
                                <option value="Third Party">Third Party</option>
                            </select>
                        <label for="floatingInput" class="quote_cover_type_error">Cover Required</label>
                        </div>
                    
                        <div class="form-floating mb-3">
                            <select class="form-control" name="quote_cover_drivers" id="quote_cover_drivers">
                                <option value="">- please select -</option>
                                <option value="Insured Only">Insured Only</option>
                                <option value="Insured + 1 Named Driver">Insured + 1 Named Driver</option>
                                <option value="Insured + 2 Named Drivers">Insured + 2 Named Drivers</option>
                                <option value="Any driver over 21">Any driver over 21</option>
                                <option value="Any driver over 23">Any driver over 23</option>
                                <option value="Any driver over 25">Any driver over 25</option>
                                <option value="Any driver over 27">Any driver over 27</option>
                                <option value="Any driver over 30">Any driver over 30</option>
                            </select>
                        <label for="floatingInput" class="quote_cover_drivers_error">Who will be driving</label>
                        </div>
                </div>
            </div>
            <main>
                <button type="submit" class="w-100 btn btn-primary btn-lg"   name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>
  <script>
     $( function() {
      $( "#quote_cover_start" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          dateFormat: "d/m/yy"
        });
    } );
    $("#btnNext").on("click", function(){ 
        if($("#quote_cover_start").val() == false)
        {
            $(".quote_cover_start_error").text("Please select cover start date");
            $(".quote_cover_start_error").css("color", "red");
            return false;
        }else if($("#quote_cover_type").val() == false)
        {
            $(".quote_cover_type_error").text("Please select quote cover type");
            $(".quote_cover_type_error").css("color", "red");
            return false;
        }else if($("#quote_cover_drivers").val() == false)
        {
            $(".quote_cover_drivers_error").text("Please select who will be driving");
            $(".quote_cover_drivers_error").css("color", "red");
            return false;
        }else{
            $("#frmStep7").submit();
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