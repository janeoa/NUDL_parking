<?php
/**
 * Created by PhpStorm.
 * User: assetmalik
 * Date: 6/23/18
 * Time: 3:22 AM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);


$title = array(
    "light" => 'Парковочная касса <span class="accent-coloor">LIGHT</span>',
    "standart" => 'Парковочная касса <span class="accent-coloor">STANDARD</span>',
    'zjeton' => 'ДВУХСТОРОННЯЯ СТОЙКА ВЪЕЗДА-ВЫЕЗДА НА ЖЕТОНАХ',
    'IO' => 'СТОЙКА ВЪЕЗДА-ВЫЕЗДА',
    'IOzjeton' => 'СТОЙКА ВЪЕЗДА-ВЫЕЗДА НА ЖЕТОНАХ',
    'doubleIO' => 'ДВУХУРОВНЕВАЯ СТОЙКА ВЪЕЗДА-ВЫЕЗДА',
    "parkomats" => 'ПАРКОМАТЫ'
);

$topText = array(
    "light" => 'Облегченная версия кассового автомата RPS CM Light практически не уступает по функционалу кассе RPS CM Standard, обладая при этом рядом значительных преимуществах, включая вдвое меньшую стоимость. Высочайшая надежность исполняющих узлов сочитается с приятным дизайном и удобством использования, а сенсорный экран позволяет реализовать весь спектр функциональных возможностей.',
    "standart" => 'Многофункциональная автоматизированная касса для оплаты услуг парковки - устройство премиум класса в линейке RPS. Высочайшая надежность исполняющих узлов сочетается с приятным дизайном и удобством использования, а большой сенсорный экран позволяет реализовать весь спектр функциональных возможностей.',
    'zjeton' => 'Двухсторонняя стойка одновременно выполняет функции въездной и выездной стойки. Такая конструкция исключает необходимость перекладывания парковочных носителей или закладывания новых. Это достигается путём рециркуляции жетонов внутри стойки.',
    'IO' => '<p>Обеспечивают доступ клиента на парковку, управляя периферийными устройствами.</p> 
            <p>Въездные и выездные стойки являются важнейшими частями АСПП. Огромный функционал и гибкость позволят адаптировать систему к любым бизнес моделям, а продуманный до мелочей дизайн обеспечит максимально комфортное использование.</p>',
    'IOzjeton' => '<p>Обеспечивают доступ клиента на парковку, управляя периферийными устройствами.</p> 
            <p>Въездные и выездные стойки являются важнейшими частями АСПП. Огромный функционал и гибкость позволят адаптировать систему к любым бизнес моделям, а продуманный до мелочей дизайн обеспечит максимально комфортное использование.</p>',
    'doubleIO' => 'Двухуровневые въездные и выездные стойки поставляются в составе АСПП RPS. Обеспечивают простой доступ на территорию паркинга как легковым, так и грузовым автомобилям.',
    "parkomats" => "<p>Компания RPS специализируется на проектировании, производстве, а также установке и обслуживании паркоматов собственной марки. У нас вы можете купить надежное оборудование по выгодной стоимости. На счету нашей команды — десятки реализованных проектов по обустройству парковок в разных городах России. Среди них — МДЦ «Москва-Сити», ТРЦ «Ривьера», ТРК «Небо», ТРЦ «Рига-Молл», аэропорт Череповца, гостиница Marriott Hotel, оптово-распределительный центр «Радумля» и др.</p>
                    <p>Терминалы полностью адаптированы к эксплуатации в погодных условиях России. Дополнительным подтверждением их надёжности служат декларации о соответствии техническим регламентам и стандартам Таможенного союза.t</p>
                    <p>В портфолио компании RPS представлены многочисленные кейсы — готовые проектно-технические решения для разных объектов. Реализованные проекты расположены в Москве, Шанхае, Череповце, Краснодаре, Ташкенте, Калининграде, Нижнем Новгороде и других городах в России и за рубежом.</p>"
);

$about = array(
    "light" => '<h2>БАЗОВЫЙ ФУНКЦИОНАЛ</h2>
                    <ul class="" style="list-style: none; padding-left: 0;">
                        <li>	Прием платежей банкнотами. Многоуровневая проверка подленности купюр;</li> 
                        <li>	Работа с разовыми и постоянными клиентами. Оплата абонементов; </li>
                        <li>	Расчет и выдача сдачи купюрами;</li>
                        <li>	Печать фискальных чеков;</li>
                        <li>	Голосовая связь с оператором;</li>
                        <li>	Диспенсер для выдачи штрафных карт;</li>
                        <li>	Многоязычный интерфейс с возможностью дополнительной локализации;</li>
                        <li>	IP видео камера с широкоугольным объективом Fisheye; </li>
                        <li>	UPS для работы при отключении питания;</li>
                        <li>	Климат контроль для работы в холодное время года;</li>
                    </ul>',
    'standart' => '<h2>БАЗОВЫЙ ФУНКЦИОНАЛ</h2>
                <ul><li>	Прием платежей банкнотами. Многоуровневая проверка подленности купюр;</li> 
                <li>	Работа с разовыми и постоянными клиентами. Оплата абонементов; </li>
                <li>	Расчет и выдача сдачи купюрами;</li>
                <li>	Печать фискальных чеков;</li>
                <li>	Голосовая связь с оператором;</li>
                <li>	Диспенсер для выдачи штрафных карт;</li>
                <li>	Многоязычный интерфейс с возможностью дополнительной локализации;</li>
                <li>	IP видео камера с широкоугольным объективом Fisheye; </li>
                <li>	UPS для работы в при отключении питания;</li>
                <li>	Климат контроль для работы в холодное время года;</li>
                </ul>
                <h2>ОПЦИИ</h2>
                <ul><li>	Прием и выдача сдачи монетами;</li>
                <li>	Прием к оплате банковских карт, включая бесконтактные PayPass;</li>
                <li>	Установка сканера штрихкодов для работы со скидками;</li>
                <li>	Комплект устройств для повышения автономности работы: купюроприемник с ящиком на 2500 купюр;</li>
                <li>	Диспенсер с двумя ящиками на 1000 и 1800 купюр.</li>
                </ul>
                <h2>ОСОБЕННОСТИ</h2>
                <ul><li>	Приятный дизайн с интуитивной навигацией клиента по процессу оплаты;</li>
                <li>	Функция отложенных Z отчетов - абсолютно легальная возможность экономии на инкассации и обслуживании;</li>
                <li>	Отдельный сейфовый отсек для устройств, работающих с наличными;</li>
                <li>	Большой 15 дюймовый сенсорный экран;</li>
                <li>	Большая подсвечиваемая надпись «ОПЛАТА ПАРКОВКИ»;</li>
                <li>	Антивандальная конструкция.</li>
                </ul>
                <h2>ПАРКОМАТ ПОМОГАЕТ СОКРАТИТЬ РАСХОДЫ ПО ОБСЛУЖИВАНИЮ ПАРКИНГА</h2>
                <p>Автоматическая парковочная касса предназначена для оплаты услуг парковки разовыми и постоянными посетителями наличными или банковской картой. Например, покупатели торгово-развлекательного центра являются разовым получателями услуг парковки, а его сотрудники или арендаторы – постоянные клиенты. Постоянные посетители могу приобрести абонемент на определенный период времени.</p>
                <p>Паркомат представляет собой автоматизированную кассу с набором функций, которые позволяют осуществлять платежи за использование парковочного пространства. Надежное производство терминала обеспечивает бесперебойную работу в любую погоду и время суток.</p>
                <p>Владельцы объектов с отдельным паркингом могут при помощи автоматизированной парковочной системы получать дополнительные финансовые выгоды от организации платной автопарковки. Поставить автоматическую парковочную кассу для самостоятельной оплаты парковки клиентами заинтересованы также владельцы бизнес-центров. Данная мера осуществляется ими с целью контроля пропуска на территорию только арендаторов помещений. А управляющая компания небольшого элитного жилого комплекса захочет закрыть въезд на территорию посторонних транспортных средств соседнего жилого комплекса.</p>
                <p>Клиенты в таком случае получат возможность парковать авто на специально выделенном месте, а владелец паркомата получит дополнительную прибыль, которая позволит покрыть ежемесячный налог за аренду территории и заработать. Такую схему используют многие магазины, кафе и рестораны.</p>
                <p>Установка данного оборудования позволяет экономить средства на содержании рабочего персонала. Отслеживание терминалом будет осуществляться автоматически.</p>
                <p>Автоматическая парковочная касса характеризуется понятным интерфейсом, привлекательным дизайном и широкими функциональными возможностями.</p>
',
    'zjeton' => '<h2>БАЗОВЫЙ ФУНКЦИОНАЛ</h2>
                <ul>
                <li>Выдача и прием жетонов;</li>
                <li>Работа с разовыми и постоянными клиентами;</li>
                <li>Управление переферийными устройствами: шлагбаумы, петлевые антенны, ИК датчики, высотомеры, RFID считыватели и пр.;</li>
                <li>Голосовая связь с оператором;</li>
                <li>Многоязычный интерфейс с возможностью дополнительной локализации;</li>
                <li>IP видео камера с широкоугольным объективом Fisheye;</li>
                <li>UPS для работы при отключении питания;</li>
                <li>Климат контроль для работы в холодное время года;</li>
                <li>Простой, но очень информативный встроенный светофор.</li>
                </ul>
                <h2>ОПЦИИ</h2>
                <ul>
                <li>Модуль для бесконтактной оплаты услуг</li>
                </ul>
                <p>парковки до 1000 рублей на стойке выезда;</p>
                <ul>
                <li>Установка сканера QR-кодов для работы</li>
                </ul>
                <p>с приглашениями и скидками. Возможность проезда или изменения тарифа по QR-коду;</p>
                <ul>
                <li>Управление периферийными устройствами: шлагбаумы, петлевые антенны, ИК датчики, высотомеры, RFID считыватели и пр.;</li>
                <li>Высотометр для диверсификации тарифов</li>
                </ul>
                <p>в зависимости от вида ТС</p>
                <ul>
                <li>RFID считыватель делает парковку</li>
                </ul>
                <p>комфортнее, обеспечивая безостановочный въезд и выезд для постоянных клиентов;</p>
                <ul>
                <li>Система распознавания номеров;</li>
                <li>Увеличенная ёмкость бункера жетонов до 4000.</li>
                </ul>
                <h2>ОСОБЕННОСТИ</h2>
                <ul>
                <li>Решение не требует обслуживания</li>
                </ul>
                <p>оператором за счёт рециркуляции носителя;</p>
                <ul>
                <li>Ключевая микромеханика от европейских производителей обеспечивает высокую надёжность работоспособности устройства;</li>
                </ul>',
    'IO' => '<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
            <h2>БАЗОВЫЙ ФУНКЦИОНАЛ</h2>
            <ul>
            <li>Выдача и прием парковочных карт;</li>
            <li>Работа с разовыми и постоянными клиентами;</li>
            <li>Управление переферийными устройствами: шлагбаумы, петлевые антенны, ИК датчики, высотомеры, RFID считыватели и пр.;</li>
            <li>Голосовая связь с оператором;</li>
            <li>Многоязычный интерфейс с возможностью дополнительной локализации;</li>
            <li>IP видео камера с широкоугольным объективом Fisheye;</li>
            <li>UPS для работы при отключении питания;</li>
            <li>Климат контроль для работы в холодное время года;</li>
            <li>Простой, но очень информативный встроенный светофор.</li>
            </ul>
            <h2>ОПЦИИ</h2>
            <ul>
            <li>Прием к оплате бесконтактных банковских карт Mastercard PayPass и Visa Payway позволяют оплачивать услуги парковки до 1000 рублей, прямо у стойки выезда;</li>
            <li>Установка сканера штрихкодов для работы со скидками. Возможность проезда или изменения тарифа по штрихкоду;</li>
            <li>Управление переферийными устройствами: шлагбаумы, петлевые антенны, ИК датчики, высотомеры, RFID считыватели и пр.;</li>
            <li>Голосовая связь с оператором;</li>
            <li>Многоязычный интерфейс с возможностью дополнительной локализации;</li>
            <li>IP видео камера с широкоугольным объективом Fisheye;</li>
            <li>UPS для работы при отключении питания;</li>
            <li>Климат контроль для работы в холодное время года;</li>
            <li>Простой, но очень информативный встроенный светофор.</li>
            </ul>
            <h2>ОСОБЕННОСТИ</h2>
            <ul>
            <li>Детально продуманный дизайн увеличивает пропускную способность и обеспечивает максимально комфортное использование;</li>
            <li>Цветной 7 дюймовый дисплей повышенной яркости;</li>
            <li>Подсветка рабочей зоны стойки упрощает использование ночью.</li>
            </ul>
            <p>&nbsp;</p>
            <h2>СТОЙКИ ПАРКОВКИ С ИНТЕРФЕЙСОМ, АДАПТИРОВАННЫЕ ПОД ЛЮБУЮ БИЗНЕС МОДЕЛЬ</h2>
            <p>Стойки парковки для въезда и выезда &mdash; обязательный элемент автоматизированной системы платной парковки RPS. Главное предназначение заключается в названии &mdash; контроль въезда и выезда автотранспорта.</p>
            <p>Стойки парковки обеспечивают доступ к парковке в автоматическом режиме, управляя периферийными устройствами. Стойка работает с разовым и постоянными посетителями, с помощью специальных парковочных карт. Гости паркинга могут въехать на его территорию по приглашению с QR-кодом.</p>
            <p>Каждая стойка оборудована ярким и контрастным дисплеем, благодаря чему информация легко воспринимается в любое время суток. В случае возникновения внештатной ситуации посетитель автостоянки может связаться с оператором по голосовой связи. Стойка выезда оборудована модулем работы с картами MasterCard PayPass и Visa PayWay. По этому клиент может оплатить услуги парковки на сумму до 1000 рублей прямо на выезде с территории паркинга.</p>
            <p>&nbsp;</p>
            <p>Автоматические стойки выдачи и приёма карт RPS окупаются за короткий промежуток времени с момента установки. За конкурентную цену вы получаете оборудование Premium-класса, с микромеханикой европейских производителей.</p>
            <p>В дополнение ко всему выше сказанному стойки въезда и выезда RPS обеспечивают:</p>
            <ul>
            <li>Повышение качества услуг парковки;</li>
            <li>Повышение уровня безопасности движения;</li>
            <li>Зонирование паркинга для разного типа посетителей и транспортных средств;</li>
            <li>Отчётность по посещениям и финансовым потокам;</li>
            <li>Предотвращение злоупотребления сотрудниками паркинга своими полномочиями.</li>
            </ul>',
    'IOzjeton' => '<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
            <h2>БАЗОВЫЙ ФУНКЦИОНАЛ</h2>
            <ul>
            <li>Выдача и прием жетонов;</li>
            <li>Работа с разовыми и постоянными клиентами;</li>
            <li>Управление переферийными устройствами: шлагбаумы, петлевые антенны, ИК датчики, высотомеры, RFID считыватели и пр.;</li>
            <li>Голосовая связь с оператором;</li>
            <li>Многоязычный интерфейс с возможностью дополнительной локализации;</li>
            <li>IP видео камера с широкоугольным объективом Fisheye;</li>
            <li>UPS для работы при отключении питания;</li>
            <li>Система климат контроля по регулированию влажности и температуры внутри стойки;</li>
            <li>Простой, но очень информативный встроенный светофор.</li>
            </ul>
            <h2>ОПЦИИ</h2>
            <ul>
            <li>Модуль для бесконтактной оплаты услуг парковки до 1000 рублей на стойке выезда;</li>
            <li>Установка сканера QR-кодов для работы с приглашениями и скидками.</li>
            <li>Возможность проезда или изменения тарифа по QR-коду;</li>
            <li>Высотометр для диверсификации тарифов в зависимости от вида ТС;</li>
            <li>RFID считыватель делает парковку комфортнее, обеспечивая безостановочный въезд и выезд для постоянных клиентов;</li>
            <li>Система распознавания номеров;</li>
            <li>Двухуровневые стойки для работы с грузовыми транспортными средствами;</li>
            <li>Увеличенная ёмкость хоппера жетонов до 4000.</li>
            </ul>
            <h2>ОСОБЕННОСТИ</h2>
            <ul>
            <li>Ключевая микромеханика от европейских производителей обеспечивает высокую надёжность работоспособности устройства;</li>
            <li>Цветной 7 дюймовый дисплей повышенной яркости;</li>
            <li>Подсветка рабочей зоны стойки упрощает использование ночью.</li>
            </ul>',
    'doubleIO' => '<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
            <h2>БАЗОВЫЙ ФУНКЦИОНАЛ</h2>
            <ul>
            <li>Выдача и прием жетонов;</li>
            <li>Работа с разовыми и постоянными клиентами;</li>
            <li>Управление переферийными устройствами: шлагбаумы, петлевые антенны, ИК датчики, высотомеры, RFID считыватели и пр.;</li>
            <li>Голосовая связь с оператором;</li>
            <li>Многоязычный интерфейс с возможностью дополнительной локализации;</li>
            <li>IP видео камера с широкоугольным объективом Fisheye;</li>
            <li>UPS для работы при отключении питания;</li>
            <li>Система климат контроля по регулированию влажности и температуры внутри стойки;</li>
            <li>Простой, но очень информативный встроенный светофор.</li>
            </ul>
            <h2>ОПЦИИ</h2>
            <ul>
            <li>Модуль для бесконтактной оплаты услуг парковки до 1000 рублей на стойке выезда;</li>
            <li>Установка сканера QR-кодов для работы с приглашениями и скидками.</li>
            <li>Возможность проезда или изменения тарифа по QR-коду;</li>
            <li>Высотометр для диверсификации тарифов в зависимости от вида ТС;</li>
            <li>RFID считыватель делает парковку комфортнее, обеспечивая безостановочный въезд и выезд для постоянных клиентов;</li>
            <li>Система распознавания номеров;</li>
            <li>Двухуровневые стойки для работы с грузовыми транспортными средствами;</li>
            <li>Увеличенная ёмкость хоппера жетонов до 4000.</li>
            </ul>
            <h2>ОСОБЕННОСТИ</h2>
            <ul>
            <li>Ключевая микромеханика от европейских производителей обеспечивает высокую надёжность работоспособности устройства;</li>
            <li>Цветной 7 дюймовый дисплей повышенной яркости;</li>
            <li>Подсветка рабочей зоны стойки упрощает использование ночью.</li>
            </ul>',
    'parkomats' => '<h2 class="accent-coloor">Установка паркомата — создание инфраструктуры XXI века</h2>
                    <div style="background-color: #efa426; width: 36px; height: 6px;"></div>
                    <p>Установка такого оборудования для парковки — решение, выгодное для всех: владельцев объекта, его персонала и посетителей. Представленные в этом разделе терминалы обладают богатым набором опций. В зависимости от модификации паркоматы выполняют следующие функции:</p>
                    <ul>
                    	<li>Принимают платежи, обрабатывают банкноты и банковские карты — предоставляют пользователям выбор между наличными и безналичными формами оплаты;</li>
                        <li>Генерируют отчётную документацию для последующего анализа и бухгалтерского учёта;</li>
                        <li>Проверяют подлинность внесённых денежных средств;</li>
                        <li>Передают данные в режиме реального времени по локальной сети;</li>
                        <li>Отсчитывают и выдают сдачу;</li>
                        <li>Интегрируются с другими элементами системы оплаты и исполнительными механизмами.</li>
                    </ul>'
);

$photo = array(
    "light" => 'light2.png',
    'standart' => 'standart1.png',
);

$specs = array(
    "light" => '<table>
                        <tr><td>Напряжение питания</td><td>AC 220 В/ 50 Гц</td></tr>
                        <tr><td>Потребляемая мощность</td><td>до 250 Вт без обогревателя, до 0,6 кВт с обогревателями</td></tr>
                        <tr><td>Интерфейсы подключения</td><td>TCP/IP</td></tr>
                        <tr><td>Ёмкость банкнотоприемника</td><td>1000 - 2500 купюр</td></tr>
                        <tr><td>Кол-во номиналов на сдачу</td><td>Программируется</td></tr>
                        <tr><td>Ёмкость ресайклера</td><td>200 купюр в обороте</td></tr>
                        <tr><td>Рабочая температура</td><td>от -40 до +50</td></tr>
                        <tr><td>Время автономноӗ работы</td><td>Не менее 10 минут</td></tr>
                        <tr><td>Класс защиты корпуса</td><td>IP54</td></tr>
                        <tr><td>Используемые цвета</td><td>RAL 7015, RAL 7044, RAL 9002, RAL 1016</td></tr>
                    </table>',
    'standart' => '<table>
                        <tr><td>Напряжение питания</td><td>AC 220 В/ 50 Гц</td></tr>
                        <tr><td>Потребляемая мощность</td><td>до 250 Вт без обогревателя, до 1 кВт с обогревателями</td></tr>
                        <tr><td>Интерфейсы подключения</td><td>TCP/IP</td></tr>
                        <tr><td>Ёмкость банкнотоприемника</td><td>1000 - 2500 купюр</td></tr>
                        <tr><td>Кол-во номиналов на сдачу</td><td>2 номинала</td></tr>
                        <tr><td>Ёмкость диспенсера</td><td>2 ящика: 1000 и 1800 купюр</td></tr>
                        <tr><td>Кол-во номиналов хоппера</td><td>2 номинала</td></tr>
                        <tr><td>Ёмкость хоппера монет</td><td>2 хоппера по 500 монет</td></tr>
                        <tr><td>Рабочая температура</td><td>от -40 до +50</td></tr>
                        <tr><td>Время автономной работы</td><td>Не менее 10 минут</td></tr>
                        <tr><td>Класс защиты корпуса</td><td>IP54</td></tr>
                        <tr><td>Используемые цвета</td><td>RAL 7015, RAL 7044, RAL 9002, RAL 1016 3 5</td></tr>
                    </table>',
    'zjeton' => '<table>
                <tr><td>Напряжение питания:</td><td>AC 220 В/ 50 Гц</td></tr>
                <tr><td>Потребляемая мощность:</td><td>	до 250 Вт без обогревателя, до 600 Вт с обогревателем</td></tr>
                <tr><td>Интерфейсы подключения:</td><td>TCP/IP</td></tr>
                <tr><td>Ёмкость бункера жетонов:</td><td>4000 жетонов</td></tr>
                <tr><td>Ёмкость жетонов на приём:</td><td>до 1000 жетонов</td></tr>
                <tr><td>Время проезда одного ТС:</td><td>до 5 секунд</td></tr>
                <tr><td>Рабочая температура:</td><td>-40 до +50</td></tr>
                <tr><td>Время автономной̆ работы:</td><td>Не менее 10 минут</td></tr>
                <tr><td>Класс защиты корпуса:</td><td>IP54</td></tr>
                <tr><td>Используемые цвета:</td><td>RAL 7017, RAL 7044, RAL 9002, RAL 1016.</td></tr>
                </table>',
    'IO' => '<table>
                <tr><td>Напряжение питания:</td><td>AC 220 В/ 50 Гц</td></tr>
                <tr><td>Потребляемая мощность:</td><td>	до 250 Вт без обогревателя, до 600 Вт с обогревателем</td></tr>
                <tr><td>Интерфейсы подключения:</td><td>TCP/IP</td></tr>
                <tr><td>Ёмкость диспенсера карт:</td><td>1000 карт</td></tr>
                <tr><td>Время проезда одного ТС:</td><td>до 5 секунд</td></tr>
                <tr><td>Рабочая температура:</td><td>-40 до +50</td></tr>
                <tr><td>Время автономной̆ работы:</td><td>Не менее 10 минут</td></tr>
                <tr><td>Класс защиты корпуса:</td><td>IP54</td></tr>
                <tr><td>Используемые цвета:</td><td>RAL 7017, RAL 7044, RAL 9002, RAL 1016.</td></tr>',
    'IOzjeton' => '<table>
                <tr><td>Напряжение питания:</td><td>AC 220 В/ 50 Гц</td></tr>
                <tr><td>Потребляемая мощность:</td><td>	до 250 Вт без обогревателя, до 600 Вт с обогревателем</td></tr>
                <tr><td>Интерфейсы подключения:</td><td>TCP/IP</td></tr>
                <tr><td>Ёмкость бункера жетонов:</td><td>4000 жетонов</td></tr>
                <tr><td>Ёмкость жетонов на приём:</td><td>до 1000 жетонов</td></tr>
                <tr><td>Время проезда одного ТС:</td><td>до 5 секунд</td></tr>
                <tr><td>Рабочая температура:</td><td>-40 до +50</td></tr>
                <tr><td>Время автономной̆ работы:</td><td>Не менее 10 минут</td></tr>
                <tr><td>Класс защиты корпуса:</td><td>IP54</td></tr>
                <tr><td>Используемые цвета:</td><td>RAL 7017, RAL 7044, RAL 9002, RAL 1016.</td></tr>
                </table>',
    'doubleIO' => '<table>
                <tr><td>Напряжение питания:</td><td>AC 220 В/ 50 Гц</td></tr>
                <tr><td>Потребляемая мощность:</td><td>	до 250 Вт без обогревателя, до 600 Вт с обогревателем</td></tr>
                <tr><td>Интерфейсы подключения:</td><td>TCP/IP</td></tr>
                <tr><td>Ёмкость бункера жетонов:</td><td>4000 жетонов</td></tr>
                <tr><td>Ёмкость жетонов на приём:</td><td>до 1000 жетонов</td></tr>
                <tr><td>Время проезда одного ТС:</td><td>до 5 секунд</td></tr>
                <tr><td>Рабочая температура:</td><td>-40 до +50</td></tr>
                <tr><td>Время автономной̆ работы:</td><td>Не менее 10 минут</td></tr>
                <tr><td>Класс защиты корпуса:</td><td>IP54</td></tr>
                <tr><td>Используемые цвета:</td><td>RAL 7017, RAL 7044, RAL 9002, RAL 1016.</td></tr>
                </table>',
    'parkomats' => '<p>Специалисты компании RPS готовы произвести расчёт окупаемости оборудования с учётом конкретных параметров вашего объекта. Такой математический подход помогает наиболее точно и достоверно оценить коммерческий потенциал проекта внедрения паркоматов. Автоматические кассы для оплаты парковки позволяют обойтись без большого числа работников. Цена содержания самих автоматов минимальна.</p> 
                    <p>Компания RPS предлагает паркоматы серий Standard и Light. Все они имеют ряд общих функционально-технических достоинств:</p>
                    <ul>
                        <li>микромеханику от европейских изготовителей;</li>
                        <li>современное ПО, автоматическое генерирование отложенных Z-отчётов, мониторинг заполняемости парковочного пространства и полученной прибыли для сокращения затрат на инкассацию;</li>
                        <li>возможность бесконтактной оплаты парковки картами PayWave и PayPass, а также через сервисы Apple Pay и Android Pay;</li>
                        <li>встроенный климат-контроль для стабильной работы 365 дней в году;</li>
                        <li>сенсорный дисплей;</li>
                        <li>антивандальную конструкцию, высокое качество сборки и устойчивость к механическим, температурным и атмосферным нагрузкам.</li>
                    </ul>');
$backgrounds = array(
    "standart" => 'background-image: url("/gear/standart.png");',
    "parkomats" => 'background-image: url("/gear/standart.png");',
    "IO" => 'background-image: url("/gear/двухуровневая.png");',
    "doubleIO" => 'background-image: url("/gear/двухуровневая стойка.png");',
    "light" => 'background-image: url("/gear/двухуровневая стойка.png");',
    "IOzjeton" => 'background-image: url("/gear/стойка.png");',
    "zjeton" => 'background-image: url("/gear/жетоны.png");'
);

?>
<!DOCTYPE html>
<html class="w3-black">
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

    <style>
        html{
            font-family: "AvenirNext-Regular";
            <?php echo $backgrounds[$_GET["gear"]];?>
            background-position: center center;
            background-repeat: no-repeat;
            background-size: fixed;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }

        ul > li {
            margin-left: 20px;
        }

        .at-under,#first,#moarButt{
            text-shadow: 0 0 2px black;
        }

        /* Prevent nested li's from getting messed up */
        ul > li::before {
            content: "— ";
            margin-left: -15px;
        }

        .at-tabe{
            width: 33%;
            padding: 6px;
            font-size: 2vw;
        }
        .seleced{
            font-weight: bold;
            color: #161616;
        }

        .at-tabo{
            display: none;
        }
        @media screen and (max-width: 600px){
            .mobC{
                width: 100% !important;
                padding: 10px 3% !important;
            }
        }


        h2{
            style="color: #efa426; font-size: 24px; font-weight: bolder; text-indent: 0px;"
        }
    </style>

