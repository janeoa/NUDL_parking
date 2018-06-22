<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Системы</title>
		<?php $dir = "systems"; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
		<link rel="stylesheet" href="/common/main.css"/>
        <link rel="stylesheet" href="/common/tooltip.css">
		
		<style>
			
			.whyIcons{
				width: 30%;
				height: auto;
			}
			
			.whyContainers{
				width: 20%;
			}

            body{
                background-image: url("blurred.png");
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
            }

            .at-bold{
                font-family: AvenirNext-Bold;
                text-transform: uppercase;
            }

            h2.at-bold{
                font-family: AvenirNext-Bold;
                text-transform: uppercase;
                color: #efa426;
                margin: 40px auto;
                text-align: center;
            }

            p.at-DemiDold{
                font-family: AvenirNext-DemiBold; text-transform: uppercase;
            }

            @media screen and (max-width: 993px){
                #why{
                    zoom: 0.6;
                }
                .tooltiptext{
                    zoom: 1.6;
                }
            }

            @media screen and (max-width: 600px){
                #why{
                    zoom: 0.4;
                }
                .tooltiptext{
                    zoom: 2;
                }
            }
		</style>

	</head>
	
	<body>
		<?php
        include "$root/common/navbar.php";
        ?>
		
		<div id="logo" style="margin-top:67px; margin-left: 10%">
			LOGO
		</div>
		
		<div class="w3-container" style="text-align: center" id="first">
			<h1 class="accent-coloor" style="font-family: AvenirNext-Bold; font-size: 36px; margin-top: 10%;">АВТОМАТИЗИРОВАННАЯ СИСТЕМА УПРАВЛЕНИЯ ПЛАТНОЙ ПАРКОВКОЙ</h1>
			<p style="font-family: AvenirNext-MediumItalic; max-width: 817px; margin: auto">Автоматизирует контроль над въездом и выездом машин на стоянку и процесс оплаты использования парковочного пространства.</p>
		</div>

        <div class="w3-container accent-coloor" style="text-align: center; margin-bottom: 200px" id="why">
            <h2 class="at-bold" style="margin-bottom: 60px;">Зачем устанавливать</h2>
            <div class="w3-cell-row" style="font-size: 24px; width: 80%; margin: auto">
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip"><img class="" style="height: 60px;" src="why/profitable.png"/><p class="at-DemiDold">выгода</p><p class="tooltiptext">Сокращение количества персонала. Повышение прибыли с платной парковки</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip"><img class="" style="height: 60px;" src="why/fast.png"/><p class="at-DemiDold">быстрота</p><p class="tooltiptext">Эффективное управление пропускной способностью платной парковки</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip"><img class="" style="height: 60px;" src="why/security.png"/><p class="at-DemiDold">безопастность</p><p class="tooltiptext">Уменьшение числа злоупотреблений со стороны клиентов и персонала. Предотвращение угона транспортных средств.</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip"><img class="" style="height: 60px;" src="why/control.png"/><p class="at-DemiDold">контроль</p><p class="tooltiptext">Подробная финансовая отчётность и анализ</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip"><img class="" style="height: 60px;" src="why/comfort.png"/><p class="at-DemiDold">комфорт</p><p class="tooltiptext">Как для клиента, так и для владельца парковки</p></div></div>

            </div>
        </div>

        <div class="w3-container" id="benefits">
            <h2 class="at-bold">наши возможности</h2>

            <div style="position: relative; height: 600px;">
                <img width="60%" height="auto" style="position: absolute; left: 20%;" src="flags.png"/>
                <div id="benefits_h" style="color: white;">
                    <style>
                        .at-flag{
                            position: absolute;
                            padding-right: 5%;
                            text-transform: uppercase;
                            border-bottom: solid 1px rgba(255,255,255, 0.3);
                        }
                    </style>
                    <p class="at-flag">Разовые, постоянные клиенты</p>
                    <p class="at-flag">Оплата</p>
                    <p class="at-flag">Контроль доступа клиентов</p>
                    <p class="at-flag">Абонементы</p>
                    <p class="at-flag">Безопасность и распознавание номеров ТС</p>
                    <p class="at-flag">Стабильность и отказоустойчивость</p>
                    <p class="at-flag">Программы лояльности для постоянных клиентов</p>
                    <p class="at-flag">Неограниченные возможности тарифного калькулятора</p>
                    <p class="at-flag" style="left: 0; bottom:16%">Online рабочая станция<br> для управления системой</p>

                </div>
            </div>
        </div>

        <div class="w3-container" id="areas">
            <h2 class="at-bold">области применения</h2>
        </div>

        <div class="w3-container" id="workingS">
            <h2 class="at-bold">схема работы</h2>
        </div>

        <div class="w3-container" id="otherInfo">
            <h2 class="at-bold">дополнительная информация</h2>
        </div>


        <?php
        include "$root/common/footer.html";
        ?>
	</body>
</html>