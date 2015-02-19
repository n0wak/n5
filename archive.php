<?php get_header(); ?>
			
			<section class="entries" id="content">
			
			
				<?php if (is_category()) { ?>
					<h1 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("posts categorized:"); ?></span> <?php single_cat_title(); ?>
					</h1>
				<?php } elseif (is_tag()) { ?> 
					<h1 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("posts tagged:") ?></span> <?php single_tag_title(); ?>
					</h1>
				<?php } elseif (is_author()) { ?>
					<h1 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("posts by:"); ?></span> <?php get_the_author_meta('display_name'); ?>
					</h1>
				<?php } elseif (is_day()) { ?>
					<h1 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("daily Archives for"); ?></span> <?php the_time('l, F j, Y'); ?>
					</h1>
				<?php } elseif (is_month()) { ?>
				    <h1 class="archive_title">
				    	<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("monthly archives for"); ?>:</span> <?php the_time('F Y'); ?>
				    </h1>
				<?php } elseif (is_year()) { ?>
				    <h1 class="archive_title">
				    	<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("yearly archives for:"); ?>:</span> <?php the_time('Y'); ?>
				    </h1>
				<?php } ?>
			
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>								
								<div class="date"><span><?php the_time('F jS, Y'); ?></span></div>								
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>								
							</header> <!-- end article header -->
						
							<section class="post_content">							
								<?php the_excerpt(); ?>						
							</section> <!-- end article section -->
							
							<footer>		
								<div class="break"></div>			
								&#x2388; <a href="<?php the_permalink() ?>" class="post-title" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> was categorized as  
								<?php the_category(' &nbsp;'); ?>.<br />
								&nbsp;&#x25BB; It was published on <?php the_time('l '); ?>

								<a href="<?php echo get_month_link( get_the_time('Y'), get_the_time('m') ); ?>"><?php the_time('F'); ?>
		</a>
								<?php the_time('jS, '); ?>

								<a href="<?php echo get_year_link( get_the_time('Y')); ?>"><?php the_time('Y'); ?></a>							
								.							
							</footer> <!-- end article footer --> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						<?php endwhile; ?>	
						

						<nav class="wp-prev-next">						
							<div class="wp-newer-page"><?php next_posts_link('Older &raquo;', 0) ?></div>									
							<div class="wp-older-page"><?php previous_posts_link('&laquo; Newer', 0) ?></div>								
						</nav>
									
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
						    </header>
						    <section class="post_content">
						    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
									
    
			</div> <!-- end #content -->

<?php get_footer(); ?>