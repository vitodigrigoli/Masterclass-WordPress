<!-- Jumbotron -->
<section class="jumbotron ">
	<div class="container">
		<div class="jumbotron__picture">
			<figure class="picture watch">
				<img src="<?php block_field('image-1') ?>" alt="">
			</figure>
		</div>

		<div class="jumbotron__text">
			<h2><?php block_field('title')?></h2>
			<hr>
			<?php block_field('description') ?>
		</div>

		<div class="jumbotron__picture">
			<figure class="picture watch">
				<img src="<?php block_field('image-2') ?>" alt="">
			</figure>
		</div>
	</div>
</section>