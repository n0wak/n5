<?php get_header(); ?>

<main class="index" role="main">
		
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
				    	<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("yearly archives for"); ?>:</span> <?php the_time('Y'); ?>
				    </h1>
				<?php } ?>
			
						<?php if (have_posts()) : while (have_posts()) : the_post();
						
						
                            get_template_part( 'excerpt-template/post', get_post_format() );
		?>
		
		
						<?php endwhile; ?>	
						


                        <nav class="post-navigation">
                                <div class="navigation-newer"><?php next_posts_link('Older Page.', 0) ?></div>

                                <div class="navigation-older"><?php previous_posts_link('Newer Page.', 0) ?></div>
                
                        </nav>
                        
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
</main>

<?php get_footer(); ?>