<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Оборудование</title>
        <?php $dir="gear"; include "$root/common/libs.html";?>
        <meta name="author" content="Asset Malik"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="/common/w3.css"/>
		<script src="/common/jquery.min.js"></script>
        <link rel="stylesheet" href="/common/fontawesome-free-5.1.0-web/css/all.css"/>
        <link rel="stylesheet" href="/common/main.css">

	</head>
	
	<body>
        <!--NAV -->
        <?php
            include("$root/common/navbar.php");
        ?>
		
		<div class="w3-container" id="first">
			<h1 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 3.5vw; text-align: center; margin-top: 10%;">НАШЕ ОБОРУДОВАНИЕ</h1>
		</div>
		
		<style>

            html{
                font-family: "AvenirNext-Regular";
                background-image: url('bg.png');
                background-position: center center;
                background-repeat: repeat-y;
                background-attachment: fixed;
            }

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
            .at-tab-butt2.chosen2{
                padding: 11px 1px;
                border-style: solid;
                border-color: #efa426;
                border-width: 2px;
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

            @media screen and (max-width: 600px){
                .theOps, #pads{
                    width: 100%!important;
                }
            }
            @media screen and (max-width: 993px){
                .at-tab-butt2{
                    width: 50%!important;
                }
            }

            a{
                pointer-events: all!important;
            }
		</style>
		
		<div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: 40px auto 0 auto">

            <div class="theOps w3-cell-row">
                <div class="w3-cell w3-cell-middle at-tab-butt chosen" onclick="openKassa('light'); $('.chosen').removeClass('chosen'); $(this).addClass('chosen');">Парковочная касса LIGHT</div>
                <div class="w3-cell w3-cell-middle at-tab-butt" onclick="openKassa('standart'); $('.chosen').removeClass('chosen'); $(this).addClass('chosen');">Парковочная касса STANDARD</div>
                <a href="/gear/details/?gear=parkomats" style="text-decoration: none"><div class="w3-cell w3-cell-middle at-tab-butt">Паркоматы</div></a>
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
                    IO:0,

                    light2:0,
                    standart2:0,
                    parkomat2:0,
                    double2:0,
                    zjeton2:0,
                    IO2:0,
                };
                function blurDeMob(state) {
                    // if(state){$(".imageMobFour").css("filter","blur(5px)")}
                    // else{$(".imageMobFour").css("filter","")}
                }
                $(document).ready(function () {
                    openKassa('light');
                    openStoika('zjeton');

                    showDivs('light',0);
                    showDivs('standart',0);
                    showDivs('parkomat',0);
                    showDivs('double',0);
                    showDivs('zjeton',0);
                    showDivs('IO',0);

                    showDivs('light2',0);
                    showDivs('standart2',0);
                    showDivs('parkomat2',0);
                    showDivs('double2',0);
                    showDivs('zjeton2',0);
                    showDivs('IO2',0);
                });

                function plusDivs(clas,n) {
                    showDivs(clas, slideIndex[clas] += n);
                }

                function showDivs(clas, n) {
                    $("."+clas+":eq("+slideIndex[clas]+")").fadeOut();
                    var i;
                    var x = document.getElementsByClassName(clas);
                    if (n >= $("."+clas).length) {slideIndex[clas] = 0}
                    if (n < 0) {slideIndex[clas] = $("."+clas).length-1}
                    //$("."+clas).slideToggle();
                    $("."+clas).hide();
                    $("."+clas+":eq("+slideIndex[clas]+")").fadeIn();
                }
            </script>

            <?php
            $ids = array(
                    array("light","kassa"),
                    array("standart","kassa"),
                    array( "zjeton","stoika"),
                    array( "IO","stoika"),
                    array( "IOzjeton","stoika"),
                    array( "doubleIO","stoika")
                );
            $content = array(
                array("АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT","Преимущества: вдвое меньшая стоимость, высочайшая надежность с приятным дизайном и удобством использования, функциональный сенсорный экран... <a href=\"/gear/details/?gear=light\" class=\"accent-coloor\">далее</a>"),
                array("АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА STANDARD","Многофункциональная автоматизированная касса для оплаты услуг парковки - устройство премиум класса в линейке RPS. Высочайшая надежность... <a href=\"/gear/details/?gear=standart\" class=\"accent-coloor\">далее</a>"),
                array("Двухсторонняя стойка въезда-выезда на жетонах","Двухсторонняя стойка одновременно выполняет функции въездной и выездной стойки. Такая конструкция исключает необходимость ... <a href=\"/gear/details/?gear=zjeton\" class=\"accent-coloor\">далее</a>"),
                array("СТОЙКА ВЪЕЗДА-ВЫЕЗДА","Обеспечивают доступ клиента на парковку, управляя периферийными устройствами. Въездные и выездные стойки являются важнейшими частями АСПП. Огромный функционал и ... <a href=\"/gear/details/?gear=IO\" class=\"accent-coloor\">далее</a>"),
                array("СТОЙКА ВЪЕЗДА-ВЫЕЗДА НА ЖЕТОНАХ","Въездные и выездные стойки являются важнейшими частями АСПП. Огромный функционал и гибкость позволят адаптировать ... <a href=\"/gear/details/?gear=IOzjeton\" class=\"accent-coloor\">далее</a>"),
                array("ДВУХУРОВНЕВАЯ СТОЙКА ВЪЕЗДА-ВЫЕЗДА","Двухуровневые въездные и выездные стойки поставляются в составе АСПП RPS. Обеспечивают простой доступ на территорию паркинга как легковым ... <a href=\"/gear/details/?gear=doubleIO\" class=\"accent-coloor\">далее</a>"),
            );
            $images = array(
                array("light.png","light2.png"),
                array("standart1.png","standart2.png"),
                array("zjeton.png","zjeton2.png"),
                array("IO.png","IO2.png"),
                array("IOzjeton.png"),
                array("doubleIO.png"),

            );
            ?>

            <?php
            for($i=0; $i<count($ids);$i++){
                if($i==2){
                    echo
                    '<div style=" height: 100px; width: 1px;"></div>
                    <div class="theOps w3-cell-row w3-hide-medium w3-hide-small" style=" margin: 80px auto; /*font-size: 1.4vw;*/">
                        <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2 chosen2"onclick="openStoika(\'zjeton\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Двухсторонняя стойка въезда-выезда на жетонах</div>
                        <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika(\'IO\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Стойка въезда-выезда</div>
                        <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika(\'IOzjeton\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Стойка въезда-выезда на жетонах</div>
                        <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika(\'doubleIO\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Двухуровневая стойка въезда-выезда</div>
                    </div>
                    <div class="theOps  w3-hide-large" style=" margin: 80px auto; /*font-size: 1.4vw;*/">
                        <div class="w3-cell-row">
                            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2 chosen2"onclick="openStoika(\'zjeton\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Двухсторонняя стойка въезда-выезда на жетонах</div>
                            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika(\'IO\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Стойка въезда-выезда</div>
                        </div>
                        <div class="w3-cell-row">
                            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika(\'IOzjeton\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Стойка въезда-выезда на жетонах</div>
                            <div class="w3-cell w3-cell-middle at-tab-butt at-tab-butt2"onclick="openStoika(\'doubleIO\'); $(\'.chosen2\').removeClass(\'chosen2\'); $(this).addClass(\'chosen2\');">Двухуровневая стойка въезда-выезда</div>
                        </div>
                    </div>
                    
                    ';
                }
                //if($i>1) echo '<div class="w3-container" id="pads" style="max-width: 1200px; width: 80%; margin: auto">';
                echo'
                <div  id="'.$ids[$i][0].'" class="'.$ids[$i][1].' w3-cell-row" style="width: 100%; margin-top: 60px;">
				<div class="w3-cell w3-cell-middle w3-padding w3-hide-small w3-hide-medium">
                    <h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">'.$content[$i][0].'</h2>
                    <p style="font-family: AvenirNext-Regular; font-size: 24px;">'.$content[$i][1].'</p>
				</div>
                <div class="w3-cell w3-cell-middle w3-hide-small w3-hide-medium" style="width: 50%">
                    <div class="w3-display-container">
                        <div class="" style="padding-top: 90%; width: 100%;">
                        </div>
                        <div class="w3-display-middle w3-card-4" style="width: 100%; height: 85%;"></div>
                        <div class="w3-display-middle w3-white" style="width: 65%; height: 100%; "></div>
                        <div class="w3-display-topmiddle" style="width: 65%; height: 75%; ">
                            <a href="/gear/details/?gear='.$ids[$i][0].'">
                                <img class="'.$ids[$i][0].' slidePic" src="gear_photo/'.$images[$i][0].'" width="100%" height="auto">';
                        if(count($images[$i])>1) echo '
                                <img class="'.$ids[$i][0].' slidePic" src="gear_photo/'.$images[$i][1].'" width="100%" height="auto">
                            </a>';
                    echo
                        '</div>
                        <a style="text-decoration: none" href="/gear/details/?gear='.$ids[$i][0].'"><div class="w3-display-bottommiddle" style="font-size: 1.8vw; background-color: rgba(73,73,73,0.56); width: 65%; height: 25%; text-align: center; padding: 10px">
                            '.$content[$i][0].'
                        </div></a>';
                    if(count($images[$i])>1)   echo
                        '<div class="w3-display-left" style="width: 17.5%; height: 10%; cursor: pointer">
                            <div class="w3-cell-row" style="width: 7px; height: 100%; margin: auto">
                                <div onclick="plusDivs(\''.$ids[$i][0].'\',-1)" class="w3-cell w3-cell-middle" style="height: 100%;">
                                    <svg style="zoom: 2.0" height="18" width="8">
                                        <polygon points="7,17 7,1 1,9" style="fill:rgba(0,0,0,0);stroke:white;stroke-width:1px;" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w3-display-right" style="width: 17.5%; height: 10%; cursor: pointer">
                            <div class="w3-cell-row" style="width: 7px; height: 100%; margin: auto">
                                <div onclick="plusDivs(\''.$ids[$i][0].'\',1)" class="w3-cell w3-cell-middle" style="height: 100%;">
                                    <svg style="zoom: 2.0" height="18" width="8">
                                        <polygon points="1,17 1,1 7,9" style="fill:rgba(0,0,0,0);stroke:white;stroke-width:1px;" />
                                    </svg>
                                </div>
                            </div>
                        </div>';
                    echo '
                    </div>
                </div>
                <div id="" onmouseover="blurDeMob(true)" onmouseleave="blurDeMob(false)" class="imageMobFour w3-hide-large">
                    <div class="w3-display-container" style="width: 100%; margin: auto;text-shadow: 2px 2px 8px black;">
                        <img class="'.$ids[$i][0].'2 slidePic" src="gear_photo/'.$images[$i][0].'" width="100%" height="auto">';
                    if(count($images[$i])>1) echo
                        '<img class="'.$ids[$i][0].'2 slidePic" src="gear_photo/'.$images[$i][1].'" width="100%" height="auto">';
//                    echo'
//                        <div class="w3-display-topmiddle titleOfFour   w3-display-hover" style="width: 90%; text-align: center; text-transform: uppercase; z-index: 4!important; pointer-events: none">'.$content[$i][0].'</div>
//                        <div class="w3-display-bottommiddle listOfFour w3-display-hover" style="width: 90%; z-index: 4!important;  pointer-events: none">'.$content[$i][1].'</div>';
                    echo'
                        <!--div id="white" class="w3-display-left" style="margin: 0; padding: 0; width: 0/*40%*/; height: 100%; background-color: white; opacity: 1"></div>
                        <div id="orang" class="w3-display-left" style="margin: 0; padding: 0; width: 0/*95%*/; height: 100%; background-color: #efa426; opacity: 0.6"></div-->            
                        <div class="w3-display-middle w3-display-hover sumOfFour" style="width: 75%; padding-bottom: 3%"><h2>'.$content[$i][0].'</h2>'.$content[$i][1].'</div>';
                    if(count($images[$i])>1) echo '
                        <div class="w3-display-left" style="width: 17.5%; height: 10%; cursor: pointer">
                            <div class="w3-cell-row" style="width: 7px; height: 100%; margin: auto">
                                <div onclick="plusDivs(\''.$ids[$i][0].'2\',-1)" class="w3-cell w3-cell-middle" style="height: 100%;">
                                    <svg style="zoom: 2.0" height="18" width="8">
                                        <polygon points="7,17 7,1 1,9" style="fill:rgba(0,0,0,0);stroke:white;stroke-width:1px;" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w3-display-right" style="width: 17.5%; height: 10%; cursor: pointer">
                            <div class="w3-cell-row" style="width: 7px; height: 100%; margin: auto">
                                <div onclick="plusDivs(\''.$ids[$i][0].'2\',1)" class="w3-cell w3-cell-middle" style="height: 100%;">
                                    <svg style="zoom: 2.0" height="18" width="8">
                                        <polygon points="1,17 1,1 7,9" style="fill:rgba(0,0,0,0);stroke:white;stroke-width:1px;" />
                                    </svg>
                                </div>
                            </div>
                        </div>';
                    echo'
                    </div>
                </div>
            </div>
                ';
                //if($i>1) echo '</div>';
            }
            ?>

        </div>

        <script>
            function blurDeMob(state) {
                if(state){
                    $("#white").animate({width:"40%"});
                    $("#orang").animate({width:"100%"});
                }else{
                    $("#white").animate({width:"0"});
                    $("#orang").animate({width:"0"});
                }
            }
        </script>

        <div style="height: 150px ; width: 1px;"></div>
		<?php include "$root/common/footer.html"; ?>
	</body>
</html>