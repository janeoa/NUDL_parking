<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Оборудование</title>
        <?php $dir="gear";?>
        <meta name="author" content="Asset Malik"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="/common/w3.css"/>
		<script src="/common/jquery.min.js"></script>
        <link rel="stylesheet" href="/common/fontawesome-free-5.1.0-web/css/all.css"/>
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
                width: 50%;
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
            .at-tab-butt2.chosen2{
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

            .kassa{
                display: none;
            }
            .stoika{
                display: none;
            }

            .middleImg{
                display: block; margin: 0 auto 0 auto; width: 50%
            }
		</style>
		
		<div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: 40px auto 0 auto">

            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-middle at-tab-butt chosen" onclick="openKassa('light'); $('.chosen').removeClass('chosen'); $(this).addClass('chosen');">Парковочная касса LIGHT</div>
                <div class="w3-cell w3-cell-middle at-tab-butt" onclick="openKassa('standart'); $('.chosen').removeClass('chosen'); $(this).addClass('chosen');">Парковочная касса STANDARD</div>
            </div>

            <script>
                function openKassa(cityName) {
                    var i;
                    var x = document.getElementsByClassName("kassa");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(cityName).style.display = "block";
                }

                function openStoika(cityName) {
                    var i;
                    var x = document.getElementsByClassName("stoika");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(cityName).style.display = "block";
                }

                var slideIndex = {
                    light:0,
                    standart:0,
                    parkomat:0,
                    double:0,
                    zjeton:0,
                    IO:0
                };

                $(document).ready(function () {
                    showDivs('light',0);
                    showDivs('standart',0);
                    showDivs('parkomat',0);
                    showDivs('double',0);
                    showDivs('zjeton',0);
                    showDivs('IO',0);
                });

                function plusDivs(clas,n) {
                    showDivs(clas, slideIndex[clas] += n);
                }

                function showDivs(clas, n) {
                    var i;
                    var x = document.getElementsByClassName(clas);
                    if (n >= $("."+clas).length) {slideIndex[clas] = 0}
                    if (n < 0) {slideIndex[clas] = $("."+clas).length}
                    $("."+clas).hide();
                    $("."+clas+":eq("+slideIndex[clas]+")").show();
                }
            </script>

            <div id="light" class="kassa" style="margin-top: 60px; display: block">
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Преимущества: вдвое меньшая стоимость, высочайшая надежность с приятным дизайном и удобством использования, функциональный сенсорный экран <a href="/gear/details/?gear=light" class="accent-coloor w3-right">далее</a>
                </div>
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="light" src="gear_photo/1.jpg" width="100%" height="auto">
                            <img class="light" src="gear_photo/light2.png" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT
                            </div>
                        </div>
                        <div class="w3-button w3-black" onclick="plusDivs('light',-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs('light',1)" style="position: absolute; right: 0; top: 180px">&#10095;</div>
                    </div>
                </div>
            </div>

            <div id="standart" class="kassa" style="margin-top: 60px;">
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА STANDARD</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Многофункциональная автоматизированная касса для оплаты услуг парковки - устройство премиум класса в линейке RPS. Высочайшая надежность... <a href="/gear/details/?gear=standart" class="accent-coloor w3-right">далее</a>
                </div>
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="middleImg standart" src="gear_photo/standart1.png" width="auto" height="350px">
                            <img class="middleImg standart" src="gear_photo/standart2.png" width="auto" height="350px">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА STANDARD
                            </div>
                        </div>
                        <div class="w3-button w3-black" onclick="plusDivs('standart',-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs('standart',1)" style="position: absolute; right: 0; top: 180px">&#10095;</div>
                    </div>
                </div>
            </div>


		</div>

        <div style=" height: 100px; width: 1px;"></div>

        <div class="w3-cell-row" style="width: 80%; margin: 80px auto;">
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2 chosen2"onclick="openStoika('zjeton'); $('.chosen2').removeClass('chosen2'); $(this).addClass('chosen2');">Двухсторонняя стойка въезда-выезда на жетонах</div>
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika('IO'); $('.chosen2').removeClass('chosen2'); $(this).addClass('chosen2');">Стойка въезда-выезда</div>
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika('IOzjeton'); $('.chosen2').removeClass('chosen2'); $(this).addClass('chosen2');">Стойка въезда-выезда на жетонах</div>
            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika('doubleIO'); $('.chosen2').removeClass('chosen2'); $(this).addClass('chosen2');">Двухуровневая стойка въезда-выезда</div>
        </div>

        <div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: auto">
            <div id="zjeton" class="stoika" style="display: block">
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="zjeton" src="gear_photo/zjeton.png" width="100%" height="auto">
                            <img class="zjeton" src="gear_photo/zjeton2.png" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                Двухсторонняя стойка въезда-выезда на жетонах
                            </div>
                        </div>
                        <div class="w3-button w3-black" onclick="plusDivs('zjeton',-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs('zjeton',1)" style="position: absolute; right: 0; top: 180px">&#10095;</div>
                    </div>
                </div>
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">Двухсторонняя стойка въезда-выезда на жетонах</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Двухсторонняя стойка одновременно выполняет функции въездной и выездной стойки. Такая конструкция исключает необходимость ... <a href="/gear/details/?gear=zjeton" class="accent-coloor w3-right">далее</a>
                </div>
            </div>
        </div>

        <div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: auto">
            <div id="IO" class="stoika" style="">
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="middleImg IO" src="gear_photo/IO.png" width="100%" height="auto">
                            <img class="middleImg IO" src="gear_photo/IO2.png" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                СТОЙКА ВЪЕЗДА-ВЫЕЗДА
                            </div>
                        </div>
                        <div class="w3-button w3-black" onclick="plusDivs('IO',-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs('IO',1)" style="position: absolute; right: 0; top: 180px">&#10095;</div>
                    </div>
                </div>
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">СТОЙКА ВЪЕЗДА-ВЫЕЗДА</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Обеспечивают доступ клиента на парковку, управляя периферийными устройствами.
                        Въездные и выездные стойки являются важнейшими частями АСПП. Огромный функционал и ... <a href="/gear/details/?gear=IO" class="accent-coloor w3-right">далее</a>
                </div>
            </div>
        </div>

        <div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: auto">
            <div id="IOzjeton" class="stoika" style="">
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="middleImg IOzjeton" src="gear_photo/IOzjeton.png" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                СТОЙКА ВЪЕЗДА-ВЫЕЗДА НА ЖЕТОНАХ
                            </div>
                        </div>
                        <!--div class="w3-button w3-black" onclick="plusDivs('IOzjeton',-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs('IOzjeton',1)" style="position: absolute; right: 0; top: 180px">&#10095;</div-->
                    </div>
                </div>
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">СТОЙКА ВЪЕЗДА-ВЫЕЗДА НА ЖЕТОНАХ</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Въездные и выездные стойки являются важнейшими частями АСПП. Огромный функционал и гибкость позволят адаптировать ... <a href="/gear/details/?gear=IOzjeton" class="accent-coloor w3-right">далее</a>
                </div>
            </div>
        </div>

        <div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: auto">
            <div id="doubleIO" class="stoika" style="">
                <div class="w3-cell w3-hide-small w3-hide-medium" style="height: 300px; width: 50%;">
                    <div style="position: relative; ">
                        <div id="semiOpaque" class="w3-card-4" style="height: 350px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
                        <div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
                            <img class="middleImg doubleIO" src="gear_photo/doubleIO.png" width="100%" height="auto">
                            <div style="width: 100%; background-color: #494949; text-align: center; padding: 10px">
                                ДВУХУРОВНЕВАЯ СТОЙКА ВЪЕЗДА-ВЫЕЗДА
                            </div>
                        </div>
                        <!--div class="w3-button w3-black" onclick="plusDivs('doubleIO',-1)" style="position: absolute; left: 0; top: 180px">&#10094;</div>
                        <div class="w3-button w3-black" onclick="plusDivs('doubleIO',1)" style="position: absolute; right: 0; top: 180px">&#10095;</div-->
                    </div>
                </div>
                <div class="w3-cell w3-container" style="width: 50%;">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">ДВУХУРОВНЕВАЯ СТОЙКА ВЪЕЗДА-ВЫЕЗДА</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">Двухуровневые въездные и выездные стойки поставляются в составе АСПП RPS. Обеспечивают простой доступ на территорию паркинга как легковым ... <a href="/gear/details/?gear=doubleIO" class="accent-coloor w3-right">далее</a>
                </div>
            </div>
        </div>

        <div style="height: 150px ; width: 1px;"></div>
		<?php include "$root/common/footer.html"; ?>
	</body>
</html>