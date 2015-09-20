<?php get_header(); ?>
<!-- SINGLE POST -->


<main class="post" role="main" id="single-post">		
	<?php 	
	while ( have_posts() ) {
        the_post();
        get_template_part( 'post-template/post', get_post_format() );	
	}
	
	/*						
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
    		<h2><a href="#single-post" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    	</header>
    	<section class="post-content">
    		<?php the_content(); ?>	
    	</section>
    	<footer>		
    		<div class="break"></div>			
    
    		&#x2388; <a href="<?php the_permalink() ?>" class="post-title" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> was categorized as  
    			<?php the_category(', '); ?>.<br />
    			&nbsp;&#x25BB; It was published on <?php n5_post_time(); ?><br />
                <nav>
                <?php 
                    $next_post = get_next_post();
                    $prev_post = get_previous_post();
                    if (!empty( $next_post )) { ?>
                        Newer Post: <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>.<br />
                    <?php } 
                    if (!empty( $prev_post )) { ?>
                        Older Post: <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a>.<br />
                    <?php } 
                ?>	
                     <a href="/" title="the-inbetween.com">the-inbetween</a>
                </nav>				
        </footer>			        
    </article>
    */ ?>
    
    
    
    <?php
    // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
?>
</main>	
<?php get_footer(); ?>