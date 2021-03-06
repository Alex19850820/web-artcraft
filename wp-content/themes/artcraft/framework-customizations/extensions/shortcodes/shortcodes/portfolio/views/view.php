<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<?php
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$portQuery = new WP_Query([
	'category_name' => 'portfolio',
	'posts_per_page' => $atts['count'],
	'paged' => $paged,
]);
?>
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
                    <div class="grid-preloader">
                        <svg viewBox="0 0 1000 200">
                            <!-- Symbol-->
                            <symbol id="s-text">
                                <text text-anchor="middle" x="50%" y="50%" dy=".35em">Craft Group</text>
                            </symbol>
                            <!-- Duplicate symbols-->
                            <use class="text" xlink:href="#s-text"></use>
                            <use class="text" xlink:href="#s-text"></use>
                            <use class="text" xlink:href="#s-text"></use>
                        </svg>
                        <p class="text-preloader">Загружаем галерею</p>
                    </div>

					<div class="grid">
						<?php while ( $portQuery->have_posts() ) { $portQuery->the_post(); ?>
								<div class="grid-item">
									<a class="grid-item__watch" href="<?= get_the_permalink(get_the_ID()); ?>">Посмотреть работу</a>
					
									<a class="grid-item__fancybox" href="<?php the_post_thumbnail_url()?>" data-fancybox="images" data-caption="
										<div class='portfolio__block-caption'>
											<span><?php the_title(); ?></span>
										</div">
					
										<span class="magnifier">
											<img src="<?php bloginfo('template_url')?>/img/full-size.svg" width="20" height="20" alt="">
										</span>
									</a>

                                    <a href="<?= get_the_permalink(get_the_ID()); ?>">
                                        <?php the_post_thumbnail('medium')?>
                                    </a>
				<!--					<img class="grid-item__img" src="" alt="Баннер">-->
								</div>
						<?php }?>
					</div>
				</div>
				
					<button type="button" class="more_btn" id="curButton"  data-inpage="<?=$atts['count']?>"  data-page="<?=$paged?>">Загрузить ещё</button>
			</div>
		</div>
	</section>
</div>
<!-- end content-portfolio.html-->

<!-- start html_close-portfolio.html-->
<a href="#" class="scrollup"></a>