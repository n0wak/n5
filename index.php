<?php 
get_header(); 
?>
<main class="index" role="main">	

<?php
if ( have_posts() ) {
    if ( is_home() ) { /*  && ! is_front_page()  */
		
        while ( have_posts() ) { 
            the_post();	
            get_template_part( 'excerpt-template/post', get_post_format() );
		};
		
		
		   /* the_posts_pagination( array(
				'prev_text'          => __( 'Newer page', 'twentyfifteen' ),
				'next_text'          => __( 'Older page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Pg. ', 'twentyfifteen' ) . ' </span>',
			) );
			 */
		?>
		
		
		<nav class="navigation pagination" role="navigation">																
			<div class="navigation-newer"><?php previous_posts_link('&laquo; Newer Page (' . (get_query_var( 'paged' ) ? get_query_var( 'paged' )-1 : 1) .')', 0) ?>&nbsp;</div>			
			<div class="navigation-current">
			    <div>This is <?php current_paged() ?> of <a href="/" title="the-inbetween.com">the-inbetween.com</a>  </div>
			    
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

<?php
/*
<article>
        <header>
          <h2><a href="#">Some post here</a></h2>
        </header>
        <p class="excerpt">
          A few months ago we bought a new Nexus 5 to replace my old Nexus One that probably fell out of my pocket during a movie at the O2 Cineworld and someone found and didn't return because they're assholes. Whoever took it immediately turned the phone off after we realized it was gone and I kept checking Android Device Manager <a href="#">for weeks</a> hoping it would show up because of a mistake by the thief. It never did. It was a really beat up Nexus One with scratches and dents all over and my and my wife's names on crudely written on the back via pin scratches so I'm not sure what value it has to anyone. <em>It was with me around the world so there's some sentimental value there -- as much as you can have for a phone -- but who would steal such an archaic phone? I don't know.</em>
        </p>
        
        <p><a href="#" title="Read the rest of 'Some Post Title'">&gt; READ THE REST&hellip;</a></p>
      
        <footer>		  			
    		  <time datetime="2014-11-12">Wednesday <a href="http://the-inbetween.com/2014/11/">November</a> 12th, <a href="http://the-inbetween.com/2014/">2014</a>.</time>					
    		</footer>
      </article>
      
      <div class="break"></div>




		
			<section class="entries" id="content">
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">							
							<header>								
								<div class="date"><span><?php the_time('F jS, Y'); ?></span></div>								
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>								
							</header> <!-- end article header -->
						
							<div class="post_content">
								<?php the_content(); ?>					
							</div> <!-- end article section -->
							
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
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						
						<?php endwhile; ?>	
						
						
							<nav class="wp-prev-next">								
								<div class="wp-newer-page"><?php next_posts_link('Older &raquo;', 0) ?></div>									
								<div class="wp-older-page"><?php previous_posts_link('&laquo; Newer', 0) ?></div>								
							</nav>
						
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    <div class="post_content">
						    	<p>Sorry, but the requested resource was not found on this site.</p>
						    </div>
						    <footer>
						    </footer>
						</article>

						
						<?php endif; ?>
					
					
    
			</section> <!-- end #content -->
*/
?>
 