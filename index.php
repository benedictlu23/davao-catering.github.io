<!DOCTYPE html>
<html>
	

	<head>
		<title>Temp</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>


	<body>

<div id="carousel" class="snap">
<!-- SECTION LINKS  ===========================================================--> 

		<div class="links">
			<ul>
				<li><a href="#cla"><i class="fa fa-circle"></i></a></li>
				<li><a href="#pakages"><i class="fa fa-circle"></i></a></li>
				<li><a href="#menu"><i class="fa fa-circle"></i></a></li>
				<li><a href="#order"><i class="fa fa-circle"></i></a></li>
				<li><a href="#contact"><i class="fa fa-circle"></i></a></li>
			</ul>
		</div>


<!-- SECTION 1  ===========================================================--> 

		<div class="container-fluid sectionFullSize" id="cla">

			<div class="row">
				<div class="first-section col-lg-12 color2">
					<div class="video-wrap">		
						<video playsinline="playsinline" autoplay loop muted>
							<source src="video/FOOD background video.mp4" type="video/mp4">
						</video>
					</div>

					<div class="video-overlay"></div>
					

					<div class="row text-right my-header">
						<div class="col-12">
								09123456789 | 09987654321
						</div>
					</div>

					<div class="row justify-content-center align-items-center my-slogan">
						<div class="col-12">
								<h1>Order, Eat, <br/>and Enjoy.</h1>
						</div>
					</div>

				</div>
			</div>
					
		</div>



<!-- SECTION 2  ===========================================================-->

		<div class="container-fluid sectionFullSize color6" id="pakages">
			<div class="row d-flex align-items-center justify-content-center sectionFullSize" id="pakages_div">
				<div class="col-lg-4  col-xs-12 mt-3 mb-3 d-flex align-items-center justify-content-center kid-card">
					<div class="card card-custom bg-white border-white border-0">
				      <div class="card-custom-img"></div>
				      <div class="card-custom-avatar">
				        <img class="img-fluid" src="images/kid menu.png" alt="Avatar" />
				      </div>

				      <div class="card-body" style="overflow-y: auto">
				      		<h4 class="card-title">Kids Menu</h4>
				      	<div class="row">
				      		<div class="col-5">
				      			
						        <h6 class="card-subtitle mb-2 text-muted">Package</h6>
						        <ul>
						        	<li>1 Appetizer</li>
						        	<li>1 Pasta</li>
						        	<li>2 Main Course</li>
						        	<li>1 Juice</li>
						        </ul>
				      		</div>
				      		<!-- -->
				      	</div>
				      	<h4 class="card-title mt-3" style="color: #0069D9">Php 250/pax</h4>
				      	<h6 class="card-subtitle mb-2 text-muted">Minimum of 35 kids</h6>
				      </div>
				      <div class="card-footer" style="background: inherit; border-color: inherit;">     
				        <a href="#" class="btn btn-outline-primary btn-lg mx-auto">ORDER NOW</a>
				      </div>
	        		</div>
				</div>
				<div class="col-lg-4 col-xs-12 d-flex mt-3 mb-3 align-items-center justify-content-center adult-card">
					<div class="card card-custom bg-white border-white border-0">
				      <div class="card-custom-img2"></div>
				      <div class="card-custom-avatar">
				        <img class="img-fluid" src="images/adultmenu.jfif" alt="Avatar" />
				      </div>

				      <div class="card-body" style="overflow-y: auto">
				      		<h4 class="card-title">Adult Menu</h4>
				        <div class="row">
				      		<div class="col-12">
				      			<h6 class="card-subtitle mb-2 text-muted">Package</h6>
				      			<div class="row">
				      				<div class="col-5">
				      				<ul>
							        	<li>2 Main Course</li>
							        	<li>1 Noodle</li>
							        	<li>1 Veggie</li>
							        	<li>1 rice</li>
						        	</ul>
				      			</div>
				      			<div class="col-7">
				      				<ul>
							        	<li>1 Dessert</li>
							        	<li>1 Drink</li>
							        </ul>
				      			</div> 
				      			</div>
				      	</div>
				      </div>
				      	<h4 class="card-title mt-3" style="color: #0069D9">Php 350/pax</h4>
				      	<h6 class="card-subtitle mb-2 text-muted">Minimum of 35 Adult</h6>
				      </div>
				      <div class="card-footer" style="background: inherit; border-color: inherit;">
				         <a href="#" class="btn btn-outline-primary btn-lg">ORDER NOW</a>
				      </div>
	        		</div>
				</div>
			</div>
		</div>


<!-- SECTION 3  ===========================================================--> 


		<div class="container-fluid sectionFullSize menuSection" id="menu">
				


