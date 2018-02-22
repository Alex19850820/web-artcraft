<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!-- start blog.html-->
<section class="blog" id="blog">
	<div class="container">

		<p class="paragraph"><?=$atts['paragraph']?></p>

		<div class="wrap">

			<div class="tittle">
				<span class="block_span_title"><?=$atts['title']?></span>
				<h2 class="block_title"><?=$atts['h2']?></h2>
				<p>
					<?=$atts['desc']?>
				</p>
			</div>
			
			<?php $blogQuery = new WP_Query([
				'category_name' => 'blog',
				'posts_per_page' => 10
			]); ?>

			<div class="blog__slider--wrap">
					<div class="blog__slider--slide">
						<img src="<?php bloginfo('template_url')?>/img/current.jpg" alt="">
						<a class="blog__slider--blog" href="blog">Посмотреть все новости</a>
					</div>
					<?php while ( $blogQuery->have_posts() ) { $blogQuery->the_post(); ?>
						<div class="blog__slider--slide">
							<?php the_post_thumbnail(); ?>
							<div class="slide__title">
								<h3 class="slide__post-title"><?php the_title(); ?></h3>
								<time class="slide__post-time"><?php the_date()?></time>
							</div>
							
							<div class="slide__hover">
								<span class="dotdot" ><?php the_title(); ?></span>
								<a href="<?php the_permalink(); ?>">Читать далее</a>
							</div>
						</div>
					<?php } ?>
				
			</div>

		</div>

	</div>
</section>
<!-- end blog.html-->