<?php
session_start();
include("../config/mydb.php");
$db_con = new MyDatabaseConn();
$greeting_text = $db_con->show_greetings();   
$select_list = array("Accountancy","Antique Dealing","Antique Furniture Repairers","Antique Furniture Retailing","Antiques Retailing","Aquarium Supplier","Armed Services Outfitters","Art Dealing","Art Gallery","Artist Materials Retailing","Arts And Crafts Retailing","Auctioneer","Audio/Visual Media Hiring","Audio/Visual Media Retailing","Baby Goods Retailing","Babywear Retailing","Baker","Bakers Produce Retailing (excluding Baking)","Bakery","Barber","Bathroom Equipment Retailing","Beautician","Beauty Products","Beauty Salon","Beauty Therapy","Bed Retailing","Bedding Retailing","Bookmaking - Off Course","Bookselling","Boutiques","Bridal Wear Retailing","Builders Merchant","Burger Bars","Butcher","Cafe","Cake Making & Decorating","Camping And Outdoor Retailing","Candle Dealing","Car Accessory Dealing","Car Accessory Shop","Car Radio Dealers inc fitting","Carpet Retailing","Cash & Carry","Catalogue Shop","Catering Equipment Supplying","Ceramics And Pottery","Chandlery","Charity Shop","Cheese Retailers","Chemist - Dispensing","Chemist - Non Dispensing","Childrens Clothing Retailing","Christmas Goods Suppliers","Clock & Watch Repair","Clock And Watch Retailing","Clothing Hire - Fancy Dress","Clothing Hiring","Clothing Retailing","Coffee And Tea Retailing","Coffee Shop","Coin & Medal Dealing","Computer Games Retailing","Computer Retailing","Computer Supplies","Confectionery","Confectionery Retailers","Consultant","Consulting Optician","Cosmetics","Curios Retailing","Curtain and Blind Retailers","Cutlery Retailing","Cycle Hiring","Cycle Repairing","Cycle Shop","Dairy Products Retailing","Decorators Merchants","Delicatessen","Department Store","DIY Store","Dog Beautician","Dolls/Dolls House Retailing","Double Glazing","Draper","Dress Agency","Drug Stores","Dry Cleaning","Education Advisory Service","Electrician","Electric Tool Retailers","Electrical Goods (Domestic) Repair","Electrical Goods Hiring - Domestic Appliances","Electrical Goods Hiring - HI FI Audio TV etc.","Electrical Goods Retailing","Engraving","Estate Agency","Fabric Retailing","Fancy Goods Retailing","Farm Produce Retailing","Fashion Accessories Retailing","Fashion Boutique","Fashion Retailing","Fast Food Retailing","Filling Station","Film Processing","Fireplace Retailing","Fish & Chip Shop","Fishing Tackle Retailing","Fishmonger","Florists","Flower Arranging","Food Store","Footwear Retailing","Freezer Centre","Freight and Shipping","Frozen Food Retailing","Fruiterer","Funeral Director","Furniture Retailing","Garden Centre","Garden Equipment Retailing","Garden Supplies Shop","General Store","Gift Shop","Glass Merchants","Glassware Retailers","Glazier","Goldsmith","Golf Equipment Retailing","Golf Professionals Shop","Gown Trade","Greengrocer","Greeting Card Retailing","Grocer - Licensed","Grocer","Haberdashery","Hair & Beauty Consultant","Hairdressing","Hairpiece And Wig Retailing","Handicraft Retailing","Hardware Manufacturing","Hardware Retailing","Hat Shop","Hatter","Health Food Retailer","Herbs and Spices Retailing","Hobby Shop","Home Brew Materials Retailing","Horticultural Goods Retailing","Hosiery","Household Goods Retailing","Hypermarket","Ice Cream Parlour","Ice Cream Vendor","In Car Entertainment Retailing","Indoor Market","Industrial Safetywear Retailing","Internet Cafe","Intruder Alarm Retailing","Ironmonger","IT Consultant","Key Cutters","Kitchen Accessories Retailing","Kitchen/Bathroom Unit Showroom","Knitting Machine Shops","Knitwear Retailing","Lamp Shops","Launderette","Laundry","Leather and Travel Goods","Leather Clothing Retailing","Leather Goods Retailing","Leisurewear Retailing","Licensed Premises","Lifting Jacks & Tackle Manufacturers","Light Fitting Retailing","Lighting Retailing","Linen Hire","Linen Retailing","Lingerie Retailing","Locksmiths","Lottery Agent","Luggage and Handbag Retailing","Marine Stores","Maternity Wear Retailing","Meat Market","Menswear Retailers","Merchant Banking","Millinery","Mobile Phone Retailer","Mobile Shop","Model Shop","Motor Accessories Retailing","Motorcycle Accessories Retailing","Music Retailing","Musical Instrument Retailing","Newsagents","Novelty/Carnival Goods Retailing","Nursery Goods Shops","Off Licence","Office Equipment Supplier","Office Furniture Retailing","Office Supplies Retailing","Oil Retailing","Optician","Optometrist","Organic Foods Retailing","Orthopaedic Equipment Retailer","Online Retailer","Outsize Clothing Retailing","Overall Hire & Maintenance","Pens Retailing","Perambulator Retailing","Perfume Retailing","Pet Accessory/Food Store","Pet Parlour","Pet Shop","Petrol Station","Pharmacy","Photo Engraving","Photo Processing And Printing","Photocopying","Photographic Equipment Repairs","Photographic Equipment Retailing","Photographic Processors & Finishers","Photographic Studio","Piano Retailing","Picture Framing","Picture Shop","Pine And Cane Furniture Retailing","Pizza Delivery","Plant Equipment Retailing","Plumbers","Plumbers Equipment Retailers","Plumbers Merchant","Pool & Snooker Table Retailing","Post Office","Post Office Services","Pottery","Poultry And Game Retailing","Print Shop","Public House","Radiator Retailing","Record Shop","Record CD Cassette & Video/DVD Retailing","Restaurant","Retailing","Rope Merchant","Saddlery And Tack Retailing","Sailing Equipment Supplier","Sandwich Bar","Scientific Instrument Retailing","Sewing Machine Shop","Sharpening Services","Shirt Retailing","Shoe Repairing","Shoe Retailing","Shopping Centre","Silverware - Retailing","Sofa Bed Retailing","Soft Furnishings Retailing","Solarium","Souvenir - Retailing","Sports Goods Retailing","Sportswear Supplier","Stamp Collecting Retailers","Stationer","Street/Market Trading","Supermarket","Superstore","Surgical Equipment Retailer","Sweet Shop","Tableware Retailers","Tailor And Outfitter","Take Away Food Supplier","Tattooing","Tea Room","Telecommunication Equipment Supplier","Telephone Sales Retailing","Television Hiring","Television Repairing","Television Retailing","Textile Retailing","Theatrical Supplier","Tile Retailer","Tobacconist","Toiletries Retailing","Tool Hire - Power Driven","Tool Hire","Tool Retailer","Toy And Game Retailing","Travel Agency","Trinity House","Trophy Retailing","Turf Accountants","TV And Radio","TV And Video Rental","TV And Video Repairing","Undertaker","Uniform Retailing","Upholstery","Venetian Blind Supplier","Video Equipment And Tape Retailing","Videography","Wallpaper Shops","Watch And Clock Retailing","Wine Bar","Wine Retailer","Wool And Needlework Shop","Woollen Goods Shop","Yacht Broker", "Not Listed");
  
