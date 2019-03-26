<!DOCTYPE html>
<html>
	<head>
		<title>Temp</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>



	<body>


		<div class="container-fluid wrap">
			<div class="row">
<!-- ROW #1 FOOD CATEGORY-->
				<div class="col-lg-12">
					<?php
						$chooseIndex = 0;
						$foodCategory = array("Appetizer", "Main Course", "Drinks", "Desert", "Veggie");
						$notes = array(1, 2, 3, 4, 5);
					?>
					<h2 id="menu_foodCatH2"> <?php echo $foodCategory[$chooseIndex] ?> </h2>
				</div>




<!-- ROW #2 MENU OPTIONS-->
				<div class="col-lg-9 color1">
					<div class="row">
						<div class="col-lg-12 color3">
							<p id="note"> Note </p>
						</div>

						<div class="col-lg-10 order-first items" background="black">
								<div class="col-xs-4 col-sm-3 col-md-2 col-lg-3 nopad text-center">
								    <label class="image-checkbox">
								        <img class="img-responsive" src="images/shrimp.jpg" />
								        <input type="checkbox" name="image_check[]" value="1" />
								        <i class="glyphicon fa fa-check hidden"></i>
								    </label>
								</div>
						</div>



						<div class="col-lg-12 foodCatLinks color3">
							<ul>
								<?php foreach($foodCategory as $foodCat){ ?>
									<li onclick="updateH2('<?php echo $foodCat; ?>')" id="foodCat<?php echo $foodCat; ?>">
										<?php echo $foodCat; ?>	
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>



<!-- ROW #3 QUANTITY -->
				<div class="col-lg-3 color2">
					
				</div>

			</div>
		</div>





		






	</body>



	<script type="text/javascript">
		function updateH2(str) {

			// passing PHP arrays to Javascript
			var arr_FoodCat = <?php echo json_encode($foodCategory); ?>;
			var arr_Note = <?php echo json_encode($notes); ?>;


			for (var i = 0; i < arr_FoodCat.length; i++) {
				document.getElementById("foodCat" + arr_FoodCat[i]).style.border = "none";
				if(str == arr_FoodCat[i]){
					document.getElementById("note").innerHTML = "Maximum order: " + arr_Note[i];
				}
			}
			document.getElementById("menu_foodCatH2").innerHTML = str;
			document.getElementById("foodCat" + str).style.border = "2px solid #fff000";
		}


		// $(".image-checkbox").each(function(){
		//     if($(this).find('input[type="checkbox"]').first().attr("checked")){
		//         $(this).addClass('image-checkbox-checked');
		//     }else{
		//         $(this).removeClass('image-checkbox-checked');
		//     }
		// });

		// // sync the input state
		// $(".image-checkbox").on("click", function(e){
		//     $(this).toggleClass('image-checkbox-checked');
		//     var $checkbox = $(this).find('input[type="checkbox"]');
		//     $checkbox.prop("checked",!$checkbox.prop("checked"));
		  
		//     e.preventDefault();
		// }); 

	</script>





</html>





body {
	color: #fff;
}

.wrap {
	width: 100%;
	height: 100vh;
	background: #3d3d3d;
	color: #fff;
	text-align: center;
}


.color1 {
	background: #3f427e;
	height: 80vh;
}

.color2 {
	background: #12327e;
	height: 80vh;
}

.color3 {
	background: gray;
}

.foodCatLinks{
	text-align: center;
}

.foodCatLinks ul{
	text-align: center;
}

.foodCatLinks ul li{
	display: inline-block;
	text-decoration: none;
	padding: 10px;
	margin: 2px;
	background: #fff;
	color: #000;
	border-radius: 3px;
	font-weight: 600;
	cursor: pointer;
}


.items {
	width: 100%;
	height: 75%;
	background: #444444;
}

.image-checkbox {
    cursor: pointer;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border: 4px solid transparent;
    margin-bottom: 0;
    outline: 0;
}

.image-checkbox img{
	width: 100%;
	background: #fff000;
}

.image-checkbox input[type="checkbox"] {
    display: none;
}
.image-checkbox-checked {
    border-color: #4783B0;
}
.image-checkbox .glyphicon {
  position: absolute;
  color: #4A79A3;
  background-color: #fff;
  padding: 10px;
  top: 0;
  right: 0;
}
.image-checkbox-checked .glyphicon {
  display: block !important;
}