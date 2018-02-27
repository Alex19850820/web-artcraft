<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<?php if (!empty($atts['first_href']) || !empty($atts['second_href'])): ?>
	<div class="single-p__soc">
		<?php if (!empty($atts['first_href'])): ?>
		<div class="soc__block soc__be">
			<div class="soc__icon">
				<a href="<?=$atts['first_href']?>">
					<img src="<?php bloginfo('template_url')?>/img/be-p.png" alt="">
				</a>
			</div>
	
			<div class="soc__desc">
				<p>Наша работа на</p>
				<a href="<?=$atts['first_href']?>" target="_blank">www.behance.net</a>
			</div>
		</div>
		<?php endif; ?>
		<?php if (!empty($atts['second_href'])): ?>
			<div class="soc__block soc__pin">
				<div class="soc__icon">
					<a href="<?=$atts['second_href']?>">
						<img src="<?php bloginfo('template_url')?>/img/pinterest.png" alt="">
					</a>
				</div>
		
				<div class="soc__desc">
					<p>Наша работа на</p>
					<a href="<?=$atts['second_href']?>" target="_blank">www.pinterest.com</a>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<div class="single__order">
	<div class="order__ask">
		<h3 class="order__ask-title">Понравилась работа?</h3>
		<p class="order__ask-text">Хотите заказать похожее?</p>
	</div>

	<a href="#brief" class="order__btn scroll">Заказать</a>
</div>
<?php if (!empty($atts['h2']) && !empty($atts['desc'])): ?>
	<div class="single-p__stock">
		<h3 class="stock__title">
			<img src="<?php bloginfo('template_url')?>/img/stock.png" alt=""><span class="stock__red"><?=$atts['h2']?></span>
		</h3>
	
		<p class="stock__desc"><?=$atts['desc']?></p>
	</div>
<?php endif ?>
