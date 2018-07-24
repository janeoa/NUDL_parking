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
        <link rel="stylesheet" href="/common/fonts.css"/>
        <script src="/common/jquery.min.js"></script>
		<link rel="stylesheet" href="/common/fontawesome-free-5.1.0-web/css/all.css"/>
        <link rel="stylesheet" href="/common/main.css"/>
        <link rel="stylesheet" href="/common/root.css"/>
        <link rel="stylesheet" href="/common/adaptive.css"/>

    </head>
	
	<body>
		<!--NAV -->
		<?php
			include("common/navbar.php");
		?>
		
		<div style="" class="" id="first">
			<div id="firsth11DIV" class="leftShift" style="position: absolute; top:23%; left: 13%; width: 60%; z-index: 4">
				<h1 id="firsth11" style="">Паркинг нового<br/>поколения</h1>
            </div>
            <div class="leftShift" style="position: absolute; top:42%; left: 13%; width: 60%; z-index: 4">
				<div id="firstp1DIV" class="w3-border-white w3-border-left w3-margin-bottom" style="padding-left: 3%; border-width: 3px !important;">
					<p id="firstp1" style="">Умные<br class="w3-hide-large w3-hide-medium"/> технологии & продуманный<br/>дизайн</p>
				</div>

                <br>
                <div style=" width: 51.5%;" class="w3-cell-row w3-hide-small">
                    <a href="/systems" style="text-decoration: none;" class="w3-cell w3-cell-middle mainbts">Подробнее</a>
                    <div onclick="document.getElementById('id01').style.display='block'" class="w3-cell w3-cell-middle mainbts nd2">Заказать звонок</div>
                </div>
			</div>

			<div id="cars">
				<div id="" style="position: absolute; right: 8%; height: 27%; top: 11%;" class="at-car">
					<img src="img/car.png" width="auto" height="100%"/>
				</div>
				<div id="car2" style="" class="at-car">
					<img src="img/car.png" width="auto" height="100%"/>
				</div>
                <div id="" style="position: absolute; right: 8%; height: 27%; bottom: 3%;" class="at-car">
                    <img src="img/car.png" width="auto" height="100%"/>
                </div>
				<div style="position: absolute; right:  5.7%; width: 1.2%; bottom:35%; height: 36%; transform-origin: top right; transform: rotate(63deg); background-color: #efa426"></div>
				<div style="position: absolute; right:  5.7%; width: 1.2%; bottom: 5%; height: 36%; transform-origin: top right; transform: rotate(63deg); background-color: #efa426"></div>
				<div style="position: absolute; right:  5.7%; width: 1.2%; bottom:  0; height: 91%; background-color: #efa426"></div>
				
			</div>
		</div>

		<div class="w3-white" style=" padding: 2% 10%;" id="second">
			<h2 style="text-align: center; font-family: AvenirNext-Bold; font-size: calc(24px + .8vw);; min-font-size: 24px; margin-top: 0; text-transform: uppercase"><span style="border: #f5a623;border-style: solid; border-width: 0px 0px 4px 0px">Почему мы?</span></h2>
			<div class="w3-row" style="font-family: AvenirNext-DemiBold; font-size: 20px;color: #525252;">
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
					<p>Доставляем по всему миру</p>
				</div>
				<div class="w3-col m6 l3 at-wedo">
					<div class="at-circle w3-display-container">
						<div class="w3-display-middle w3-jumbo"><i class="far fa-clock"></i></div>
					</div>
					<p>Оказываем полный комплекс услуг</p>
				</div>
				<div class="w3-col m6 l3 at-wedo">
					<div class="at-circle w3-display-container">
						<div class="w3-display-middle w3-jumbo"><i class="far fa-comment-dots"></i></div>
					</div>
					<p>Принимаем заявки в тех. поддержку 24/7</p>
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
							&nbsp;<!--img class="" src="img/arrow-right.png" height="31px" width="auto" alt="decorative arrow" style="cursor: pointer"/--></h2>
					</div>
				</div>
			</div>
		</div>
		
        <?php
        include ("$root/four.html");
        include ("$root/common/footer.html");
        ?>


        <div id="id01" class="w3-modal" style="z-index: 11">
            <div class="w3-modal-content">
                <form class="w3-container w3-padding w3-white" action="/orderCall.php" method="post">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <label>Как к вам обратиться?</label><input name="name" placeholder="ваше имя" class="w3-input" type="text"/>
                    <label>Ваш номер телефона</label><input name="tel" placeholder="+7(7xx)xxx-xxxx" class="w3-input" type="tel" required/>
                    <button class="w3-button w3-margin mainbts nd2" style="border-radius: 12px!important; color: white; padding: 0; width: 200px!important;">Заказать звонок</button>                  </button>
                </form>
            </div>
        </div>
	</body>
</html>