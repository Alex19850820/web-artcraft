<?php
/*
Template Name: portfolio
Template Post Type: post
*/
get_header();
?>
<section class="blog inside-blog" id="blog">
    <div class="container">

        <p class="paragraph">наши работы </p>

        <div class="wrap">

            <div class="tittle">
                <span>портфолио </span>
                <h2>наши работы </h2>
                <p>
	                Мы готовы предложить вам все виды наших услуг.
	                Знайте: для каждого клиента у нас есть особое предложение.
                </p>
            </div>

            <div class="blog__content">
	            <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						/*the_post_navigation();*/
					endwhile; ?>
            </div>
	        <?php $blogQuery = new WP_Query([
                'category_name' => 'blog',
		        'posts_per_page' => 10
	        ]); ?>

	        <div class="blog__slider">
		        <div class="tittle">
			        <span>читайте еще  </span>
			        <h2>в нашем блоге</h2>
		        </div>
		        <div class="blog__slider--wrap">
			        <?php while ( $blogQuery->have_posts() ) { $blogQuery->the_post(); ?>
				        <div class="blog__slider--slide">
					        <?php the_post_thumbnail(); ?>
					        <div class="slide__title">
						        <h3 class="slide__post-title dotdot-title"><?php the_title(); ?></h3>
						        <time class="slide__post-time"><?php the_date()?>7 часов назад</time>
					        </div>
					        <div class="slide__hover">
						        <span class="dotdot"><?php the_title(); ?></span>
						        <a href="<?php the_permalink(); ?>">Читать далее</a>
					        </div>
				        </div>
			        <?php } ?>
		        </div>
	        </div>
        </div>
    </div>
</section>
<?php get_footer();
