<?php
//
// Single post page
//          
?>
<article id="post-<?php the_ID(); ?>" <?php /*post_class(); */ ?>>
    <header>
		<h2><a href="#single-post" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<section class="post-content">
		<?php the_content(); ?>	
	</section>
	<footer>		
		<div class="break"></div> &#x2388; <a href="<?php the_permalink() ?>" class="post-title" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> was categorized as <?php the_category(', '); ?>.<br />It was published on <?php n5_post_time(); ?><?php 
        /*<nav class="post-navigation">        
            $next_post = get_next_post();
            $prev_post = get_previous_post();
            if (!empty( $next_post )) { ?>
                <div class="navigation-newer">Newer Post: <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>.</div>
            <?php } 
            if (!empty( $prev_post )) { ?>
                <div class="navigation-older">Older Post: <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a>.</div>
            <?php }         	
             <div class="navigation-current"><strong><a href="/" title="the-inbetween.com">&#8962;</a></strong></div>
        </nav>	
        
		*/ ?><div class="break"></div>			
    </footer>			        
</article>