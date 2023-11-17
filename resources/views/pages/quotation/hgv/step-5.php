<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();


$error_message = ""; 
if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_vehicle_usage'] = $_POST['quote_vehicle_usage'];
    $_SESSION['leads']['quote_vehicle_hazardous'] = $_POST['quote_vehicle_hazardous'];
    @header('location: step-6.html');
    
    
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:50%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep5" id="frmStep5">  
      <input type="hidden" name="next" value="1">   
    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <h1 class="display-4 fw-normal">Vehicle Usage</h1>
        <p class="fs-5 text-muted">How will you be using the vehicle and if it's any hazardous goods?</p>
        
            <div class="bd-example">
                <div class="form-floating mb-3">
                    <select class="form-control" name="quote_vehicle_usage" id="quote_vehicle_usage">
                        <option value="">- please select -</option>
                        <option value="Carriage Of Own Goods">Carriage Of Own Goods</option>
                        <option value="Haulage">Haulage</option>
                        <option value="Social, Domestic &amp; Pleasure">Social, Domestic &amp; Pleasure</option>
                        <option value="Other">Other</option>
                    </select>
                <label for="floatingInput" class="quote_vehicle_usage_error">Main Use/Activity</label>
                </div>
                
                <div class="help-box"><p>Will you be carry any hazardous good, such as; flammable materials, gases, explosives, poisons, radioactive or corrosive materials.</p></div>
                
                <div class="form-floating mb-3">
                    <select class="form-control" name="quote_vehicle_hazardous" id="quote_vehicle_hazardous">
                        <option value="">- please select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                <label for="floatingInput" class="quote_vehicle_hazardous_error">Hazardous Goods</label>
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
 	if($("#quote_vehicle_usage").val() == false)
	{
		$(".quote_vehicle_usage_error").text("Please select main use/activity");
		$(".quote_vehicle_usage_error").css("color", "red");
		return false;
	}else if($("#quote_vehicle_hazardous").val() == false)
	{
		$(".quote_vehicle_hazardous_error").text("Please enter the vehicles make & model");
		$(".quote_vehicle_hazardous_error").css("color", "red");
		return false;
    }else{
		$("#frmStep5").submit();
	}
 })

 </script>
  <?php include("footer.php")?>

