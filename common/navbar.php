<style>
    .at-under{
        border-color: rgba(0,0,0,0) !important;
    }
    .navbar-fixed-top.scrolled {
        background-color: black !important;
        padding: 10px 10% 10px 10% !important;
        transition: background-color 200ms linear, padding 200ms linear;
    }
    @media only screen and (max-width: 400px){
        #nav{
            padding: 20px 10% 67px 25% !important;
        }
        #logo{
            top: 20px !important;
        }
    }
</style>

<div id="nav" class="w3-top navbar-fixed-top" style="padding: 67px 3% 67px 25%;"  >
	<div class="w3-row">
        <div class="w3-col w3-hide-large w3-hide-medium w3-button w3-round" style="width: 100px;  padding:0;" onclick="showMoar()">MOAR <i class="fas fa-caret-square-down"></i></div>
		<div class="w3-hide-small">
			<div class="w3-col at-nav">
				<a href="/" style="text-decoration: none;"><span class="at-under" style="<?php if($dir=="main") echo 'border-color: #efa426 !important; '; ?>">Главная</span></a>
			</div>
			<div class="w3-col at-nav">
				<a href="/systems/" style="text-decoration: none"><span class="at-under" style="<?php if($dir=="systems") echo 'border-color: #efa426 !important; '; ?>">Системы</span></a>
			</div>
			<div class="w3-col at-nav" style="width: 24% !important">
				<a href="/gear/" style="text-decoration: none"><span class="at-under" style="<?php if($dir=="gear") echo 'border-color: #efa426 !important; '; ?>">Оборудование</span></a>
			</div>
			<div class="w3-col at-nav">
				<a href="/" style="text-decoration: none"><span class="at-under" style="<?php if($dir=="contacts") echo 'border-color: #efa426 !important; '; ?>">Контакты</span></a>
			</div>
		</div>
		<div class="w3-rest w3-right" style="text-align: right; padding: 0 3px;">
			<span><i class="fas fa-phone" style="transform: rotate(90deg); color: #f5a623"></i></span>
			862-902-2352
		</div>
	</div>
    <div id="Moar" class="w3-bar-block w3-hide-large w3-hide-medium" style="width: 80%; background-color: rgba(0,0,0,0.2)">
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
        <a href="/" style="text-decoration: none">
            <div class="w3-bar-item w3-button">
                <span class="at-under" style="<?php if($dir=="contacts") echo 'border-color: #efa426 !important; '; ?>">Контакты</span>
            </div>
        </a>
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