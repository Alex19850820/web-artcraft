<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package artcraft
 */

get_header('blog');
?>
<main>
<!-- start single-blog.html-->
<main class="single-post">
	<section class="blog blog__single" id="blog">
	    <div class="container">
	
	        <p class="paragraph">наш блог</p>
	
		    <nav class="broadcrumbs">
			    <a class="broadcrumbs__link" href="/">Главная</a>
			    <span class="broadcrumbs__divider"> / </span>
			    <a class="broadcrumbs__link" href="blog">Блог</a>
			    <span class="broadcrumbs__divider"> / </span>
			    <span class="broadcrumbs__curr">Ваш логотип скопирован</span>
		    </nav>
	
	        <div class="wrap">
		        
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
				        <div class="blog__slider--slide">
					        <img src="<?php bloginfo('template_url')?>/img/current.jpg" alt="">
					        <a class="blog__slider--blog" href="blog.html">Посмотреть все новости</a>
				        </div>
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
</main>
<?php get_footer();
