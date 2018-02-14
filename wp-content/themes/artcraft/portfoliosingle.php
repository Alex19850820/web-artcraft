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
			    <a class="broadcrumbs__link" href="blog">Портфолио</a>
			    <span class="broadcrumbs__divider"> / </span>
			    <span class="broadcrumbs__curr"><?php the_title(); ?></span>
		    </nav>

		    <div class="wrap single-p">
			    <div class="single-p__layout">
				    <a class="single-p__fancybox" href="<?= get_the_post_thumbnail_url()?>" data-fancybox="images" data-caption="
                        <div class='portfolio__block-caption'>
                            <span>Веб-дизайн для Мастер газ</span>
                            <a href='#'>Смотреть работу на <span class='gradient'>behance.ru</span></a>
                        </div">
					
					    <?= get_the_post_thumbnail( $id, 'medium' )?>

					    <span class="magnifier">
                            <img src="<?php bloginfo('template_url')?>/img/full-size.svg" width="20" height="20" alt="">
                        </span>
				    </a>
			    </div>
			    <div class="single-p__desc">
				    <div class="single-p__about">
			            <?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-portfolio', get_post_type() );
								/*the_post_navigation();*/
							endwhile; ?>
	                </div>

				    <div class="single-p__soc">
					    <div class="soc__block soc__be">
						    <div class="soc__icon">
							    <a href="#">
								    <img src="<?php bloginfo('template_url')?>/img/be-p.png" alt="">
							    </a>
						    </div>

						    <div class="soc__desc">
							    <p>Наша работа</p>
							    <a href="#">www.behance.net</a>
						    </div>
					    </div>

					    <div class="soc__block soc__pin">
						    <div class="soc__icon">
							    <a href="#">
								    <img src="<?php bloginfo('template_url')?>/img/pinterest.png" alt="">
							    </a>
						    </div>

						    <div class="soc__desc">
							    <p>Наша работа</p>
							    <a href="#">www.pinterest.com</a>
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
					    <h3 class="stock__title">
						    <img src="<?php bloginfo('template_url')?>/img/stock.png" alt=""><span class="stock__red">Акция!</span>
					    </h3>

					    <p class="stock__desc">Закажи услугу <strong>«Landing page под ключ»</strong> и получи оформление группы в любой из популярных соц. сетей в <span class="stock__red">ПОДАРОК!</span></p>
				    </div>
			    </div>
	        </div>
	    </div>
	</section>
</main>
<?php get_footer();
