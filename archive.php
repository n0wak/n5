<?php get_header(); ?>

<main class="index" role="main">
				<?php if (is_category()) { ?>
					<h2 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("posts categorized as"); ?></span> <strong><?php single_cat_title(); ?></strong>
					</h2>
				<?php } elseif (is_tag()) { ?> 
					<h2 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("posts tagged as") ?></span> <?php single_tag_title(); ?>
					</h2>
				<?php } elseif (is_author()) { ?>
					<h2 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("posts by:"); ?></span> <?php get_the_author_meta('display_name'); ?>
					</h2>
				<?php } elseif (is_day()) { ?>
					<h2 class="archive_title">
						<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("daily Archives for"); ?></span> <?php the_time('l, F j, Y'); ?>
					</h2>
				<?php } elseif (is_month()) { ?>
				    <h2 class="archive_title">
				    	<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("monthly archives for"); ?>:</span> <?php the_time('F Y'); ?>
				    </h2>
				<?php } elseif (is_year()) { ?>
				    <h2 class="archive_title">
				    	<a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php _e("yearly archives for"); ?>:</span> <?php the_time('Y'); ?>
				    </h2><?php } 
				
				
if (have_posts()) {
	while ( have_posts() ) { 						
       the_post();												
       get_template_part( 'excerpt-template/post', get_post_format() );
}

?>		
									
        <nav class="navigation pagination" role="navigation">																
			<div class="navigation-newer"><?php previous_posts_link('&laquo; Newer Page (' . (get_query_var( 'paged' ) ? get_query_var( 'paged' )-1 : 1) .')', 0) ?>&nbsp;</div>			
			<div class="navigation-current">
			    <div>This is <?php current_paged() ?>.</div>			    
			 </div>
		    <div class="navigation-older"><?php next_posts_link('Older Page ('. (get_query_var( 'paged' ) ? get_query_var( 'paged' )+1 : 1) . ') &raquo;', 0) ?>&nbsp;</div>								
        </nav>     
<?php        

    } else {
        get_template_part( 'post-template/post', 'none' );		
    }
 
?>
		
</main>

<?php get_footer(); ?>