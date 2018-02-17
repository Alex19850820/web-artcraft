<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start results.html-->
<section class="results" id="results">
	<div class="container">

		<p class="paragraph"><?=$atts['paragraph']?></p>

		<div class="wrap">

			<div class="tittle">
				<span class="block_span_title"><?=$atts['title']?></span>
				<h2 class="block_title"><?=$atts['h2']?></h2>
				<p><?=$atts['desc']?></p>
			</div>

			<div class="results__content">

				<div class="results__content--left">
					<?php if($atts['text']):?>
						<?php foreach ($atts['text'] as $post):?>
							<?php if($post['title']):?>
								<h3><?=$post['title']?></h3>
							<?php endif;?>
							<p>
								<?=$post['desc']?>
							</p>
						<?php endforeach;?>
					<?php endif;?>
				</div>

				<ul class="results__content--right">
					<?php if($atts['list']):?>
						<?php foreach ($atts['list'] as $list):?>
							<li>
								<img src="<?=$list['img']['url']?>" alt="">
								<p><span><?=$list['title']?></span> <?=$list['desc']?></p>
							</li>
						<?php endforeach;?>
					<?php endif;?>
				</ul>

			</div>

		</div>

	</div>
	<div class="animate-circle"></div>
</section>
<!-- end results.html-->