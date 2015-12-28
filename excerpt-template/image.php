<?php
//
//
// Post excerpt
//
//

$excerpt = get_the_excerpt();	
$content = get_the_content();
//$isFull = is_excerpt_full($excerpt, $content);
//if (!$isFull) { 
//    $content = $excerpt;
//}
        
?>
<article id="post-<?php the_ID(); ?>" <?php /*post_class(); */ ?> role="article">
    <!--<header>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </header> -->
    <?php echo $content; ?>
    
    <footer>
           <p><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
           <?php n5_post_time(); ?>           		      		  
    </footer>
    <div class="break"></div>
</article>      