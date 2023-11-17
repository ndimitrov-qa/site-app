<?php
session_start();
if(!isset($_SESSION['leads']['quote_contact_firstname']) && $_SESSION['leads']['quote_contact_firstname'] == "")
    @header("location:index.html");

include("../config/mydb.php");
$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   
  
if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_company_name'] = $_POST['quote_company_name'];
    $_SESSION['leads']['quote_company_age'] = $_POST['quote_company_age_hidden'];
    $_SESSION['leads']['quote_company_address'] = $_POST['company_address'];
    $_SESSION['leads']['quote_company_number'] = $_POST['company_number'];
    @header('location: step-3.html');
}
include("header.php");
?>


      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:20%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep2" id="frmStep2">  
        <input type="hidden" name="next" value="1"> 
        <input type="hidden" name="quote_company_age_hidden" id="quote_company_age_hidden" value="">
        <input type="hidden" name="company_number" id="company_number" value="">
        <input type="hidden" name="company_address" id="company_address" value=""> 
    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <h1 class="display-4 fw-normal">Thanks <?=$_SESSION['leads']['quote_contact_firstname']?></h1>
        <p class="fs-5 text-muted">What company name will the HGV be insured under?</p>
        <div class="help-box"><p>Start typing your company name and we'll search Companies House. <a href="javascript:;" class="no_limited_company">Is the business not a limited company or a sole trader? Click here</a></p> </div>
            <div class="bd-example">
                <div class="form-floating mb-3">
                <input type="text" class="form-control quote_company_name" name="quote_company_name" id="quote_company_name" placeholder="Company Name" value="" autocomplete="OFF" >
                <label for="floatingInput" class="error company_name_error">Company Name</label>
                </div>
                <ul id="list_company"></ul>
                <div class="form-floating mb-3">
                    <select class="form-control" name="quote_company_age"  id="quote_company_age">
                        <option value="">- please select -</option>
                        <?php for($i=date("Y"); $i >= 1900; $i--)
                        {
                            echo '<option value="'.$i.'">' .$i. '</option>';
                        }
                        ?>
                    </select>
                <label for="floatingInput" class="quote_company_age_error">Year Business Established</label>
                </div>
            </div>
    </div>
    <main>
            <button type="button" class="w-100 btn btn-primary btn-lg" name="nextgo" id="btnNext" value="nextgo">Next</button>
        </main>
</form>
  </header>

  <script>
    $("#btnNext").on("click", function(){
        if($("#quote_company_name").val() == false)
        {
            $(".company_name_error").text("Please enter your company name");
            $("#quote_company_name").css("border-color", "red");
        }else if($("#quote_company_age").val() == false)
        {
            $(".quote_company_age_error").text("Please select business established year");
            $("#quote_company_age").css("border-color", "red");
        }else{
            $("#frmStep2").submit();
        }
    })
    </script>

<script>
    $("#quote_company_age").on("change", function(){ $("#quote_company_age_hidden").val($(this).val());});
    $(".no_limited_company").on("click", function(){ 
        $(".help-box p").html("Please enter your full trading name.");
        $("#quote_company_name").removeClass("quote_company_name");
        $("#quote_company_age").val('').attr("disabled", false);
    })
$("#frmStep2").on("keyup", ".quote_company_name", function(){
	var comp_qry = $(this).val();
	if(comp_qry.length > 2){
		$.ajax({
			type: "POST",
			url: 'get_company_list.html',
			data: {'q':comp_qry},
			dataType: "json",
			success: function (data) {
				list_li = "";
				$(data.company).each(function(index){
					list_li += '<li><a href="javascript:;"  class="company_list" data-name="' + this.title + '" data-year="'+ this.established_year +'" data-cnumber="'+ this.company_number +'" data-address="'+ this.address +'">' + this.title + '</a></li>';
				});
				
				$("#list_company").html(list_li);
			}
		});
	}	
})

$("#list_company").on("click", ".company_list", function(){
	var current_comp = $(this).attr("data-name");
    var company_year = $(this).attr("data-year");
    var company_cnumber = $(this).attr("data-cnumber");
    var company_address = $(this).attr("data-address");
	$("#quote_company_name").val(current_comp);
    $("#quote_company_age_hidden").val(company_year);
    $("#quote_company_age").val(company_year).attr('disabled', true);
    $("#company_number").val(company_cnumber);
    $("#company_address").val(company_address);
	$("#list_company").text('');
})
 </script>
  <?php include("footer.php")?>
