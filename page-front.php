<?php 
/*
Template Name: Front Page
*/

get_header(); 


$about_page = get_post( 13 );
$coach_page = get_post( 8 );

?>

		<div class="home-about">
			<div class="wrap">
				<div class="icon">
					<a href="/about"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-about.png"></a>
				</div>
				<h4><?php print $about_page->post_excerpt; ?></h4>
			</div>
		</div>

		<div class="home-coach">
			<img src="<?php bloginfo( "template_url" ); ?>/library/images/bg-running.jpg" class="full-width">
			<div class="quote">
				<blockquote>"I'll make you work hard. I'll make you have fun. And I'll be cheering you on from the sidelines every step of the way."</blockquote>
				<p>- Coach T</p>
			</div>
		</div>

		<div class="home-coaching">
			<header>
				<div class="wrap">
					<a href="/coaching/"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-coaching.png"></a>
					<h4>If you are ready to discover, develop, and demonstrate the athlete in you like never before, there the many ways Taneen Carvell (Coach T) can help get you started!</h4>
				</div>
			</header>
			<div class="widget-area group home-coaching-widgets-1">
				<div class="wrap">
					<h2>One on One</h2>
					<div class="widgets">
						<?php dynamic_sidebar( "home-coaching-widgets-1" ) ?>
					</div>
				</div>
			</div>
			<div class="widget-area group home-coaching-widgets-2">
				<div class="wrap">
					<h2>Group Focus</h2>
					<div class="widgets">
						<?php dynamic_sidebar( "home-coaching-widgets-2" ) ?>
					</div>
				</div>
			</div>
			<div class="widget-area group home-coaching-widgets-3">
				<div class="wrap">
					<h2>Potomac River Running</h2>
					<div class="widgets">
						<?php dynamic_sidebar( "home-coaching-widgets-3" ) ?>
					</div>
				</div>
			</div>
		</div>

		<div class="home-studio group">
			
			<img src="<?php bloginfo( "template_url" ) ?>/library/images/bg-studio.jpg" class="right">

			<div class="left">
				<p><a href="/studio/"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-studio.png" class="icon"></a></p>
				<p><strong>CT COACHING STUDIO</strong><br>
					820 18th Street S.<br>
					Arlington, VA 22202</p>
			</div>
			
			<iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3106.934081094833!2d-77.060571!3d38.856865899999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b6d768feda31%3A0xe296fe5f2953baa3!2s820+18th+St+S!5e0!3m2!1sen!2sus!4v1399345924153" frameborder="0" style="border:0"></iframe>

			<div class="box-red">
				<h4>Meet here, train here,<br>
					learn here, share here.</h4>
			</div>

		</div>

		<div class="home-photos photo-album">
			<div class="gallery">
				<?php photo_album( $album_id ); ?>
			</div>
			<div class="album-list">
				<h3>Albums</h3>
				<?php photo_album_list(); ?>
				<p class="text-center note">Have photos from a<br>
					race or event?<br>
					<a href="/contact/">Email us!</a></p>

				<div class="icon">
					<a href="/photos/"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-photos.png"></a>
				</div>
			</div>
		</div>

		<div class="home-posts">
			<header>
				<div class="wrap">
					<div class="icon">
						<a href="/blog/"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-posts.png"></a>
					</div>
					<h3>Life Under the Red Visor</h3>
					<a href="/blog/" class="button">Archives</a>
					<img src="<?php bloginfo( "template_url" ); ?>/library/images/red-visor.png" class="visor">
				</div>
			</header>
			<div class="wrap">
				<div class="post-list">
					<?php 
					
					// The Query
					$the_query = new WP_Query( "post_type=post&posts_per_page=4" );

					// The Loop
					if ( $the_query->have_posts() ) { 
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
						<div class="entry-content">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
							<?php
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();

					?>					
				</div>
			</div>
		</div>

		<div class="home-shop">
			<header>
				<div class="wrap">
					<div class="icon">
						<a href="http://redvisorwear.bigcartel.com/" target="_blank"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-shop.png"></a>
					</div>
				</div>
			</header>
			<div class="wrap">
				<div class="shop-widgets">
					<?php 
					if ( is_active_sidebar( 'shop-widgets' ) ) : 
						dynamic_sidebar( 'shop-widgets' ); 
					endif; 
					?>
				</div>
			</div>
			<footer>
				<div class="wrap">
					<div class="icon">
						<a href="http://redvisorwear.bigcartel.com/" target="_blank"><img src="<?php bloginfo( "template_url" ); ?>/library/images/icon-home-rvw.png"></a>
					</div>
				</div>
			</footer>
		</div>

<?php 
get_footer(); 
?>
