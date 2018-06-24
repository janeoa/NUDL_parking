<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Parking. Главная</title>
		<?php $dir = "main"; include "$root/common/libs.html";?>
        <meta name="author" content="Asset Malik"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="/common/w3.css"/>
        <link rel="stylesheet" href="/common/AvenirNextCyr/AvenirCyrStylesheet.css"/>
        <script src="/common/jquery.min.js"></script>
		<link rel="stylesheet" href="/common/fontawesome-free-5.1.0-web/css/all.css"/>
		<link rel="stylesheet" href="/common/main.css"/>
		
		<style>

            .at-car{
                pointer-events: none;
            }

			#car2 {
			    position: absolute; right: 30%; transform: rotate(27deg);top:48%; height: 20%;
			}
			
			@media only screen and (max-width: 700px) {
		    	#car2 {
				    position: absolute; right: 10%; height: 20%; top:44%; transform: rotate(0);
				    animation-name: parkCar2;
				    animation-duration: 2s;
				    animation-timing-function: linear;
				}
			}
			
			@media only screen and (max-width: 601px){
				#firsth11{
					font-size: 7vw !important;
					padding-right: 40%;
				}
				#firstp1{
					font-size: 4vw !important;
					margin-top: 20px !important;
				}
                .at-car{
                    opacity: 0.5;
                }
                #third{
                    zoom: 50%;
                }
			}
			
			@keyframes parkCar2 {
			    0% {right: 30%; transform: rotate(27deg);top:48%;}
			    40% {right: 22%; transform: rotate(24deg);top:47%;}
			    100% {right: 10%; transform: rotate(0); top:44%;}
			}

		</style>

	</head>
	
	<body>
		<!--NAV -->
		<?php
			include("common/navbar.php");
		?>
		
		<div style="width: 100%; height: 100%; position: relative; background-image: url('img/first.jpg'); background-position: center center;" class="" id="first">
			<div id="logo" class="" style="position: absolute; top: 67px; left: 10%;">
				LOGO
			</div>
			<div style="position: absolute; top:30%; left: 10%; width: 60%">
				<h1 id="firsth11" style="font-family: AvenirNext-Bold; font-size: 46px;">Паркинг нового поколения</h1>
				<div class="w3-border-white w3-border-left" style="padding-left: 10px;">
					<p id="firstp1" style="font-size: 20px; width: 60%;  margin-top: 80px;">Умные технологии & продуманный дизайн</p>
				</div>
                <div class="w3-row w3-hide-small" style="margin-top: 60px; text-align: center; font-size: 18px;">
                    <div class="w3-col w3-display-container" style="cursor: pointer; border-radius: 8px 0px 0px 8px; border: solid 1px #f5a623; width: 180px;height: 40px;">
                        <div class="w3-display-middle">подробнее</div>
                    </div>
                    <div class="w3-col w3-display-container" style="cursor: pointer; border-radius: 0px 8px 8px 0px; border: solid 1px #f5a623; width: 180px;height: 40px;background-color: #efa426;">
                        <div class="w3-display-middle">Заказать</div>
                    </div>
                </div>
                <div class="w3-hide-large w3-hide-medium" style="margin-top: 60px; text-align: center; font-size: 18px;">
                    <div class="w3-cell w3-display-container w3-mobile" style="cursor: pointer; border-radius: 8px 8px 0px 0px; border: solid 1px #f5a623; width: 180px;height: 40px;">
                        <div class="w3-display-middle">подробнее</div>
                    </div>
                    <div class="w3-cell w3-display-container w3-mobile" style="cursor: pointer; border-radius: 0px 0px 8px 8px; border: solid 1px #f5a623; width: 180px;height: 40px;background-color: #efa426;">
                        <div class="w3-display-middle">Заказать</div>
                    </div>
                </div>
			</div>

			<div id="cars">
				<div id="" style="position: absolute; right: 10%; height: 20%; top:20%;" class="at-car">
					<img src="img/car.png" width="auto" height="100%"/>
				</div>
				<div id="car2" style="" class="at-car">
					<img src="img/car.png" width="auto" height="100%"/>
				</div>
				<div style="position: absolute; right: 10%; height: 20%; bottom:10%" class="at-car">
					<img src="img/car.png" width="auto" height="100%"/>
				</div>
				<div style="position: absolute; right:  5%; width: 1.2%; bottom:33%; height: 36%; transform-origin: top right; transform: rotate(63deg); background-color: #efa426"></div>
				<div style="position: absolute; right:  5%; width: 1.2%; bottom: 5%; height: 36%; transform-origin: top right; transform: rotate(63deg); background-color: #efa426"></div>
				<div style="position: absolute; right:  5%; width: 1.2%; bottom:  0; height: 75%; background-color: #efa426"></div>
				
			</div>
		</div>
		
		<div style="width: 80%; margin: 50px auto 20px auto; color: black;" id="second">
			<h2 style="text-align: center; font-family: AvenirNext-Bold; font-size: 24px;"><span style="border: #f5a623;border-style: solid; border-width: 0px 0px 3px 0px">Почему мы?</span></h2>
			<div class="w3-row" style="font-family: AvenirNext-DemiBold; font-size: 20px;">
				<div class="w3-col m6 l3 at-wedo">
					<div class="at-circle w3-display-container">
						<div class="w3-display-middle w3-jumbo"><i class="fas fa-cogs"></i></div>
					</div>
					<p>Производим оборудование и ПО</p>
				</div>
				<div class="w3-col m6 l3 at-wedo">
					<div class="at-circle w3-display-container">
						<div class="w3-display-middle w3-jumbo"><i class="fas fa-clipboard-check"></i></div>
					</div>
					<p>Производим оборудование и ПО</p>
				</div>
				<div class="w3-col m6 l3 at-wedo">
					<div class="at-circle w3-display-container">
						<div class="w3-display-middle w3-jumbo"><i class="far fa-clock"></i></div>
					</div>
					<p>Производим оборудование и ПО</p>
				</div>
				<div class="w3-col m6 l3 at-wedo">
					<div class="at-circle w3-display-container">
						<div class="w3-display-middle w3-jumbo"><i class="far fa-comment-dots"></i></div>
					</div>
					<p>Производим оборудование и ПО</p>
				</div>
			</div>
		</div>
		
		<div class="w3-display-container" style="width: 100%; height: 318px; background-image: url('img/third.jpg'); color: white;" id="third">
			<!--img src="img/third.jpg" width="100%" height="auto"/-->
			<div style="max-width: 848px; margin: auto; padding: 40px 20px 0 20px;">
				<div class="w3-row">
					<div class="w3-col" style="width: 64px; position: relative;">
						<div style="font-family: AvenirNext-DemiBold; font-size: 80px; text-align: center; z-index: 3 !important;">Р</div><span class="at-bg-R"></span>
					</div>
					<div class="w3-col" style="width: 64px; position: relative;">
						<div style="font-family: AvenirNext-DemiBold; font-size: 80px; text-align: center; z-index: 0 !important; position: absolute; left: -57px;">Р</div><span class="at-bg-R"></span>
					</div>
					<div class="w3-rest" style="padding-top: 44px">
						<h2 style="font-size: 31px; font-family: AvenirNext-Regular; text-transform: uppercase"><span style="display: none;">Р</span>азрабатываем решения для автоматизации платных парковок по всей России и ближнему зарубежью
							&nbsp;<img class="" src="img/arrow-right.png" height="31px" width="auto" alt="decorative arrow" style="cursor: pointer"/></h2>
					</div>
				</div>
			</div>
		</div>
		
        <?php
        include ("$root/four.html");
        include ("$root/common/footer.html");
        ?>

	</body>
</html>