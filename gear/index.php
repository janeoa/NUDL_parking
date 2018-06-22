<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Оборудование</title>
        <?php $dir="gear";?>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/common/main.css">

        <style>
            html, body{
                font-family: "AvenirNext-Regular";
                background-image: url('../img/first.jpg');
                background-position: center center;
                background-repeat: repeat-y;
            }
        </style>

	</head>
	
	<body>
        <!--NAV -->
        <?php
            include("$root/common/navbar.php");
        ?>
		
		<div id="logo" style="margin-top:67px; margin-left: 10%">
			LOGO
		</div>
		
		<div class="w3-container" id="first">
			<h1 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 44px; text-align: center; margin-top: 10%;">НАШЕ ОБОРУДОВАНИЕ</h1>
		</div>
		
		<style>
			.at-tab-butt{
				padding: 13px 3px;
				text-align: center;
				cursor: pointer;
                width: 33%;
			}

            .at-tab-butt2{
                width: 25%!important;
            }
			
			.at-tab-butt.chosen{
				padding: 11px 1px;
				border-style: solid;
				border-color: #efa426;
				border-width: 2px;
			}
			
			.at-tab-butt:hover{
				padding: 10px 0;
				border-style: solid;
				border-color: #efa426;
				border-width: 3px;
			}
		</style>
		
		<div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: 40px auto 0 auto">

            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-middle at-tab-butt chosen">Парковочная касса LIGHT</div>
                <div class="w3-cell w3-cell-middle at-tab-butt">Парковочная касса STANDARD</div>
                <div class="w3-cell w3-cell-middle at-tab-butt">Паркоматы</div>
            </div>
			
			<div class="" style="margin-top: 60px;">
				<div class="w3-cell w3-container" style="width: 50%;">
					<h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT</h2>
					<p style="font-family: AvenirNext-Regular; font-size: 24px;">Преимущества: вдвое меньшая стоимость, высочайшая надежность с приятным дизайном и удобством использования, функциональный сенсорный экран <a href="#" class="accent-coloor w3-right">далее</a>
				</div>
				<div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
					<div style="position: relative; ">
						<div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
						<div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
							<img class="ss1" src="gear_photo/1.jpg" width="100%" height="auto">
                            <img class="ss1" src="gear_photo/light2.png" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT
                            </div>
						</div>
                        <div class="w3-button w3-black" onclick="plusDivs(-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs(1)" style="position: absolute; right: 0; top: 180px">&#10095;</div>
                        <script>
                            var slideIndex = 1;
                            showDivs(slideIndex);

                            function plusDivs(n) {
                                showDivs(slideIndex += n);
                            }

                            function showDivs(n) {
                                var i;
                                var x = document.getElementsByClassName("ss1");
                                if (n > x.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = x.length}
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                x[slideIndex-1].style.display = "block";
                            }
                        </script>
                    </div>
				</div>
			</div>
		</div>

        <div class="w3-cell-row" style="width: 80%; margin: 80px auto;">
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2 chosen">Двухсторонняя стойка въезда-выезда на жетонах</div>
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2">Стойка въезда-выезда</div>
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2">Стойка въезда-выезда на жетонах</div>
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2">Двухуровневая стойка въезда-выезда</div>
        </div>

        <div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: auto">
            <div class="" style="">
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="ss2" src="gear_photo/1.jpg" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                Двухсторонняя стойка въезда-выезда на жетонах
                            </div>
                        </div>
                        <div class="w3-button w3-black" onclick="plusDivs2(-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs2(1)" style="position: absolute; right: 0; top: 180px">&#10095;</div>
                    </div>
                </div>
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">Двухсторонняя стойка въезда-выезда на жетонах</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Двухсторонняя стойка одновременно выполняет функции въездной и выездной стойки. Такая конструкция исключает необходимость ... <a href="#" class="accent-coloor w3-right">далее</a>
                </div>
            </div>
        </div>
		
		<?php include "$root/common/footer.html"; ?>
	</body>
</html>