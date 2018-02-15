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
					$image = get_field('intro_icon');
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
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
    <div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/slider/burger.jpg" alt="">
    </div>
</section>
	
<section id="the-box">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6" id="revit-box">
		</div>
		<div class="cell small-12 medium-6" id="bg_lettuce">
			<div class="lead-in">
				<h3>We deliver</h3>
				<h2>only the best</h2>
			</div>
			<div class="grid-x icon-padding">
				<div class="cell small-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/box/icon-box.svg" alt=""></div>
				<div class="cell auto"><p>Each month you get the best plant-based products for breakfast, lunch, and dinner, along with a special holiday box</p></div>
			</div>
			<div class="grid-x icon-padding">
				<div class="cell small-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/box/icon-box.svg" alt=""></div>
				<div class="cell auto"><p>Each month you get the best plant-based products for breakfast, lunch, and dinner, along with a special holiday box</p></div>
			</div>
			<div class="grid-x icon-padding">
				<div class="cell small-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/box/icon-box.svg" alt=""></div>
				<div class="cell auto"><p>Each month you get the best plant-based products for breakfast, lunch, and dinner, along with a special holiday box</p></div>
			</div>
		</div>
	</div>
</section>

<section id="the-benefits">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6" id="bg_tomatoe">
				<div class="lead-in">
					<h3>We deliver</h3>
					<h2>only the best</h2>
				</div>
			<div class="grid-x icon-padding">
				<div class="cell small-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/box/icon-box.svg" alt=""></div>
				<div class="cell auto">
					<p>Enjoy immediate health benefits:</p>
					<ul>
						<li>Less bad cholesterol</li>
						<li>Less bad cholesterol</li>
						<li>Less bad cholesterol</li>
					</ul>
				</div>
			</div>
			<div class="grid-x icon-padding">
				<div class="cell small-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/box/icon-box.svg" alt=""></div>
				<div class="cell auto"><p>Each month you get the best plant-based products for breakfast, lunch, and dinner, along with a special holiday box</p></div>
			</div>
			<div class="grid-x icon-padding">
				<div class="cell small-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/box/icon-box.svg" alt=""></div>
				<div class="cell auto"><p>Each month you get the best plant-based products for breakfast, lunch, and dinner, along with a special holiday box</p></div>
			</div>
		</div>
		<div class="cell small-12 medium-6" id="benefits-girl">
			
		</div>
	</div>
</section>

<section id="testimonials">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12">

			<div class="lead-in">
				<h3>We deliver</h3>
				<h2>only the best</h2>
			</div>

		<div class="lazy slider" data-sizes="50vw">
				<div>
					<blockquote>"Plant-based products expertly selected for me. So far these products are easily incorporated into my current diet."</blockquote>

					<div class="personsName"><span class="green"><b>—</b></span> Jen B</div>
				</div>
				<div>
					<blockquote>"Plant-based products expertly selected for me. So far these products are easily incorporated into my current diet."</blockquote>

					<div class="personsName"><span class="green"><b>—</b></span> Jen B</div>

				</div>
				<div>
				<blockquote>"Plant-based products expertly selected for me. So far these products are easily incorporated into my current diet."</blockquote>

					<div class="personsName"><span class="green"><b>—</b></span> Jen B</div>
				</div>
				
			</div>	
			
			
		

			
			

		</div>
	</div>
</section>



<section id="the-backstory-and-buzz">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6" id="the-backstory">
			<div class="lead-in">
				<h3>We deliver</h3>
				<h2>only the best</h2>
			</div>
			
			<p>Over the years, our friends, family, and colleagues have been hungry for our “secret” to a plant-based diet, as they had trouble finding great tasting, versatile plant-based food options at their local supermarket. The secret was simple: find the best plant-based comfort foods that are easy to fit into people’s daily meals. We turned this concept into revit with the mission to help as many people as possible enjoy the delicious health and environmental benefits of a plant-based lifestyle.</p>
			<p><span class="purple"><b>—</b></span> revit founders</p>

		</div>
		<div class="cell small-12 medium-6" id="the-buzz">
				<div class="lead-in">
					<h3>We deliver</h3>
					<h2>only the best</h2>
				</div>
				<p>Here’s how we catch the latest trends and news about a plant-based lifestyle and its amazing benefits:</p>
				<div class="grid-x icon-padding">
					<div class="cell shrink"><a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/buzz/tk-logo-nav.png" alt=""></a></div>
					<div class="cell auto"><a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/buzz/EatForThePlanet.png" alt=""></a></div>
				</div>
				<div class="grid-x icon-padding">
					<div class="cell shrink"><a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/buzz/tk-logo-nav.png" alt=""></a></div>
					<div class="cell auto"><a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/buzz/EatForThePlanet.png" alt=""></a></div>
				</div>
				<div class="grid-x icon-padding">
					<div class="cell shrink"><a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/buzz/tk-logo-nav.png" alt=""></a></div>
					<div class="cell auto"><a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/buzz/EatForThePlanet.png" alt=""></a></div>
				</div>			
				
		</div>
	</div>
</section>

<section id="cta">	
	<div class="grid-x grid-padding-x">
		<div class="cell small-12">
				<div class="lead-in">
						<h2>You can have it all….from plants</h2>
						<h1 class="regular">The Comfort <span class="green">+</span> The Flavor <span class="green">+</span> The Benefits</h1>
					</div>
				<a role="button" class="download large button sites-button hide-for-small-only" href="#">Reward Your Tastebuds Now</a>
		</div>
	</div>
</section>

<?php get_footer();?>
