<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!-- start blog.html-->
<div class="all-news">
	<section class="blog" id="blog">
		<div class="container">

			<p class="paragraph"><?=$atts['paragraph']?></p>

			<nav class="broadcrumbs">
				<a class="broadcrumbs__link" href="index.html">Главная</a>
				<span class="broadcrumbs__divider"> / </span>
				<span class="broadcrumbs__curr">Блог</span>
			</nav>

			<div class="wrap">

				<div class="tittle">
					<span><?=$atts['title']?> </span>
					<h2><?=$atts['h2']?></h2>
					<p><?=$atts['desc']?></p>
				</div>
				
				<?php $blogQuery = new WP_Query([
					'category_name' => 'blog',
//				'posts_per_page' => 10
				]); ?>

				<div class="blog__blocks">
					
					<?php while ( $blogQuery->have_posts() ) { $blogQuery->the_post(); ?>
						<article class="blog__block">
							<div class="blog__block-wrap">
								<a href="<?php the_permalink(); ?>">
									<img class="blog__block-img" src="<?php the_post_thumbnail_url()?>" alt="">
								</a>

								<h2 class="blog__block-title">
									<a class="blog__block-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>

								<p class="blog__block-text"><?php the_excerpt();?></p>
							</div>

							<footer class="blog__block-footer">
								<time class="blog__block-time"><?php the_date()?></time>
								<a class="blog__block-more"  href="<?php the_permalink(); ?>">
									<span>Читать далее</span>
									<span class="blog__block-arrow"></span>
								</a>
							</footer>
						</article>
					<?php } ?>
				</div>


				<!--			<div class="blog__content">-->
				<!--				--><?php //foreach ($atts['content'] as $content):?>
				<!--					<div class="blog__content--img">-->
				<!--						<img src="--><?//=$content['img']['url']?><!--" alt="">-->
				<!--					</div>-->
				<!--					<h2>--><?//=$content['h2']?><!--</h2>-->
				<!--					<span>--><?//=$content['title']?><!--</span>-->
				<!--					--><?php //foreach ($content['desc'] as $desc):?>
				<!--					<p>--><?//=$desc['desc']?><!--</p>-->
				<!--					--><?php //endforeach;?>
				<!--				--><?php //endforeach;?>
				<!--			</div>-->
				<!---->
				<!---->
				<!--			<div class="blog__slider">-->
				<!--				--><?php //foreach ($atts['slider'] as $slider):?>
				<!--				<div class="tittle">-->
				<!--					<span>--><?//=$slider['title']?><!--</span>-->
				<!--					<h2>--><?//=$slider['h2']?><!--</h2>-->
				<!---->
				<!--				</div>-->
				<!--				-->
				<!--				<div class="blog__slider--wrap">-->
				<!--					--><?php //foreach ($slider['slider'] as $slide):?>
				<!--						<div class="blog__slider--slide">-->
				<!--							<img src="--><?//=$slide['img']['url']?><!--" alt="">-->
				<!--							<p>-->
				<!--								--><?//=$slide['desc']?>
				<!--							</p>-->
				<!--						</div>-->
				<!--					--><?php //endforeach;?>
				<!--				</div>-->
				<!--				--><?php //endforeach;?>
				<!--			</div>-->
			</div>
		</div>
	</section>
</div>
<!-- end blog.html-->