<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();

$vehicle_type = ["Articulated (Tanker)","Box (Van)","Breakdown","Cesspool Emptier (Specialist)","Concrete Mixer","Crane","Curtainside","Dropside","Dust Cart","Emergency Services","Farming Vehicle (Specialist)","Flatbed","Fork Lift","Horsebox","Livestock Carrier","Mobile Shop","Mobile Surgery","Other Van","Pantechicon","Pick Up Truck","Recovery","Recycling","Refrigerated (Van)","Refrigerated/Insulated","Rigid (Tanker)","Road Services","Skeletal","Skip Carrier","Tipper","Tipper (Van)","Tractor","Waste Disposal"];
  
if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_cover_vehiclereg'] = $_POST['quote_cover_vehiclereg'];
    $_SESSION['leads']['quote_cover_vehiclemake'] = $_POST['quote_cover_vehiclemake'];
    $_SESSION['leads']['quote_cover_vehicletype'] = $_POST['quote_cover_vehicletype'];
    $_SESSION['leads']['quote_cover_vehicleyear'] = $_POST['quote_cover_vehicleyear'];
    $_SESSION['leads']['quote_cover_vehicleweight'] = $_POST['quote_cover_vehicleweight'];
    $_SESSION['leads']['quote_vehicle_ncd'] = $_POST['quote_vehicle_ncd'];

    @header('location: step-5.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:40%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep4" id="frmStep4">  
      <input type="hidden" name="next" value="1">  
    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <h1 class="display-4 fw-normal">Vehicle Details</h1>
        <p class="fs-5 text-muted">What vehicle are you looking to be covered?</p>
        <div class="help-box"><p>Please enter the <strong>Vehicle Registration</strong> and click <strong>Search</strong>. We'll search DVLA for the details</p></div>
            <div class="bd-example">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="quote_cover_vehiclereg" id="quote_cover_vehiclereg" placeholder="Vehicle Registration" value="" ><label for="floatingInput" class="quote_cover_vehiclereg_error">Vehicle Registration</label>
                </div>
            </div>
            <div class="bd-example" style="border:2px solid #eee; padding:20px 40px 20px 40px;border-radius:5px">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="quote_cover_vehiclemake" id="quote_cover_vehiclemake" placeholder="Make &amp; odel" value=""><label for="floatingInput" class="quote_cover_vehiclemake_error">Make &amp; Model</label>
                </div>
                <div class="form-floating mb-3">
                <select class="form-control" name="quote_cover_vehicletype" id="quote_cover_vehicletype">
                        <option value="">- please select -</option>
                        <?php foreach($vehicle_type as $vc){?>
                        <option value="<?=$vc?>"><?=$vc?></option>
                        <?php }?>
                </select>
                    <label for="floatingInput" class="quote_cover_vehicletype_error">Type</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="quote_cover_vehicleyear" id="quote_cover_vehicleyear" placeholder="Year Of Manufacture" value=""><label for="floatingInput" class="quote_cover_vehicleyear_error">Year Of Manufacture</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="quote_cover_vehicleweight" id="quote_cover_vehicleweight" placeholder="Gross Weight" value=""><label for="floatingInput" class="quote_cover_vehicleweight_error">Gross Weight</label>
                </div>
                
            </div>
        
        <br>
        
        <div class="form-floating mb-3">
                    <select class="form-control" name="quote_vehicle_ncd" id="quote_vehicle_ncd">
                        <option value="">- please select -</option>
                        <option value="0 Years">0 Years</option>
                        <option value="1 Year">1 Year</option>
                        <option value="2 Years">2 Years</option>
                        <option value="3 Years">3 Years</option>
                        <option value="4 Years">4 Years</option>
                        <option value="5 Years">5 Years</option>
                        <option value="6 Years">6 Years</option>
                        <option value="7 Years">7 Years</option>
                        <option value="8 Years">8 Years</option>
                        <option value="9 Years">9 Years</option>
                        <option value="10 Years">10 Years</option>
                        <option value="10+ Years">10+ Years</option>
                    </select>
                <label for="floatingInput" class="quote_vehicle_ncd_error">Years No Claims Bonus</label>
                </div>
    </div>
    <main>
                <button type="submit" class="w-100 btn btn-primary btn-lg"   name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>

  <script>
 $("#btnNext").on("click", function(){ 
 	if($("#quote_cover_vehiclereg").val() == false)
	{
		$(".quote_cover_vehiclereg_error").text("Please enter a vehicle registration");
		$(".quote_cover_vehiclereg_error").css("color", "red");
		return false;
	}else if($("#quote_cover_vehiclemake").val() == false)
	{
		$(".quote_cover_vehiclemake_error").text("Please enter the vehicles make & model");
		$(".quote_cover_vehiclemake_error").css("color", "red");
		return false;
    }else if($("#quote_cover_vehicletype").val() == false)
	{
		$(".quote_cover_vehicletype_error").text("Please enter the vehicles type");
		$(".quote_cover_vehicletype_error").css("color", "red");
		return false;
    }else if($("#quote_cover_vehicleyear").val() == false)
	{
		$(".quote_cover_vehicleyear_error").text("Please enter the vehicles year of manufacture");
		$(".quote_cover_vehicleyear_error").css("color", "red");
		return false;
    }else if($("#quote_cover_vehicleweight").val() == false)
	{
		$(".quote_cover_vehicleweight_error").text("Please enter the vehicles type");
		$(".quote_cover_vehicleweight_error").css("color", "red");
		return false;
    }else if($("#quote_vehicle_ncd").val() == false)
	{
		$(".quote_vehicle_ncd_error").text("Please select years no claim bonus");
		$(".quote_vehicle_ncd_error").css("color", "red");
		return false;
	}else{
		$("#frmStep4").submit();
	}
 })

 </script>
  <?php include("footer.php")?>
