	<!-- Cover -->
	<section class="cover" style="background-image: url('<?php block_field('image')?>">
		<div class="container">

			<div class="cover__title">
				<h2 class="text--2"><?php block_field('title')?></h2>
			</div>

			<div class="cover__text">
				<?php block_field('description') ?>
			</div>

			<div class="cover__scroll">
				<div class="cover__scroll--1 ">
					<p><?php block_field('scroll-text') ?> - </p>
				</div>
	
				<div class="cover__scroll cover__scroll--2">
					<p><?php block_field('scroll-text') ?> - </p>
				</div>
			</div>

		</div>
	</section>