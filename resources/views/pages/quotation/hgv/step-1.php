<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   

if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_contact_firstname'] = $_POST['quote_contact_firstname'];
    $_SESSION['leads']['quote_contact_lastname'] = $_POST['quote_contact_lastname'];
    @header('location: step-2.html');
}
include("header.php");
?>

      <div class="progress" style="height:20px">
          <div class="progress-bar bg-purple" style="width:10%;height:20px"></div>
      </div>
      <form action="" method="post" name="frmStep1" id="frmStep1">  
        <input type="hidden" name="next" value="1">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
        <h1 class="display-4 fw-normal">Good <?=$greeting_text?></h1>
            <p class="fs-5 text-muted">Can we start by taking your name</p>
            <div class="bd-example">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="quote_contact_firstname" id="quote_contact_firstname" placeholder="First Name" value="" required>
                <label for="floatingInput" class="error firstname_error">First Name</label>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="quote_contact_lastname" id="quote_contact_lastname" placeholder="Last Name" value="" required>
                <label for="floatingInput" class="error lastname_error">Last Name</label>
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
        if($("#quote_contact_firstname").val() == false)
        {
            $(".firstname_error").text("Please enter your first name");
            $("#quote_contact_firstname").css("border-color", "red");
        }else if($("#quote_contact_lastname").val() == false)
        {
            $(".lastname_error").text("Please enter your last name");
            $("#quote_contact_lastname").css("border-color", "red");
        }else{
            $("#frmStep1").submit();
        }
    })
    </script>

<?php include("footer.php")?>