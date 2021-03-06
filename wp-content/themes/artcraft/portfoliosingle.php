<?php
/*
Template Name: portfolio
Template Post Type: post
*/
get_header('portfolio');
?>
<main class="main__single-p">
	<section class="blog blog__single" id="blog">
	    <div class="container">
	
	        <p class="paragraph">наши работы </p>

		    <nav class="broadcrumbs">
			    <a class="broadcrumbs__link" href="/">Главная</a>
			    <span class="broadcrumbs__divider"> / </span>
			    <a class="broadcrumbs__link" href="portfolio">Портфолио</a>
			    <span class="broadcrumbs__divider"> / </span>
			    <span class="broadcrumbs__curr"><?php the_title(); ?></span>
		    </nav>

		    <div class="wrap single-p">
			    <div class="single-p__layout">
				    <a class="single-p__fancybox" href="<?= get_the_post_thumbnail_url()?>" data-fancybox="images" data-caption="
                        <div class='portfolio__block-caption'>
                            <span class='gradient'><?php the_title(); ?></span>
                        </div">
						
<!--					    --><?//= get_the_post_thumbnail()?>
					    <?php if (class_exists('MultiPostThumbnails')) :?>
					        <?php $image = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image');?>
					        <?php if(!empty($image)):?>
					            <?php MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');?>
					        <?php else:?>
								<?= get_the_post_thumbnail()?>
							<?php endif;?>
					    <?php endif;?>
					    <!--					    --><?//= get_the_post_thumbnail( $id, 'medium' )?>
				    </a>
			    </div>
			    <div class="single-p__desc">
			            <?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-portfolio', get_post_type() );
								/*the_post_navigation();*/
							endwhile; ?>
			    </div>
	        </div>
	    </div>
	</section>
</main>
	<!--portfolio single shortcode-->
<?php get_footer();
