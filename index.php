<?php 
get_header(); 
?>
<main class="index" role="main">	
<?php
if ( have_posts() ) {
    if ( is_home() ) { /*  && ! is_front_page()  */		
        while ( have_posts() ) { 
            the_post();	            
            $format = get_post_format( get_the_ID());

            if ($format == "") {
                get_template_part( 'excerpt-template/post' , get_post_format() );
            } else {
                get_template_part( 'excerpt-template/'.$format , get_post_format() );
            }
            
		};
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
} 
?>
</main>
<?php get_footer(); ?>