<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Оборудование</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/common/main.css">

        <style>
            html, body{
                font-family: AvenirNext-Regular;
                background-image: url('../img/first.jpg');
                background-position: center center;
                background-repeat: no-repeat;
            }
        </style>

		<script>
			$(document).ready(function(){
				adapt();
				$(".at-under").addClass("w3-border-bottom w3-border-black w3-hover-border-orange ");
			});
			
			$(function () {
			  $(document).scroll(function () {
			    adapt();
			  });
			});
			
			function adapt(){
				var $nav = $(".navbar-fixed-top");
			    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			}
		</script>
	</head>
	
	<body>
		<div id="nav" class="w3-top navbar-fixed-top" style="padding: 67px 10% 67px 25%;"  >
			<div class="w3-row">
				<div class="w3-col at-nav">
					<a href="../" style="text-decoration: none"><span class="at-under">Главная</span></a>
				</div>
				<div class="w3-col at-nav">
					<a href="../systems/" style="text-decoration: none"><span class="at-under">Системы</span></a>
				</div>
				<div class="w3-col at-nav" style="width: 24% !important">
					<span class="at-under" style="border-color: #efa426 !important">Оборудование</span>
				</div>
				<div class="w3-col at-nav">
					<span class="at-under">Контакты</span>
				</div>
				<div class="w3-rest w3-right" style="border-radius: 13.5px; border: solid 1px #979797; padding: 0 3px;">
					<span><i class="fas fa-phone" style="transform: rotate(90deg); color: #f5a623"></i></span>
					862-902-2352
				</div>
			</div>
		</div>
		
		<div id="logo" style="margin-top:67px; margin-left: 10%">
			LOGO
		</div>
		
		<div class="w3-container" id="first">
			<h1 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 44px; text-align: center; margin-top: 10%;">НАШЕ ОБОРУДОВАНИЕ</h1>
		</div>
		
		<style>
			.at-tab-butt{
				margin: 0 10px;
				padding: 13px 3px;
				text-align: center;
				cursor: pointer;
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
			<div class="w3-row" style="font-family: AvenirNext-Medium; font-size: 18px;">
				<div class="w3-third">
					<div class="at-tab-butt chosen">Парковочная касса LIGHT</div>
				</div>
				<div class="w3-third">
					<div class="at-tab-butt">Парковочная касса STANDARD</div>
				</div>
				<div class="w3-third">
					<div class="at-tab-butt">Паркоматы</div>
				</div>
			</div>
			
			<div class="" style="margin-top: 60px;">
				<div class="w3-cell w3-container" style="width: 50%;">
					<h2 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px;">АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT</h2>
					<p style="font-family: AvenirNext-Regular; font-size: 24px;">Преимущества: вдвое меньшая стоимость, высочайшая надежность с приятным дизайном и удобством использования, функциональный сенсорный экран <a href="#" class="accent-coloor w3-right">далее</a>
				</div>
				<div class="w3-cell w3-red" style="height: 300px; width: 50%;">
					<div style="position: relative; height: 100%">
						<div id="semiOpaque" class="w3-card-4" style="height: 300px; position: absolute; top: 20px; left: 0; bottom: 20px; right: 0; background-color: white; opacity: 0.2"></div>
						<div id="" style="position: absolute; left: 15%; top: 0; right: 15%; bottom: 0; background-color: white">
							<!--div style="position: relative;">
								<img style="position: absolute" src="gear_photo/1.jpg" height="80%" width="auto"/>
								<div style="position: relative; bottom: 0; height: 20%; font-family: AvenirNext-DemiBold; font-size: 20px; background-color: rgb(152,152,152); text-align: center; padding: 10px;">АВТОМАТИЧЕСКАЯ ПАРКОВОЧНАЯ КАССА LIGHT</div>
							</div-->
							<!--div class="w3-display-container">
								<div class="w3-display-topmiddle">
									<img style="padding: 0; margin: 0; height: 80%; width: auto" src="gear_photo/1.jpg"/>
								</div>
								<div class="w3-display-bottommiddle">
								</div>
							</div-->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div style="margin-top: 80px;width: 100%; height: 211px; background-color: #434343;" id="footer">
			<div class="w3-row" style="width: 400px; margin: auto">
				<div class="w3-third">
					<i class="fab fa-facebook-square"></i>
				</div>
				<div class="w3-third">
					<i class="fas fa-street-view"></i>
				</div>
				<div class="w3-third">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
		</div>
	</body>
</html>