<!-- Panel -->
<section class="panel">
	<div class="container">
		
		<div class="panel__text ">
			<?php block_field('text') ?>

			<?php if(block_value('cta-link') != ''){ ?>
				<a href="<?php block_field('cta-link') ?>" class="cta mt-1 watch">Scopri di più <i class="fa-solid fa-share"></i></a>
			<?php } ?>
		</div>

	</div>

	<div class="panel__media">
		<img src="<?php block_field('image')?>" alt="">
	</div>
</section>