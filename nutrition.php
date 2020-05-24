<?php 
	session_start();
	require_once 'php/vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>KETO DIET TRACKER</title>
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='/stylesheets/plain.css'>
</head>
<body>
	<h2> Welcome <?php echo $_SESSION["firstname"]; ?> !</h2>
	<form action = "/nutrition" method="post">  
                <div class = "dropdown">
					<label>Select Item from Food Database :</label>
						<select id="selectype" name="item">
							<option value="">Select</option>
							<option value="Beef">Beef</option>
							<option value="Avocado">Avocado</option>
							<option value="Chicken">Chicken</option>
							<option value="Pork">Pork</option>
							<option value="Fish(salmon)">Salmon</option>
							<option value="Prawns">Prawns</option>
							<option value="Veal">Veal</option>
							<option value="Crab">Crab</option>
							<option value="Duck">Duck</option>
							<option value="Quail">Quail</option>
							<option value="Lobster">Lobster</option>
							<option value="Unsalted butter">Unsalted butter</option>
							<option value="Yogurt">Yogurt</option>
							<option value="Cheddar cheese">Cheddar cheese</option>
							<option value="Edam cheese">Edam cheese</option>
							<option value="Parmesan cheese">Parmesan cheese</option>
							<option value="Egg-chicken">Egg-chicken</option>
							<option value="Egg-duck">Egg-duck</option>
							<option value="Broccoli">Broccoli</option>
							<option value="Bell pepper">Bell pepper</option>
							<option value="Mushroom">Mushroom</option>
							<option value="Spinach">Spinach</option>
							<option value="Zucchini">Zucchini</option>
							<option value="Strawberry">Strawberry</option>
							<option value="Blueberry">Blueberry</option>
							<option value="Blackberry">Blackberry</option>
							<option value="Raspberry">Raspberry</option>
							<option value="Coconutoil">Coconut Oil</option>
							<option value="Olive Oil">Olive Oil</option>
							<option value="Chocolate">Chocolate</option>
							<option value="Shirataki noodles">Shirataki Noodles</option>
							<option value="Walnut">Walnut</option>
							<option value="Almond">Almond</option>
							<option value="Pistachio">Pistachio</option>
							<option value="Cashew">Cashew</option>
						</select>
						<img src = "" id = "img" class = "image"/>
						<button id = "submit" name = "submit" class = "submit" onclick="myFunction(); pic()">Submit</button>
						<script type = "text/javascript">
							function pic_beef()
							{
								document.getElementById("img").src = "https://storage.googleapis.com/ketodiet1/beef.jpg";
							}
							function pic_avocado()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/avacoda.jpg";
							} 
							function pic_chicken()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/chicken.jpg";
							} 
							function pic_pork()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/pork.jpeg";
							} 
							function pic_salmon()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/salmon.jpg";
							} 
							function pic_prawns()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/prawns.jpg";
							} 
							function pic_veal()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/veal.jpg";
							} 
							function pic_crab()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/crab.jpg";
							} 
							function pic_duck()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/duck.jpg";
							} 
							function pic_quail()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/quail.jpg";
							} 
							function pic_lobster()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/lobster.jpg";
							} 
							function pic_ubutter()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/butter.jpg";
							} 
							function pic_yogurt()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/yogurt.jpg";
							} 
							function pic_cheddar()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/cheddar.png";
							} 
							function pic_edam()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/edam.jpg";
							} 
							function pic_parmesan()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/parmesan.jpeg";
							} 
							function pic_eggch()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/chickenegg.png";
							} 
							function pic_eggduck()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/duckegg.jpg";
							} 
							function pic_brocolli()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/broccoli.jpg";
							} 
							function pic_bpepper()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/bellpepper.jpg";
							} 
							function pic_mushroom()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/mushroom.jpg";
							} 
							function pic_spinach()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/spinach.jpg";
							} 
							function pic_zuccini()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/zucchini.jpeg";
							} 
							function pic_strawberry()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/strawberry.jpg";
							} 
							function pic_blueberry()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/blueberry.jpeg";
							} 
							function pic_blackberry()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/blackberry.jpg";
							} 
							function pic_raspberry()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/raspberry.jpeg";
							} 
							function pic_coconutoil()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/coconutoil.jpg";
							} 
							function pic_oliveoil()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/olive%20oil.jpg";
							} 
							function pic_chocolate()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/chcocolate.jpg";
							} 
							function pic_shirataki()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/shirataki.jpg";
							} 
							function pic_walnut()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/walnut.jpeg";
							} 
							function pic_almond()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/almond.jpg";
							} 
							function pic_pistachio()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/pistachio.jpg";
							} 
							function pic_cashew()
							{
								document.getElementById("img").src ="https://storage.googleapis.com/ketodiet1/cashew.jpg";
							} 

							function pic()
							{
								var e=document.getElementById('selectype');
								//document.write(e.value);
								switch (e.value) {
									case 'Beef':
										pic_beef();
										break;
									case 'Avocado':
										pic_avocado();
										break;
									case 'Chicken':
										pic_chicken();
										break;
									case 'Pork':
										pic_pork();
										break;
									case 'Salmon':
										pic_salmon();
										break;
									case 'Prawns':
										pic_prawns();
										break;
									case 'Veal':
										pic_veal();
										break;
									case 'Crab':
										pic_crab();
										break;
									case 'Duck':
										pic_duck();
										break;
									case 'Quail':
										pic_quail();
										break;
									case 'Lobster':
										pic_lobster();
										break;
									case 'Unsalted butter':
										pic_ubutter();
										break;
									case 'Yogurt':
										pic_yogurt();
										break;
									case 'Cheddar cheese':
										pic_cheddar();
										break;
									case 'Edam cheese':
										pic_edam();
										break;
									case 'Parmesan cheese':
										pic_parmesan();
										break;
									case 'Egg-chicken':
										pic_eggch();
										break;
									case 'Egg-duck':
										pic_eggduck();
										break;
									case 'Broccoli':
										pic_brocolli();
										break;
									case 'Bell pepper':
										pic_bpepper();
										break;
									case 'Mushroom':
										pic_mushroom();
										break;
									case 'Spinach':
										pic_spinach();
										break;
									case 'Zucchini':
										pic_zuccini();
										break;
									case 'Strawberry':
										pic_strawberry();
										break;
									case 'Blueberry':
										pic_blueberry();
										break;
									case 'Blackberry':
										pic_blackberry();
										break;
									case 'Raspberry':
										pic_raspberry();
										break;
									case 'Coconut Oil':
										pic_coconutoil();
										break;
									case 'Olive Oil':
										pic_oliveoil();
										break;
									case 'Chocolate':
										pic_chocolate();
										break;
									case 'Shirataki Noodles':
										pic_shirataki();
										break;
									case 'Walnut':
										pic_walnut();
										break;
									case 'Almond':
										pic_almond();
										break;
									case 'Pistachio':
										pic_pistachio();
										break;
									case 'Cashew':
										pic_cashew();
										break;
									
							}					
							}

							function myFunction() {
								document.getElementById('submit').onclick = function() {
									pic();
    								}
									//pic();
									//document.getElementById('content').style.display = "block";
									}
									</script>
    
					</div>  
					
		<div id = "content" class='content'>
		<?php
			$food = $_POST['item'];
			$user = $_POST['user'];
			$client = new Google_Client();
			$client->useApplicationDefaultCredentials();
			$client->addScope(Google_Service_Bigquery::BIGQUERY);
			$bigquery = new Google_Service_Bigquery($client);
			$projectId = 'regal-spark-270602';

			$request = new Google_Service_Bigquery_QueryRequest();
			$request1 = new Google_Service_Bigquery_QueryRequest();
			$str = '';
			
			$request->setQuery("SELECT Calories,Calcium,Protein,Carbohydrates,Fat,VitaminD,Sodium,Potassium,Sugar FROM [nutrition.nutrient] Where Food_Database='$food'");
			
			$response = $bigquery->jobs->query($projectId, $request);
			$rows = $response->getRows();

			$firstempty = array();

			foreach ($rows as $row)
			{
				foreach ($row['f'] as $field)
				{
					array_push($firstempty, $field['v']);
				}
			}
			
			$BMI =  round($_SESSION["weight"]/(($_SESSION["height"]*0.01)*($_SESSION["height"]*0.01)),2);

			$calories = $firstempty[0];
			$calcium = $firstempty[1];
			$protein = $firstempty[2];
			$carbohydrates = $firstempty[3];
			$fat = $firstempty[4];
			$vitamind = $firstempty[5];
			$sodium = $firstempty[6];
			$potassium = $firstempty[7];
			$sugar = $firstempty[8];
		?>
	<div id="container">
    <div id="left">
	<div id = "nutritionLabel" class="nutritionLabel" style=" width: 280px;">
		<div class="title" tabindex="0">Nutrition Facts</div>
		<div class="name " tabindex="0"><?php echo $food; ?></div>
		<div class="bar1"></div>
		<div class="line">
			<div class="" tabindex="0">
				<strong>Calories</strong> <span itemprop="caloriesContent"><?php echo $calories; ?> </span></div>
			</div>
		<div class="bar2"></div>
		<div class="line" tabindex="0">
			<strong>Calcium</strong> <span itemprop="calciumContent"><?php echo $calcium; ?> <span aria-hidden="true">mg</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Protein</strong> <span itemprop="proteinContent"><?php echo $protein; ?> <span aria-hidden="true">g</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Carbohydrates</strong> <span itemprop="carbsContent"><?php echo $carbohydrates; ?> <span aria-hidden="true">g</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Fat</strong> <span itemprop="fatContent"><?php echo $fat; ?> <span aria-hidden="true">g</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Vitamin D</strong> <span itemprop="vitdContent"><?php echo $vitamind; ?> <span aria-hidden="true">IU</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Sodium</strong><span itemprop="sodiumContent"><?php echo $sodium; ?> <span aria-hidden="true">g</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Potassium</strong><span itemprop="potassiumContent"><?php echo $potassium; ?> <span aria-hidden="true">g</span>
		</span></div>
		<div class="line" tabindex="0">
			<strong>Sugar</strong><span itemprop="sugarContent"><?php echo $sugar; ?> <span aria-hidden="true">g</span>
		</span></div>
		<div class="dvCalorieDiet line">
		<div class="calorieNote">
			<span tabindex="0"><span class="star" aria-hidden="true"></span> BMI based on your personal information is <?php echo $BMI; ?> </span>
		</div><!-- closing class="calorieNote" -->
		</div>
	</div><!--nutritientLabel-->
		</div> <!--for left-->

		<div id="right">
			<div id="piechart"></div>
		</div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">

			var mycalcium =  <?php echo json_encode($calcium); ?>;
			var myprotein =  <?php echo json_encode($protein); ?>;
			var mycarbohydrates =  <?php echo json_encode($carbohydrates); ?>;
			var myfat =  <?php echo json_encode($fat); ?>;
			var myvitamind =  <?php echo json_encode($vitamind); ?>;
			var mysodium =  <?php echo json_encode($sodium); ?>;
			var mypotassium =  <?php echo json_encode($potassium); ?>;
			var mysugar =  <?php echo json_encode($sugar); ?>;
			
			// Load google charts
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			// Draw the chart and set the chart values
			function drawChart() {
			var data = google.visualization.arrayToDataTable([
			['Calories', 'Values'],
			['Calcium', parseInt(mycalcium)],
			['Protein', parseInt(myprotein)],
			['Carbohydrates', parseInt(mycarbohydrates)],
			['Fat', parseInt(myfat)],
			['Vitamin D', parseInt(myvitamind)],
			['Sodium', parseInt(mysodium)],
			['Potassium', parseInt(mypotassium)],
			['Sugar', parseInt(mysugar)]
			]);

			// Optional; add a title and set the width and height of the chart
			var options = {'title':'Nutrient Split-Up', 'width':450, 'height':400};

			// Display the chart inside the <div> element with id="piechart"
			var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			chart.draw(data, options);
			}		

		</script>
		<div class="clear"></div>
		</div> <!--for container-->
	</div>
</body>
</html>
