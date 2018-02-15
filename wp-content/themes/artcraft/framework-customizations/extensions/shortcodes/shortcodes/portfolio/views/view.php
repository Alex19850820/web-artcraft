<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<?php $portQuery = new WP_Query([
	'category_name' => 'portfolio',
//	'posts_per_page' => 5
]); ?>

<!-- start content-portfolio.html-->
<div class="main-portfolio">
	<section class="blog blog__single" id="blog">
		<div class="container">
			<p class="paragraph">наши работы</p>

			<nav class="broadcrumbs">
				<a class="broadcrumbs__link" href="/">Главная</a>
				<span class="broadcrumbs__divider"> / </span>
				<span class="broadcrumbs__curr">Портфолио</span>
			</nav>
			
			<div class="wrap">
				<div class="tittle">
					<span>актуальные </span>
					<h2>работы</h2>
					<p>
						Мы ответственно относимся к любой работе и уделяем достаточно внимания
						всем клиентам. Поэтому обратившись за продвижением вашего сайта к нам,
						Вы можете быть уверены в том, что специалисты позаботятся о вашем ресурсе.
					</p>
				</div>
				<div class="wrapper">
					<div class="grid">
						<?php $i = 0;?>
						<?php while ( $portQuery->have_posts() ) { $portQuery->the_post(); ?>
							<?php $i++;?>
							<?php if($i < $atts['count']):?>
								
								<div class="grid-item">
									<a class="grid-item__watch" href="<?= get_the_permalink(get_the_ID()); ?>">Посмотреть работу</a>
					
									<a class="grid-item__fancybox" href="<?php the_post_thumbnail_url()?>" data-fancybox="images" data-caption="
										<div class='portfolio__block-caption'>
											<span>Веб-дизайн для Мастер газ</span>
											<a href='#'>Смотреть работу на <span class='gradient'>behance.ru</span></a>
										</div">
					
										<span class="magnifier">
											<img src="<?php bloginfo('template_url')?>/img/full-size.svg" width="20" height="20" alt="">
										</span>
									</a class="grid-item__fancybox">
									<?php the_post_thumbnail()?>
				<!--					<img class="grid-item__img" src="" alt="Баннер">-->
								</div>
							<?php endif;?>
						<?php }?>
						
							<?php $n = 0; while ( $portQuery->have_posts() ):?>
								<?php  $portQuery->the_post();  ?>
								<?php $n++;?>
								<?php if($n > $atts['count']):?>
									<div class="grid-item in_active_item">
										<a class="grid-item__watch" href="<?= get_the_permalink(get_the_ID()); ?>">Посмотреть работу</a>

										<a class="grid-item__fancybox" href="<?php the_post_thumbnail_url()?>" data-fancybox="images" data-caption="
										<div class='portfolio__block-caption'>
											<span>Веб-дизайн для Мастер газ</span>
											<a href='#'>Смотреть работу на <span class='gradient'>behance.ru</span></a>
										</div">
					
										<span class="magnifier">
											<img src="<?php bloginfo('template_url')?>/img/full-size.svg" width="20" height="20" alt="">
										</span>
										</a class="grid-item__fancybox">
										<?php the_post_thumbnail()?>
										<!--					<img class="grid-item__img" src="" alt="Баннер">-->
									</div>
								<?php endif;?>
							<?php endwhile;?>
					
						
					</div>
				</div>
				<?php if($i > $atts['count']):?>
					<button type="button" class="more_btn">Загрузить ещё</button>
				<?php endif;?>
			</div>
		</div>
	</section>

</div>
<!-- end content-portfolio.html-->

<!-- start html_close-portfolio.html-->
<a href="#" class="scrollup"></a>