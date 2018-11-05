<div id="nav" class="w3-top navbar-fixed-top" style="z-index: 10 !important;"  >
	<div class="w3-row">
		<div class="w3-hide-small">
			<div class="w3-col at-nav">
				<a href="/" style="text-decoration: none;"><span class="at-under" style="<?php if($dir=="main") echo 'border-color: #efa426 !important; '; ?>">Главная</span></a>
			</div>
			<div class="w3-col at-nav">
				<a href="/systems/" style="text-decoration: none"><span class="at-under" style="<?php if($dir=="systems") echo 'border-color: #efa426 !important; '; ?>">Системы</span></a>
			</div>
			<div class="w3-col at-nav" style="width: 25% !important">
				<a href="/gear/" style="text-decoration: none"><span class="at-under" style="<?php if($dir=="gear") echo 'border-color: #efa426 !important; '; ?>">Оборудование</span></a>
			</div>
			<!--div class="w3-col at-nav">
				<a href="/" style="text-decoration: none"><span class="at-under" style="<?php if($dir=="contacts") echo 'border-color: #efa426 !important; '; ?>">Контакты</span></a>
			</div-->
		</div>
		<a href="tel:+77775053333" style="text-decoration: none" id="toPhone" class="toPhone w3-rest w3-hide-small w3-right">
			<span><i class="fas fa-phone" style="transform: rotate(90deg); color: #f5a623"></i></span>
			<span class="w3-hide-medium">87775053333</span>
		</a>
        <div id="moarButt" class="w3-col w3-hide-large w3-hide-medium w3-button w3-round" style="width: 100px;  padding: 0 0 0 0;" onclick="showMoar()">Меню <i class="fas fa-caret-square-down"></i></div>
	</div>
    <div id="Moar" class="w3-bar-block w3-hide-large w3-hide-medium" style="width: 80%; background-color: rgba(0,0,0,0.8)">
        <a href="/" style="text-decoration: none;">
            <div class="w3-bar-item w3-button">
                <span class="at-under" style="<?php if($dir=="main") echo 'border-color: #efa426 !important; '; ?>">Главная</span>
            </div>
        </a>
        <a href="/systems/" style="text-decoration: none">
            <div class="w3-bar-item w3-button"> 
                <span class="at-under" style="<?php if($dir=="systems") echo 'border-color: #efa426 !important; '; ?>">Системы</span>
            </div>
        </a>
        <a href="/gear/" style="text-decoration: none">
            <div class="w3-bar-item w3-button">
                <span class="at-under" style="<?php if($dir=="gear") echo 'border-color: #efa426 !important; '; ?>">Оборудование</span>
            </div>
        </a>
        <!--a href="/" style="text-decoration: none">
            <div class="w3-bar-item w3-button">
                <span class="at-under" style="<?php if($dir=="contacts") echo 'border-color: #efa426 !important; '; ?>">Контакты</span>
            </div>
        </a-->
    </div>
</div>



<script>

    $(document).ready(function(){
        $("#Moar").slideToggle(0);
        navAdapt();
        $(".at-under").addClass("w3-border-bottom w3-hover-border-orange ");
    });

    $(function () {
        $(document).scroll(function () {
            navAdapt();
        });
    });

    function navAdapt(){
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    }

    function showMoar() {
        $("#Moar").slideToggle("medium");
    }
</script>

<!--<a href="/">-->
<!--    <div id="logo" class="w3-display-container">-->
<!--        <img class="w3-display-middle" src="/img/logo.png" width="56%" height="auto" style="min-width: 180px"/>-->
<!--    </div>-->
<!--</a>-->

<a href="/" id="logo">
<!--     <img src="/img/logo.png" width="auto" height="70" /> -->
    <img src="/img/logoWhite.png" width="auto" height="70" />
</a>

<div class="w3-hide-large w3-hide-medium" style="position: absolute; top:33px; right: 5px; z-index: 9; float: right">
    <div class="toPhone w3-right">
        <span><i class="fas fa-phone" style="transform: rotate(90deg); color: #f5a623"></i></span>
        <a href="tel:+77775053333" style="text-decoration: none" class="w3-hide-medium">87775053333</a>
    </div>
</div>