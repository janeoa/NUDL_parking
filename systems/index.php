<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Системы</title>
		<?php $dir = "systems"; include "$root/common/libs.html";?>
        <meta name="author" content="Asset Malik"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="/common/w3.css"/>
        <script src="/common/jquery.min.js"></script>
        <script src="/common/jquery-ui.js"></script>
        <link rel="stylesheet" href="/common/fontawesome-free-5.1.0-web/css/all.css"/>
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
                background-color: rgba(0,0,0,0.8);
                background-image: url("blurred.jpg");
                background-repeat: repeat-y;
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
                #why, #benefits-route{
                    zoom: 0.6;
                }
                .tooltiptext{
                    zoom: 1.6;
                }
            }

            @media screen and (max-width: 600px){
                #why, #benefits-route{
                    zoom: 0.30;
                }
                .tooltiptext{
                    zoom: 2;
                }
                #workingS{
                    zoom: 0.4;
                }
                h1{
                    font-size: 24px!important;
                    font-weight: bold!important;
                }
                h2{
                    font-size: 20px!important;
                    font-weight: bold!important;
                }
                .bene-tooltip{
                    zoom: 2;
                }
                #oIC{
                    margin: 1px !important;
                }
            }

            ul.dashed{
                list-style: none;
                padding-left: 0;
            }

            ul.dashed > li {
                margin-left: 20px;
            }

            /* Prevent nested li's from getting messed up */
            ul.dashed > li::before {
                content: "— ";
                margin-left: -15px;
            }
		</style>

	</head>
	
	<body>
		<?php
        include "$root/common/navbar.php";
        ?>

		<div class="w3-container" style="text-align: center; height: 100%" id="first">
			<h1 class="accent-coloor" style="max-width: 945px; font-family: AvenirNext-Bold; font-size: 36px; margin: 15% auto 40px auto;">АВТОМАТИЗИРОВАННАЯ СИСТЕМА УПРАВЛЕНИЯ ПЛАТНОЙ ПАРКОВКОЙ</h1>
			<p style="font-size: 24px; font-family: AvenirNext-MediumItalic; max-width: 817px; margin: 0 auto 0 auto">Автоматизирует контроль над въездом и выездом машин на стоянку и процесс оплаты использования парковочного пространства.</p>
		</div>

        <div class="w3-container accent-coloor" style="text-align: center; margin-bottom: 200px" id="why">
            <h2 class="at-bold" style="margin-bottom: 60px;">Зачем устанавливать</h2>
            <div class="w3-cell-row" style="font-size: 24px; width: 80%; margin: auto">
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip" style="position: relative"><img class="" style="height: 60px;" src="why/profitable.png"/><p class="at-DemiDold">выгода</p><p class="tooltiptext">Сокращение количества персонала. Повышение прибыли с платной парковки</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip" style="position: relative"><img class="" style="height: 60px;" src="why/fast.png"/><p class="at-DemiDold">быстрота</p><p class="tooltiptext">Эффективное управление пропускной способностью платной парковки</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip" style="position: relative"><img class="" style="height: 60px;" src="why/security.png"/><p class="at-DemiDold">безопастность</p><p class="tooltiptext">Уменьшение числа злоупотреблений со стороны клиентов и персонала. Предотвращение угона транспортных средств.</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip" style="position: relative"><img class="" style="height: 60px;" src="why/control.png"/><p class="at-DemiDold">контроль</p><p class="tooltiptext">Подробная финансовая отчётность и анализ</p></div></div>
                <div class="w3-cell" style="padding: 5px;"><div class="tooltip" style="position: relative"><img class="" style="height: 60px;" src="why/comfort.png"/><p class="at-DemiDold">комфорт</p><p class="tooltiptext">Как для клиента, так и для владельца парковки</p></div></div>

            </div>
        </div>

        <div class="w3-container" id="benefits">
            <h2 class="at-bold">наши возможности</h2>

            <div style="position: relative; width: 600px; height: 650px; margin: auto;" id="benefits-route">
                <img id="bnimg" width="600px" height="auto"  src="flags.png"/>
                <div id="benefits_h" style="color: white;">
                    <style>
                        .at-flag{
                            position: absolute;
                            text-transform: uppercase;
                            border-bottom: solid 1px rgba(255,255,255, 0.3);
                            cursor: pointer;
                        }

                        .bene-tooltip{
                            position: absolute;
                            padding: 20px;
                            background-color: rgba(128,128,128, 0.9);
                            display: none;
                            pointer-events: none;
                        }
                    </style>
                    <script>
                        function hoverbt(id) {
                            if(id==0){
                                $(".bene-tooltip").fadeOut();
                                $(".at-flag").animate({opacity:'1'});
                            }else{
                                $(".at-flag").animate({opacity:'0.1'});
                                $("#"+id).fadeIn();
                            }
                        }

                    </script>
                    <p class="at-flag" onmouseover="hoverbt('bt1')" onmouseleave="hoverbt(0)" style="left: 30%; top:0%">Разовые, постоянные клиенты</p>
                    <div id="bt1" class="bene-tooltip" style="right: -10%; top:8%">Автоматическая система платной парковки RPS Все устройства системы для автоматизации платных парковок предназначены для работы с обоими типами клиентов, а единый носитель (MiFare-карты) упрощает обслуживание и повышает стабильность работы системы. Возможность установки RFID для безостановочного проезда постоянных клиенов.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt2')" onmouseleave="hoverbt(0)" style="right: -10%; top:18%">Оплата</p>
                    <div id="bt2" class="bene-tooltip" style="left: -5%; top:10%">Автоматическая система платной парковки RPS Любые средства оплаты: наличный расчёт, банковские карты, в том числе бесконтактные PayPass. Оплата картами PayPass на стойках выезда (платежи до 1000 рублей). Выдача штрафных карт на кассовых автоматах. Полная и подробная финансовая отчетность со всех устройств на рабочей станции.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt3')" onmouseleave="hoverbt(0)" style="left: 10%; top:24%">Контроль доступа клиентов</p>
                    <div id="bt3" class="bene-tooltip" style="right: -10%; top:8%">Автоматическая система платной парковки RPS Парковочное пространство может быть разбито на зоны при помощи стоек ПК (постоянного клиента). Возможность доступа к различным зонам определяется на основе группы, присвоенной клиенту.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt4')" onmouseleave="hoverbt(0)" style="left: 0%; top:34%">Абонементы</p>
                    <div id="bt4" class="bene-tooltip" style="right: -10%; top:8%">Автоматическая система платной парковки RPS Возможность создания абонементных тарифных сеток. Оплата абонементов через кассовые автоматы.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt5')" onmouseleave="hoverbt(0)" style="right: -20%; bottom:45%">Безопасность и распознавание номеров ТС</p>
                    <div id="bt5" class="bene-tooltip" style="left: 0%; top:48%">Автоматическая система платной парковки RPS Возможность интеграции системы распознавания госномеров позволяет реализовать следующий функции: - Черные списки. Система автоматизации парковки не будет пропускать на парковку ТС с гос. номером из черного списка. - Охранная функция. При заезде на парковку номер ТС связывается с номером выданной карты. При попытке выезда с парковки на чужом ТС система автоматизации выявит несоответствие номера MiFare-карты с госномером и не позволит ТС покинуть паркинг. Оператору будет отправлена соответствующая тревога.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt6')" onmouseleave="hoverbt(0)" style="right: -32%; bottom:34%">Стабильность и<br>отказоустойчивость</p>
                    <div id="bt6" class="bene-tooltip" style="left: 0%; top:48%">Автоматическая система платной парковки RPS Применяемые технологии позволяют достичь высочайшей стабильности и надежности системы автоматизации платного паркинга. Устройства продолжают работать при отключенной связи с сервером, сохраняя 90% своего функционала. При этом осуществленные за время отсутствия связи транзакции выгружаются на сервер сразу после ее появления. Все устройства в системе автоматизации платной парковки имеют встроенные источники питания, позволяющие работать даже при отключении электропитания.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt7')" onmouseleave="hoverbt(0)" style="right: -30%; bottom:4%">Программы лояльности для<br>постоянных клиентов</p>
                    <div id="bt7" class="bene-tooltip" style="left: 0%; top:48%">Автоматическая система платной парковки RPS Возможности тарифного калькулятора РПС включают создание зависимости тарифного плана постоянного клиента от таких параметров, как количество въездов или проведенного времени на парковке. Это позволяет создавать программы лояльности, при которых стоимость использования парковки изменяется от указанных выше параметров.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt8')" onmouseleave="hoverbt(0)" style="left: 20%; bottom:24%">Неограниченные возможности<br>тарифного калькулятора</p>
                    <div id="bt8" class="bene-tooltip" style="left: 0%; top:48%">Автоматическая система платной парковки RPS Учет дней недели, праздников, времени суток. Система МСП, позволяющая ограничивать максимальную сумму за день/сутки/недели и т. д. Широчайший набор инструментов для работы со «Временем вначале», «Временем после оплаты» и пр.</div>
                    <p class="at-flag" onmouseover="hoverbt('bt9')" onmouseleave="hoverbt(0)" style="left: -25%; bottom:16%">Online рабочая станция<br> для управления системой</p>
                    <div id="bt9" class="bene-tooltip" style="left: 0%; top:48%">Автоматическая система платной парковки RPS Возможность удаленного управления. Красивый, интуитивно понятный интерфейс. Полный набор инструментов для работы с клиентом в модуле «Центр управления»: голосовая связь, управление картой клиента в устройстве, мониторинг состояния и пр. Любые виды отчетов: финансы, заполненность, журнал действий оператора и пр. Настройка любых параметров устройств. Ролевая система прав доступа к модулям и частям.</div>

                </div>
            </div>
        </div>

        <div class="w3-container" id="areas">
            <h2 class="at-bold">области применения</h2>
            <?php
            include "areas.html";
            ?>
        </div>

        <div class="w3-container" id="workingS">
            <h2 class="at-bold">схема работы</h2>
            <div style="width: 800px; margin: auto; position: relative">
                <img src="carsss.png" width="800px" height="auto">

                <style>
                    .about{
                        background-color: #f5a623;
                        border-radius: 5px;
                        position: absolute;
                        color: black;
                        padding: 3px 30px;
                        font-weight: bold;
                    }
                </style>

                <div class="about" style="top: 5%; left: 35%;">Переездные</div>
                <div class="about" style="right: 5%; top: 28%;">RFID считыватели</div>
                <div class="about" style="right: 1%; top: 40%;">Стойка выезда</div>
                <div class="about" style="top: 45%; left: 15%;">Автоматизированные кассы</div>
                <div class="about" style="bottom: 35%; left: 45%;">Стойка выезда</div>
                <div class="about" style="bottom: 25%; right: 15%;">Камера распознавания</div>

            </div>
        </div>

        <div class="w3-container" id="otherInfo">
            <h2 class="at-bold">дополнительная информация</h2>

            <div id="oIC" class="w3-container w3-white w3-round" style="margin: auto 10%; padding: 4%;">
                <h2 style="font-weight: bolder">АВТОМАТИЗИРОВАННЫЕ ПАРКОВОЧНЫЕ СИСТЕМЫ — ОПТИМАЛЬНОЕ УПРАВЛЕНИЕ ПАРКИНГОМ</h2>
                <p>Автоматизированные парковочные системы — программно-аппаратный комплекс для повышения контроля, безопасности и комфорта парковочного пространства. Он находит широкое применение на следующих объектах: торгово-развлекательные центры, бизнес-центры, промышленные предприятия, гостиницы, зоны отдыха, парки и другие охраняемые территории.</p>
                <p>На оборудование RPS инсталлируется специальное программное обеспечение. Система не только легко устанавливается на любом объекте, но и максимально эффективно настраивается под решение конкретных задач. Это позволяет организовать эффективное управление паркингом.</p>
                <p>Основными элементами автоматизированной парковочной системы являются:</p>
                <ul class="dashed">
                    <li>	стойки въезда;</li>
                    <li>	стойки выезда;</li>
                    <li>	шлагбаум;</li>
                    <li>	автоматическая парковочная касса (паркомат);</li>
                    <li>	системы распознавания автомобильных номеров;</li>
                    <li>	шлагбаум;</li>
                    <li>	RFID-считыватель;</li>
                    <li>	рабочая станция клиента.</li>
                </ul>
                <p>В автоматизированную парковочную систему заложены возможности по работе с постоянными и разовыми посетителями. Постоянные клиенты получают доступ к парковочному пространству на основе абонементов в виде многоразовых карт. Разовые посетители могут въехать на территорию паркинга, получив разовую карту на въезде.</p>
                <p>Автоматизированные парковочные системы для платной парковки позволяют получать полный отчет о работе за любой период времени, контролировать финансы и проводить необходимый анализ. Все вышесказанное лишь подтверждает удобство использования оборудования для владельца парковки и его клиентов.</p>
                <p>Кроме того, автоматизация парковки помогает упростить процесс оплаты за услуги парковки и предотвращает нечестную работу обслуживающего персонала. С учетом того, что устройство и вовсе может обходиться без кадров, вы экономите на налогах и заработной плате.</p>
                <p>Парковки RPS с распознаванием автомобильных номеров могут быть использованы в торговых и бизнес-центрах, комплексах различного назначения, отелях и парковых зонах, а также жилых массивах, аэропортах и вокзалах. Управление системой осуществляется удаленно и не требует дополнительных затрат.</p>
            </div>
        </div>


        <?php
        include "$root/common/footer.html";
        ?>
	</body>
</html>