if(isset($_REQUEST['next']))
{
    $_SESSION['leads']['quote_company_trade'] = $_POST['quote_company_trade'];

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
      <h1 class="display-4 fw-normal">Business Activity</h1>
        <p class="fs-5 text-muted">What's your main trade or activity?</p>
        <div class="help-box"><p>Start typing and select the trade or activity that closest matches your business. <a href="javascript:;" class="business_not_listed">Trade not listed? Click here</a></p></div>
            <div class="bd-example">
                <div class="form-floating mb-3">
                <select name="quote_company_trade" class="form-control select2" id="quote_company_trade">
                <option value=""></option>
                <?php foreach($select_list as $list){
                        echo '<option value="'.$list.'">'. $list .'</option>';
                    }
                ?>
                </select>
                <label for="floatingInput" class="error quote_company_trade_error">Trade of Activity</label>
                </div>
            </div>
    </div>
    <main>
                <button type="button" class="w-100 btn btn-primary btn-lg" name="nextgo" id="btnNext" value="nextgo">Next</button>
            </main>
    </form>
  </header>

  
  <?php include("footer.php")?>
  <script language="javascript" src="../assets/dist/js/select2.js"></script>
 <script>
 $(document).ready(function() {
		$('.select2').select2();
	});
	
	$(".business_not_listed").on("click", function(){
		$("#quote_company_trade").val("Not Listed");
		$('.select2').select2();
	})

      $("#btnNext").on("click", function(){
        if($("#quote_company_trade").val() == false)
        {
            $(".quote_company_trade_error").text("Please enter Trade of Activity");
            $("#quote_company_trade").css("border-color", "red");
        }else{
            $("#frmStep4").submit();
        }
    })
    </script>