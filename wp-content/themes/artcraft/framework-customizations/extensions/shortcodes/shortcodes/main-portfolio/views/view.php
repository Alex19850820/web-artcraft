<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!-- start portfolio.html-->
<section class="portfolio" id="portfolio">

	<div class="animate-circle">
		<p>
			<a href="https://www.behance.net/ArtCraftDesignStudio">
				<img src="<?=$atts['img']['url']?>" alt="">
			</a>
			<span><?=$atts['title']?></span>
		</p>
	</div>

	<div class="container">

		<p class="paragraph"><?=$atts['paragraph']?></p>
		<div class="wrap">

			<div class="tittle">
				<span class="block_span_title"><?=$atts['title2']?></span>
				<h2 class="block_title"><?=$atts['h2']?></h2>
				<p>
					<?=$atts['desc']?>
				</p>
			</div>

			<div class="portfolio__gallery">

				<div class="gallery__block portfolio-link">
					<img src="<?php bloginfo('template_url')?>/img/portfolio.jpg" alt="">
					<a class="gallery__block-link" href="portfolio">Посмотреть все работы</a>
				</div>
				
				<?php $portQuery = new WP_Query([
					'category_name' => 'portfolio',
					'posts_per_page' => 5
				]); ?>
				<?php $class = ['1' => 'portfolio-soc',
				                '2' => 'portfolio-angel',
				                '3' => 'portfolio-scrubb',
				                '4' => 'portfolio-loft',
				                '5' => 'portfolio-chair'];
				?>
			
				<?php $i=0; while ( $portQuery->have_posts() ) { $portQuery->the_post(); ++$i; ?>
					<div class="gallery__block <?=$class[$i]?> portfolio-link">
						<a href="<?= get_the_permalink(get_the_ID()); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>
				<?php }?>

				<div class="gallery__block portfolio__brief">
					<h2>
						<a class="scroll" href="#brief">Заполните <br> бриф</a>
					</h2>
				</div>
			
			
<!--				<div class="portfolio__gallery--scroller">-->
<!--					--><?php //if($atts['slider']):?>
<!--						--><?php // foreach ($atts['slider'] as $slider):?>
<!--							<div class="portfolio__gallery--item --><?//=$slider['class']?><!--">-->
<!--								--><?php //for ($i=0; $i<count($slider['img']); $i++):?>
<!--									<a href="--><?//=$slider['img'][$i]['url']?><!--" data-fancybox="images" data-caption="-->
<!--                                        <div class='portfolio__block-caption'>-->
<!--	                                        <span>--><?//=$slider['href'][$i]['text']?><!--</span>-->
<!--	                                        --><?php //if($slider['href'][$i]['href']):?>
<!--			                                    <a href='--><?//=$slider['href'][$i]['href']?><!--'>Смотреть работу на-->
<!--			                                        <span class='gradient'>--><?//=$slider['href'][$i]['href']?><!--</span>-->
<!--			                                    </a>-->
<!--		                                    --><?php //endif;?>
<!--                                        </div>"-->
<!--									>-->
<!--										<img src="--><?//=$slider['img'][$i]['url']?><!--" alt="">-->
<!--									</a>-->
<!--								--><?php //endfor;?>
<!--							</div>-->
<!--						--><?php //endforeach;?>
<!--					--><?php //endif;?>
<!--				</div>-->
<!--				<span class="portfolio__gallery--btn">-->
<!--					<img src="--><?php //bloginfo('template_directory'); ?><!--/img/icons/gallery-arrow.png" alt="">-->
<!--				</span>-->
			</div>
		</div>
	</div>
</section>
<!-- end portfolio.html-->