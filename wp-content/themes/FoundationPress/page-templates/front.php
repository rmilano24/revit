<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<?php the_field('hero_text'); ?>
			<a role="button" class="download large button sites-button" href="#">Sign Up Now</a>
		</div>
	</div>
</header>

<div class="veg-strip"></div>

<section id="the-best">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 lead-in">
				<h3><?php the_field('section_one_header'); ?></h3>
				<h2><?php the_field('section_one_subheader'); ?></h2>
			</div>
		</div>
	</div>			
	<div class="grid-container" id="icon-container">
		<div class="grid-x grid-padding-x">

			<?php
				$args = array(
					'post_type' => 'intro_icons',
					'posts_per_page' => 3
				);
				$my_intro_icons = new WP_Query( $args );
				if( $my_intro_icons->have_posts() ) {
					while( $my_intro_icons ->have_posts() ) {
						$my_intro_icons->the_post();
			?>

			<div class="cell small-12 medium-4">
				<div class="icon">
					<?php
						$image = get_field('icon');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>	
				<p><?php the_field('icon_text'); ?></p>
			</div>

			<?php
					}
				}
				else {
					echo 'There are currently no intro icons added.';
				}
			?>
			<?php wp_reset_query(); ?>
			
		</div>
	</div>
</section>

<section class="center slider image-slider">

	<?php
		$args = array(
			'post_type' => 'slides',
			'posts_per_page' => 3
		);
		$my_slides = new WP_Query( $args );
		if( $my_slides->have_posts() ) {
			while( $my_slides ->have_posts() ) {
				$my_slides->the_post();
	?>

	 <div>
	 <?php
		$image = get_field('slide_image');
		if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>
    </div>

	<?php
			}
		}
		else {
			echo 'There are currently no slides added.';
		}
	?>
	<?php wp_reset_query(); ?>			


</section>
	
<section id="the-box">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6" id="revit-box">
		</div>
		<div class="cell small-12 medium-6" id="bg_lettuce">
			<div class="lead-in">
			<h3><?php the_field('section_two_header'); ?></h3>
				<h2><?php the_field('section_two_subheader'); ?></h2>
			</div>


			<?php
				$args = array(
					'post_type' => 'box_icons',
					'posts_per_page' => 5
				);
				$my_box_icons = new WP_Query( $args );
				if( $my_box_icons->have_posts() ) {
					while( $my_box_icons ->have_posts() ) {
						$my_box_icons->the_post();
			?>
			
			<div class="grid-x icon-padding">
				<div class="cell shrink">
					<?php
						$image = get_field('icon');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="cell auto"><p><?php the_field('icon_text'); ?></p></div>
			</div>

			<?php
					}
				}
				else {
					echo 'There are currently no box icons added.';
				}
			?>
			<?php wp_reset_query(); ?>

		</div>
	</div>
</section>

<section id="the-benefits">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6" id="bg_tomatoe">
				<div class="lead-in">
				<h3><?php the_field('section_three_header'); ?></h3>
				<h2><?php the_field('section_three_subheader'); ?></h2>
				</div>

			
			<?php
				$args = array(
					'post_type' => 'benefit_icons',
					'posts_per_page' => 5
				);
				$my_benefit_icons = new WP_Query( $args );
				if( $my_benefit_icons->have_posts() ) {
					while( $my_benefit_icons ->have_posts() ) {
						$my_benefit_icons->the_post();
			?>
			
			<div class="grid-x icon-padding">
				<div class="cell shrink">
					<?php
						$image = get_field('icon');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="cell auto"><p><?php the_field('icon_text'); ?></p></div>
			</div>

			<?php
					}
				}
				else {
					echo 'There are currently no benefit icons added.';
				}
			?>
			<?php wp_reset_query(); ?>


			
		</div>
		<div class="cell small-12 medium-6" id="benefits-girl">
		</div>	
			
		</div>
	</div>
</section>

<section id="testimonials">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12">

			<div class="lead-in">
				<h3><?php the_field('section_four_header'); ?></h3>
				<h2><?php the_field('section_four_subheader'); ?></h2>
			</div>

		<div class="lazy slider" data-sizes="50vw">

			<?php
				$args = array(
					'post_type' => 'testimonials',
					'posts_per_page' => 10
				);
				$my_testimonials = new WP_Query( $args );
				if( $my_testimonials->have_posts() ) {
					while( $my_testimonials ->have_posts() ) {
						$my_testimonials->the_post();
			?>
			
			<div>
				<blockquote><span class="green">"</span><?php the_field('quote'); ?><span class="green">"</span></blockquote>

				<div class="personsName"><span class="green"><b>—</b></span> <?php the_title(); ?></div>
			</div>

			<?php
					}
				}
				else {
					echo 'There are currently no testimonials added.';
				}
			?>
			<?php wp_reset_query(); ?>
		
		</div>	
			
		</div>
	</div>
</section>



<section id="the-backstory-and-buzz">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6" id="the-backstory">
			<div class="lead-in">
				<h3><?php the_field('section_five_header'); ?></h3>
				<h2><?php the_field('section_five_subheader'); ?></h2>
			</div>
			
			<?php the_field('backstory_text'); ?>
			<p><span class="purple"><b>—</b></span> revit founders</p>

		</div>
		<div class="cell small-12 medium-6" id="the-buzz">
				<div class="lead-in">
				<h3><?php the_field('section_six_header'); ?></h3>
				<h2><?php the_field('section_six_subheader'); ?></h2>
				</div>
				<p><?php the_field('buzz_intro'); ?></p>

				<div class="grid-x icon-padding">
					<div class="cell shrink small-6"><a href="<?php the_field('buzz_link_one'); ?>" target="_blank">
					<?php
						$image = get_field('buzz_logo_one');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					</a></div>
					<div class="cell auto small-6"><a href="<?php the_field('buzz_link_two'); ?>" target="_blank">
					<?php
						$image = get_field('buzz_logo_two');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					</a></div>
				</div>
				<div class="grid-x icon-padding">
					<div class="cell shrink small-6"><a href="<?php the_field('buzz_link_three'); ?>" target="_blank">
					<?php
						$image = get_field('buzz_logo_three');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					</a></div>
					<div class="cell auto small-6"><a href="<?php the_field('buzz_link_four'); ?>" target="_blank">
					<?php
						$image = get_field('buzz_logo_four');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					</a></div>
				</div>
				<div class="grid-x icon-padding">
					<div class="cell shrink small-6"><a href="<?php the_field('buzz_link_five'); ?>" target="_blank">
					<?php
						$image = get_field('buzz_logo_five');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					</a></div>
					<div class="cell auto small-6"><a href="<?php the_field('buzz_link_six'); ?>" target="_blank">
					<?php
						$image = get_field('buzz_logo_six');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					</a></div>
				</div>
				
		</div>
	</div>
</section>

<section id="cta">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12">
				<div class="lead-in">
					<?php the_field('call_to_action'); ?>
					</div>
				<a role="button" class="download large button sites-button" href="#">Reward Your Tastebuds Now</a>
		</div>
	</div>
</section>

<?php get_footer();?>
