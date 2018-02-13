<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start header.html-->
<header class="header" id="header">
	<div class="container">
		<div class="header__mobile-btn"><span></span></div>
		<ul class="header__nav">
			<li><a class="scroll" href="#"><span></span></a></li>
			<?php foreach ($atts['list'] as $list):?>
				<li><a class="<?=$list['class']?>" href="<?=$list['href']?>"><?=$list['title']?></a></li>
			<?php endforeach;?>
		</ul>
	</div>
	<img src="<?php bloginfo('template_url')?>/img/balloon.png" alt="" class="balloon">
	<div class="clouds cloud1"></div>
	<div class="clouds cloud2"></div>
</header>
<!-- end header.html-->