<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();


if(isset($_REQUEST['next']))
{

    $_SESSION['leads']['quote_cover_vehicletype'] = $_POST['quote_cover_vehicletype'];
    $_SESSION['leads']['quote_cover_vehiclereg'] = $_POST['quote_cover_vehiclereg'];
    $_SESSION['leads']['quote_cover_vehiclevalue'] = $_POST['quote_cover_vehiclevalue'];
    $_SESSION['leads']['quote_cover_vehiclehistory'] = $_POST['quote_cover_vehiclehistory'];    

    @header('location: step-8.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:60%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep7" id="frmStep7">  
        <input type="hidden" name="next" value="1">     
        <div class="pricing-header p-3 pb-md-4 mx-auto text-left" id="vehicle_area">
          <h1 class="display-4 fw-normal">Vehicles</h1>
            <p class="fs-5 text-muted">What vehicles are you looking to be covered?</p>
            <div class="help-box"><p>Please add at least 2 vehicles to be eligible for fleet, clicking <strong>Add Vehicle</strong> to add more.</p></div>
                <div class="bd-example vehicle_row" style="border:2px solid orange; padding:20px 40px 20px 40px;border-radius:5px">
                    <p><strong>VEHICLE 1</strong></p>
                    <div class="form-floating mb-3">
                        <select class="form-control quote_cover_vehicletype" name="quote_cover_vehicletype[]" id="" required>
                            <option value="">- please select -</option>
                            <option value="Car">Car</option>
                            <option value="HGV">HGV</option>
                            <option value="Minibus">Minibus</option>
                            <option value="Motorbike">Motorbike</option>
                            <option value="Lorry">Lorry</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Taxi">Taxi</option>
                            <option value="Van">Van</option>
                        </select>
                    <label for="floatingInput" class="quote_cover_vehicletype_error">Vehicle Type</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control quote_cover_vehiclereg" name="quote_cover_vehiclereg[]" required id="" placeholder="Vehicle Registration" value="" >
                        <label for="floatingInput" class="quote_cover_vehiclereg_error">Vehicle Registration</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control quote_cover_vehiclevalue" name="quote_cover_vehiclevalue[]" required id="" placeholder="Vehicle Value (£)" value="" >
                        <label for="floatingInput" class="quote_cover_vehiclevalue_error">Vehicle Value (£)</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control quote_cover_vehiclehistory" name="quote_cover_vehiclehistory[]" id="" required>
                            <option value="">- please select -</option>
                            <option value="CCE Rated">CCE Rated</option>
                            <option value="NCD (1 year or less)">NCD (1 year or less)</option>
                            <option value="NCD (2 years)">NCD (2 years)</option>
                            <option value="NCD (3 years)">NCD (3 years)</option>
                            <option value="NCD (4 years)">NCD (4 years)</option>
                            <option value="NCD (5 years)">NCD (5 years)</option>
                            <option value="NCD (6 years)">NCD (6 years)</option>
                            <option value="NCD (7 years)">NCD (7 years)</option>
                            <option value="NCD (8 years)">NCD (8 years)</option>
                            <option value="NCD (9 years)">NCD (9 years)</option>
                            <option value="NCD (10 years)">NCD (10 years)</option>
                            <option value="NCD (10+ years)">NCD (10+ years)</option>
                            <option value="No Current Insurance/New Vehicle">No Current Insurance/New Vehicle</option>
                        </select>
                    <label for="floatingInput" class="quote_cover_vehiclehistory_error">Vehicle Insurance History</label>
                    </div>
                </div>
                <div class="bd-example mt-2 vehicle_row" style="border:2px solid orange; padding:20px 40px 20px 40px;border-radius:5px">
                    <p><strong>VEHICLE 2</strong></p>
                    <div class="form-floating mb-3">
                        <select class="form-control quote_cover_vehicletype" name="quote_cover_vehicletype[]" id="" required>
                            <option value="">- please select -</option>
                            <option value="Car">Car</option>
                            <option value="HGV">HGV</option>
                            <option value="Minibus">Minibus</option>
                            <option value="Motorbike">Motorbike</option>
                            <option value="Lorry">Lorry</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Taxi">Taxi</option>
                            <option value="Van">Van</option>
                        </select>
                    <label for="floatingInput" class="quote_cover_vehicletype_error">Vehicle Type</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control quote_cover_vehiclereg" name="quote_cover_vehiclereg[]" required id="" placeholder="Vehicle Registration" value="" >
                        <label for="floatingInput" class="quote_cover_vehiclereg_error">Vehicle Registration</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control quote_cover_vehiclevalue" name="quote_cover_vehiclevalue[]" required id="" placeholder="Vehicle Value (£)" value="" >
                        <label for="floatingInput" class="quote_cover_vehiclevalue_error">Vehicle Value (£)</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control quote_cover_vehiclehistory" name="quote_cover_vehiclehistory[]" id="" required>
                            <option value="">- please select -</option>
                            <option value="CCE Rated">CCE Rated</option>
                            <option value="NCD (1 year or less)">NCD (1 year or less)</option>
                            <option value="NCD (2 years)">NCD (2 years)</option>
                            <option value="NCD (3 years)">NCD (3 years)</option>
                            <option value="NCD (4 years)">NCD (4 years)</option>
                            <option value="NCD (5 years)">NCD (5 years)</option>
                            <option value="NCD (6 years)">NCD (6 years)</option>
                            <option value="NCD (7 years)">NCD (7 years)</option>
                            <option value="NCD (8 years)">NCD (8 years)</option>
                            <option value="NCD (9 years)">NCD (9 years)</option>
                            <option value="NCD (10 years)">NCD (10 years)</option>
                            <option value="NCD (10+ years)">NCD (10+ years)</option>
                            <option value="No Current Insurance/New Vehicle">No Current Insurance/New Vehicle</option>
                        </select>
                    <label for="floatingInput" class="quote_cover_vehiclehistory_error">Vehicle Insurance History</label>
                    </div>
                </div>
                <span class="add_more_vehicle"></span>
              <br><p><strong><a href="javascript:;" class="remove_more_btn d-none text-danger">Remove vehicle</a> <a href="javascript:;" class="add_more_btn">Add vehicle</a></strong></p>
        </div>
        <main>
                <button type="button" class="w-100 btn btn-primary btn-lg" name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>

  
  <?php include("footer.php")?>
<script>
 $('.quote_cover_vehiclevalue').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});
      $("#btnNext").on("click", function(){
        // var quote_cover_vehicletype=($(this).find('select[name="quote_cover_vehicletype[]"]').val()).length;
        // var quote_cover_vehiclereg=($("#frmStep7").find('.quote_cover_vehiclereg')).length;
        // var quote_cover_vehiclevalue=($(this).find('input[name="quote_cover_vehiclevalue[]"]').val()).length;
        // var quote_cover_vehiclehistory=($(this).find('select[name="quote_cover_vehiclehistory[]"]').val()).length;
       var no_error = false;
       $('.quote_cover_vehicletype').each(function(){ 
        if($(this).val() == false){
          $(this).next('label').text('Please select vehicle type');
          $(this).css("border-color", "red");
          no_error = true;
          return false;
        }
      });
      $('.quote_cover_vehiclereg').each(function(){ 
        if($(this).val() == false){
          $(this).next('label').text('Please enter vehicle registration number');
          $(this).css("border-color", "red");
          no_error = true;
          return false;
        }
      });
      $('.quote_cover_vehiclevalue').each(function(){ 
        if($(this).val() == false){
          $(this).next('label').text('Please enter vehicle value');
          $(this).css("border-color", "red");
          no_error = true;
          return false;
        }
      });

      $('.quote_cover_vehiclehistory').each(function(){ 
        if($(this).val() == false){
          $(this).next('label').text('Please select vehicle insurance history');
          $(this).css("border-color", "red");
          no_error = true;
          return false;
        }
      });

      if(no_error == false)
      {
        $("#frmStep7").submit();
      }
        // if($(".quote_cover_start").val() == false)
        // {
        //     $(".quote_cover_start_error").text("Please select cover start date");
        // // }else if($("#quote_cover_drivers").val() == false)
        // // {
        // //     $(".quote_cover_drivers_error").text("Please select Who will be driving");
        // }else{
        //     $("#frmStep7").submit();
        // }
    })
    </script>
  <script>
     $( function() {
      
            var row = 2;
            $(".add_more_btn").on("click", function(){
              row = row+1;
              var vehicle = '<div class="bd-example mt-2 vehicle_row'+ row +'" style="border:2px solid orange; padding:20px 40px 20px 40px;border-radius:5px ">' +
                '<p><strong>VEHICLE '+ row +'</strong></p>' +
                '<div class="form-floating mb-3">' +
                    '<select class="form-control quote_cover_vehicletype" name="quote_cover_vehicletype[]" id="" required>' +
                        '<option value="">- please select -</option>' +
                        '<option value="Car">Car</option>' +
                        '<option value="HGV">HGV</option>' +
                        '<option value="Minibus">Minibus</option>' +
                        '<option value="Motorbike">Motorbike</option>' +
                        '<option value="Lorry">Lorry</option>' +
                        '<option value="Pickup">Pickup</option>' +
                        '<option value="Taxi">Taxi</option>' +
                        '<option value="Van">Van</option>' +
                    '</select>' +
                '<label for="floatingInput" class="quote_cover_vehicletype_error">Vehicle Type</label>' +
                '</div>' +
                '<div class="form-floating mb-3">' +
                    '<input type="text" class="form-control quote_cover_vehiclereg" name="quote_cover_vehiclereg[]" required placeholder="Vehicle Registration" value="" ><label for="floatingInput" class="error quote_cover_vehiclereg_error">Vehicle Registration</label>' +
                '</div>' +
                '<div class="form-floating mb-3">' +
                    '<input type="text" class="form-control quote_cover_vehiclevalue" name="quote_cover_vehiclevalue[]" required placeholder="Vehicle Value (£)" value="" ><label for="floatingInput" class="error quote_cover_vehiclevalue_error">Vehicle Value (£)</label>' +
                '</div>' +
                '<div class="form-floating mb-3">' +
                    '<select class="form-control quote_cover_vehiclehistory" name="quote_cover_vehiclehistory[]" required>' +
                        '<option value="">- please select -</option>' +
                        '<option value="CCE Rated">CCE Rated</option>' +
                        '<option value="NCD (1 year or less)">NCD (1 year or less)</option>' +
                        '<option value="NCD (2 years)">NCD (2 years)</option>' +
                        '<option value="NCD (3 years)">NCD (3 years)</option>' +
                        '<option value="NCD (4 years)">NCD (4 years)</option>' +
                        '<option value="NCD (5 years)">NCD (5 years)</option>' +
                        '<option value="NCD (6 years)">NCD (6 years)</option>' +
                        '<option value="NCD (7 years)">NCD (7 years)</option>' +
                        '<option value="NCD (8 years)">NCD (8 years)</option>' +
                        '<option value="NCD (9 years)">NCD (9 years)</option>' +
                        '<option value="NCD (10 years)">NCD (10 years)</option>' +
                        '<option value="NCD (10+ years)">NCD (10+ years)</option>' +
                        '<option value="No Current Insurance/New Vehicle">No Current Insurance/New Vehicle</option>' +
                    '</select>' +
                '<label for="floatingInput" class="quote_cover_vehiclehistory_error">Vehicle Insurance History</label>' +
                '</div>' +
            '</div>';
              $(".add_more_vehicle").before(vehicle);
              if(row > 2)
              {
                $(".remove_more_btn").removeClass("d-none");
              }
            });

            $(".remove_more_btn").on("click", function(){
              $(".vehicle_row" + row).remove();
              row = row - 1;
              if(row == 2)
              {
                $(".remove_more_btn").addClass("d-none");
              }
            });
    });
    </script>