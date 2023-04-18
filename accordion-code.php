<section class="accord-section">
	<div class="container">
		<div class="row">
			<h1>This is my first Accordion Repeater</h1>
			<?php if(have_rows('accordion_repeater')):?>
				<?php while(have_rows('accordion_repeater')): the_row();?>
				<button>
					<?php the_sub_field('accordion_title');?>
				</button>
				<div class="panel">
					<p><?php the_sub_field('accordion_content');?></p>
				</div>
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>