<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="single-p__soc">
	<div class="soc__block soc__be">
		<div class="soc__icon">
			<a href="<?=$atts['first_href']?>">
				<img src="<?php bloginfo('template_url')?>/img/be-p.png" alt="">
			</a>
		</div>

		<div class="soc__desc">
			<p>Наша работа</p>
			<a href="<?=$atts['first_href']?>"><?=$atts['first_href']?></a>
		</div>
	</div>

	<div class="soc__block soc__pin">
		<div class="soc__icon">
			<a href="<?=$atts['second_href']?>">
				<img src="<?php bloginfo('template_url')?>/img/pinterest.png" alt="">
			</a>
		</div>

		<div class="soc__desc">
			<p>Наша работа</p>
			<a href="<?=$atts['second_href']?>"><?=$atts['second_href']?></a>
		</div>
	</div>
</div>

<div class="single__order">
	<div class="order__ask">
		<h3 class="order__ask-title">Понравилась работа?</h3>
		<p class="order__ask-text">Хотите заказать похожее?</p>
	</div>

	<a href="#brief" class="order__btn scroll">Заказать</a>
</div>

<div class="single-p__stock">
	<?php if($atts['h2'] && $atts['desc']):?>
		<h3 class="stock__title">
			<img src="<?php bloginfo('template_url')?>/img/stock.png" alt=""><span class="stock__red"><?=$atts['h2']?></span>
		</h3>
	
		<p class="stock__desc"><?=$atts['desc']?></p>
	<?php endif;?>
</div>
