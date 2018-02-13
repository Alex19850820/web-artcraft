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
				<span><?=$atts['title']?> </span>
				<h2><?=$atts['h2']?></h2>
				<p><?=$atts['desc']?></p>
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
<!-- end blog.html-->