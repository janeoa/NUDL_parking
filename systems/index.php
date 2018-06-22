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
		
		<style>
			
			.whyIcons{
				width: 100%;
				height: auto;
			}
			
			.whyContainers{
				width: 20%;
				border: solid black;
			}

            body{
                background-image: url("blurred.png");
                background-repeat: no-repeat;
                background-position: center center;
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

            .whyContainers p{
                text-transform: uppercase
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
		
		<div class="w3-container accent-coloor" style="text-align: center;" id="why">
			<h2 class="at-bold" style="">Зачем устанавливать</h2>
			<div class="w3-row w3-green" style="font-family: AvenirNext-DemiBold; font-size: 24px; width: 80%; margin: auto">
				<div class="whyContainers w3-container w3-yellow w3-col">
					<img class="whyIcons w3-red" src="why/profitable.png"/>
					<p>выгода</p>
				</div>
				<div class="whyContainers w3-container w3-col">
					<img class="whyIcons" src="why/fast.png"/>
					<p>быстрота</p>
				</div>
				<div class="whyContainers w3-container w3-col">
					<img class="whyIcons" src="why/security.png"/>
					<p>безопасность</p>
				</div>
				<div class="whyContainers w3-container w3-col">
					<img class="whyIcons" src="why/control.png"/>
					<p>контроль</p>
				</div>
				<div class="whyContainers w3-container w3-col">
					<img class="whyIcons" src="why/comfort.png"/>
					<p>комфорт</p>
				</div>
			</div>
		</div>

        <div class="w3-container" id="benefits">
            <h2 class="at-bold">наши возможности</h2>
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