<!-- Row 1 -->
			<div class="row menu_foodCat" id="menu_div">
				<div class="col-lg-12">
					<?php
						$pickStart = 0;
						$pickEnd = 0;
						$chooseIndex = 0;
						$foodCategory = array("Appetizer", "Main Course", "Drinks", "Dessert", "Veggie");
						$notes = array(1, 2, 3, 4, 5);
						$items = array("Grilled Beef", "Soup", "Spaghetti", "Takoyaki", "Rice", "Grilled Beef", "Soup", "Spaghetti", "Takoyaki");
					?>
					<h2 id="menu_foodCatH2"> <?php echo $foodCategory[$chooseIndex] ?> </h2>
				</div>
			</div>



<!-- Row 2 -->
			<div class="row justify-content-center menuOptions">
				<div class="col-lg-8">


	<!-- Row 2.1 -->		
					<div class="row"> 
						<div class="col-lg-12 notes">
							<p id="note"> Note </p>
							<p id="pick"> <?php echo $pickStart . ' out of ' . $pickEnd; ?></b> </p>
						</div>
					</div>


	<!-- Row 2.2 -->
					<div class="menuWrapper">
						<div class="row justify-content-center"> 
	 <!-- ########## -->
	 					<?php for ($i=0; $i < count($items); $i++) { ?>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 nopad text-center">
								<label class="image-checkbox" onclick="updateItemPick()">
								    <img class="img-responsive" src="images/<?php echo $items[$i] ?>.jpg" />
								    <input type="checkbox" name="image_check[]" value="1" />
								    <i class="glyphicon fa fa-check hidden"></i>
								    <h3 class="itemName"><?php echo $items[$i]; ?></h3>
								</label>
							</div>

						<?php } ?>					
		<!-- ########## -->
						</div>
					</div>

	<!-- Row 2.3 -->
					<div class="row"> 
						<div class="col-lg-12 foodCatLinks">
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


				<div class="col-lg-3 sideMenu pl-5">

					<form>
						<h3>No. of Orders</h3>
						<input type="text" name="orderNum" placeholder="ex. 35" id="orderNum">
						<p>Minimum of 35</p>

						<h3>Price</h3>
						<input type="text" name="orderPrice" id="orderPrice">
					</form>

					<div class="myOrder_btn">
						<a href="#order-section">My Order</a>
					</div>
					
				</div>

			</div>




		</div>


<!-- SECTION 4  ===========================================================--> 
		
		


<!-- SECTION 5  ===========================================================-->

		<div class="container-fluid sectionFullSize color1" id="contact">
			
			<div class="row d-flex align-items-center justify-content-center sectionFullSize" id="contact_div">

				<div class="col-lg-3 d-flex align-items-center justify-content-center">
					<img src="images/Contact Us.png" class="contact-img">
				</div>

				<div class="col-lg-3">
					<div class="col-lg-12 text-center pt-3 pb-3">
						<h2>Contact Us</h2>
					</div>
					<div class="wrapper">
						<div class="box">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="details"><h3>Philippines</h3></div>
						</div>

						<div class="box">
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="details"><h3>0912 345 6789</h3></div>
						</div>

						<div class="box">
							<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
							<div class="details"><h3>jhondoe@gmail.com</h3></div>
						</div>
					</div>
				</div>

			</div>

		</div>
		
</div>	

	</body>









	<script type="text/javascript">

		  document.getElementById('carousel').classList.toggle('vertical');

			function updateH2(str) {

				// passing PHP arrays to Javascript
				var arr_FoodCat = <?php echo json_encode($foodCategory); ?>;
				var arr_Note = <?php echo json_encode($notes); ?>;


				for (var i = 0; i < arr_FoodCat.length; i++) {
					document.getElementById("foodCat" + arr_FoodCat[i]).style.border = "1px solid #444";
					if(str == arr_FoodCat[i]){
						document.getElementById("note").innerHTML = "Maximum order: " + arr_Note[i];
					}
				}
				document.getElementById("menu_foodCatH2").innerHTML = str;
				document.getElementById("foodCat" + str).style.border = "2px solid #fff000";
			}


			function updateItemPick(){

			}


			$(".image-checkbox").each(function(){
			    if($(this).find('input[type="checkbox"]').first().attr("checked")){
			        $(this).addClass('image-checkbox-checked');
			    }else{
			        $(this).removeClass('image-checkbox-checked');
			    }
			});

			// sync the input state
			$(".image-checkbox").on("click", function(e){
			    $(this).toggleClass('image-checkbox-checked');
			    var $checkbox = $(this).find('input[type="checkbox"]');
			    $checkbox.prop("checked",!$checkbox.prop("checked"));
			  
			    e.preventDefault();
			}); 

		</script>



</html>