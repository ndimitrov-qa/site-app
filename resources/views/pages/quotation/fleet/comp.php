<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<input type="text" name="comp" id="comp" value="">
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var body = {
    grant_type: 'password',
    username: 'grant.joiner@nova-insurance.com',
    password: '26thJanuary2015!'
};

$.ajax({
        url: 'http://localhost:9000/token',
        type: 'POST',
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        /* data: JSON.stringify(body), /* wrong */
        data: body, /* right */
        complete: function(result) {
            //called when complete
           // alert(result);
        },

        success: function(result) {
            //called when successful
           // alert(result);
        },

        error: function(result) {
            //called when there is an error
           // alert(result);
        },
    });
$("#comp").on("keypress", function(){
var USERNAME = "grant.joiner@nova-insurance.com";
var PASSWORD = "26thJanuary2015!";
var KEYCODE = "39b28140-7683-4e5a-857c-bd88b8a5aadd";//"1o7XWM6Resp7hVeF9n9o7VYz2ITyt7tpOepI4Utt";
var value = $(this).val()
/*$.ajax
({
  type: "GET",
  url: "https://api.company-information.service.gov.uk/search/companies/",
  dataType: 'json',
  beforeSend: function (xhr) {
  	 xhr.setRequestHeader('Authorization', 'Basic ' + KEYCODE);
	},
  data: {"q" : value},
  crossDomain: true,
  success: function (response){
    console.log(response);
  }
});*/
$.ajax({
    crossDomain: true,
    type: "GET",
	beforeSend: function (xhr) {
   	 xhr.setRequestHeader ("Authorization", "Bearer " +  KEYCODE); 
	},
    url: 'https://api.company-information.service.gov.uk/search/companies',
    data: {'q':'transputec'},
    dataType: "json",
    success: function (data, status) {
        console.log("Success");
        console.log(data);
    },
    error: function (xmlRequest) {
        console.log("Error");
        console.log(xmlRequest);
    }
});
})
//User : grant.joiner@nova-insurance.com
//Password : 26thJanuary2015!
</script>
</html>
