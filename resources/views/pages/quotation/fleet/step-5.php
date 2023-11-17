<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   
 
$error_message = ""; 
if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_cover_history'] = $_POST['quote_cover_history'];
    $target_dir = "../../uploads/";
    $filename   = uniqid() . "-" . time();
    $extension  = pathinfo( $_FILES["vehicle_file"]["name"], PATHINFO_EXTENSION ); 
    $basename   = $filename . "." . $extension;
    $target_file = $target_dir . $basename;
    $error = false;
    if($_FILES["vehicle_file"]["name"] != "")
    {
      if ($_FILES["vehicle_file"]["size"] > 2000000) { // 2MB
        $error_message = "Sorry, File can not be more than 2 MB";
        $error = true;
      }else{
        if (move_uploaded_file($_FILES["vehicle_file"]["tmp_name"], $target_file)) {
          $_SESSION['leads']['quote_cover_vehicle_file'] = $basename;
        }
        @header('location: step-6.html');
      }

    }else{
      @header('location: step-6.html');
    }
    
}
include("header.php");
?>


      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:50%;height:20px"></div>
      </div>
      <form action="" method="post" enctype= "multipart/form-data" name="frmStep5" id="frmStep5"> 
      <input type="hidden" name="next" value="1">  
        <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
          <h1 class="display-4 fw-normal">Current Insurance</h1>
            <p class="fs-5 text-muted">What's your fleet insurance history?</p>
            
            <div class="help-box"><p>Confirmed Claims Experience (CCE) replaces No Claims Discount (NCD), on fleet insurance.</p></div>
        
                <div class="bd-example">
                    <div class="form-floating mb-3">
                        <select class="form-control" name="quote_cover_history" id="quote_cover_history">
                            <option value="">- please select -</option>
                            <option value="CCE Rated (Current Fleet)">CCE Rated (Current Fleet)</option>
                            <option value="CCE Rated (Previous Fleet)">CCE Rated (Previous Fleet)</option>
                            <option value="NCD Rated">NCD Rated</option>
                            <option value="No Previous Insurance">No Previous Insurance</option>
                        </select>
                    <label for="floatingInput" class="quote_cover_history_error">Cover History</label>
                    </div>
                    
            <div class="help-box"><p>You've indicated you are, or have been, fleet rated.  If you have Confirmed Claims Experience (CCE) document please upload it. It's not mandatory and you can provide it at a later date.</p></div>
                    
                    <div class="form-floating mb-3">
                        <input style="padding-left:25px !important; padding-top:3em !important; height:90px !important" accept="jpg,jpeg,gif,pdf,doc,docx,png" type="file" class="form-control" name="vehicle_file" placeholder="Document Upload" value="" autocomplete="off">
                        <ul id="list_company"></ul>
                        <label for="floatingInput" class="error"><?=($error_message !="") ? $error_message : "Document Upload";?></label>
                    </div>
                </div>
        </div>
        <main>
                <button type="button" class="w-100 btn btn-primary btn-lg" name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>

  
  <?php include("footer.php")?>

  <script>
      $("#btnNext").on("click", function(){
        if($("#quote_cover_history").val() == false)
        {
            $(".quote_cover_history_error").text("Please select Cover History");
            $("#quote_cover_history").css("border-color", "red");
        }else{
            $("#frmStep5").submit();
        }
    })
    </script>