</head>

<body class="">
    <?php include "$root/common/navbar.php";?>

    <div class="w3-container" id="first">
        <h1 class="" style="max-width: 749px; width: 70%; margin: 10% auto 0 auto; font-family: AvenirNext-Bold; font-size: 44px; text-align: center;"><?php echo $title[$_GET["gear"]]; ?></h1>
        <div style="max-width: 749px; width: 70%; min-width: 330px; margin: 60px auto;"><?php echo $topText[$_GET["gear"]]; ?></div>
    </div>

    <div class="w3-cell-row" style="background-color: #efa426; color: #525252; text-align: center; <?php if($_GET['gear']=='parkomats')echo 'display:none'; ?>">
        <div onclick="openCity('about');$('.seleced').removeClass('seleced'); $(this).addClass('seleced');" class="w3-button w3-cell w3-cell-middle at-tabe seleced">ПОДРОБНОЕ ОПИСАНИЕ</div>
        <div onclick="openCity('specs');$('.seleced').removeClass('seleced'); $(this).addClass('seleced');" class="w3-button w3-cell w3-cell-middle at-tabe ">ХАРАКТЕРИСТИКИ</div>
        <div onclick="openCity('docs'); $('.seleced').removeClass('seleced'); $(this).addClass('seleced'); " class="w3-button w3-cell w3-cell-middle at-tabe ">ДОКУМЕНТАЦИЯ</div>
    </div>

    <div class="w3-cell-row" style="background-color: #efa426; color: #525252; text-align: center; <?php if($_GET['gear']!='parkomats')echo 'display:none'; ?>">
        <div onclick="openCity('begin');$('.seleced').removeClass('seleced'); $(this).addClass('seleced');" class="w3-button w3-cell w3-cell-middle at-tabe seleced">УСТАНОВКА</div>
        <div onclick="openCity('profit');$('.seleced').removeClass('seleced'); $(this).addClass('seleced');" class="w3-button w3-cell w3-cell-middle at-tabe ">КАКОЙ ДОХОД</div>
        <div onclick="openCity('key'); $('.seleced').removeClass('seleced'); $(this).addClass('seleced'); " class="w3-button w3-cell w3-cell-middle at-tabe ">ПАРКОМАТЫ ПОД КЛЮЧ</div>
    </div>


    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("at-tabo");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>

    <div id="about" class="at-tabo" style="background-color: rgb(231,232,232); <?php if($_GET['gear']!='parkomats')echo'display: block'; ?>">
        <div class="mobC" style="background-color: white; width: 80%; margin: auto; padding: 10px 12%; color: #505050">

            <div style="background-color: #efa426; width: 36px; height: 6px;"></div>
            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-top" style="width: 100%">
                    <?php
                    echo $about[$_GET["gear"]];
                    ?>
                </div>
                <!--div class="w3-cell w3-cell-bottom" style="width: 30%">
                    <div style="width: 100%;"><img src="/gear/gear_photo/<?php echo $photo[$_GET["gear"]]; ?>" width="100%" height="auto"></div>
                </div-->
            </div>
        </div>
    </div>

    <div id="specs" class="at-tabo" style="background-color: rgb(231,232,232)">
        <div class="mobC" style="background-color: white; width: 80%; margin: auto; padding: 10px 12%; color: #505050">
            <h2 style="color: #efa426; font-size: 24px; font-weight: bolder; text-indent: 0px;">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ </h2>
            <div style="background-color: #efa426; width: 36px; height: 6px;"></div>
            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-top" style="width: 100%">
                    <?php echo $specs[$_GET["gear"]]; ?>
                </div>
            </div>
        </div>
    </div>

    <div id="docs" class="at-tabo" style="background-color: rgb(231,232,232)">
        <div class="mobC" style="background-color: white; width: 80%; margin: auto; padding: 10px 12%; color: #505050">
            <h2 style="color: #efa426; font-size: 24px; font-weight: bolder; text-indent: 0px;">ДОКУМЕНТАЦИЯ</h2>
            <div style="background-color: #efa426; width: 36px; height: 6px;"></div>
            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-middle" style="width: 100%; height: 400px; text-align: center">
                    Документы отсутствуют
                </div>
            </div>
        </div>
    </div>

    <div id="begin" class="at-tabo" style="background-color: rgb(231,232,232); <?php if($_GET['gear']=='parkomats')echo'display: block'; ?>">
        <div class="mobC" style="background-color: white; width: 80%; margin: auto; padding: 10px 12%; color: #505050">
            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-middle" style="width: 100%;">
                    <?php echo $about["parkomats"] ?>
                </div>
            </div>
        </div>
    </div>

    <div id="profit" class="at-tabo" style="background-color: rgb(231,232,232)">
        <div class="mobC" style="background-color: white; width: 80%; margin: auto; padding: 10px 12%; color: #505050">
            <h2 style="color: #efa426; font-size: 24px; font-weight: bolder; text-indent: 0px;">Каким будет доход от установки паркомата?</h2>
            <div style="background-color: #efa426; width: 36px; height: 6px;"></div>
            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-middle" style="width: 100%;">
                    <?php echo $specs["parkomats"] ?>
                </div>
            </div>
        </div>
    </div>



    <div id="key" class="at-tabo" style="background-color: rgb(231,232,232)">
        <div class="mobC" style="background-color: white; width: 80%; margin: auto; padding: 10px 12%; color: #505050">
            <h2 style="color: #efa426; font-size: 24px; font-weight: bolder; text-indent: 0px;">Паркоматы под ключ</h2>
            <div style="background-color: #efa426; width: 36px; height: 6px;"></div>
            <div class="w3-cell-row">
                <div class="w3-cell w3-cell-middle" style="width: 100%;">
                    <p>Компания RPS занимается проектированием, поставкой, пусконаладкой, обслуживанием и модернизацией оборудования по всей России. Специалисты готовы рассчитать стоимость установки паркоматов для оплаты парковки и приблизительный срок окупаемости.</p>
                    <p>В зависимости от выбранного варианта сотрудничества заказчикам паркоматов для парковок предоставляется:</p>
                    <ul>
                        <li>помощь с подбором оборудования и проектирование системы платной парковки в строгом соответствии с индивидуальным техническим заданием;</li>
                        <li>монтаж, пусконаладка, ввод в эксплуатацию под ключ;</li>
                        <li>гарантийное и послегарантийное обслуживание (обновление ПО, профилактика оборудования, замена неисправных модулей).</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>


    <?php include "$root/common/footer.html";?>
</body>

</html>
