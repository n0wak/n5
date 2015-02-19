<?php
//
//
// Post excerpt
//
//

$excerpt = get_the_excerpt();	
$content = get_the_content();
$isFull = is_excerpt_full($excerpt, $content);
if (!$isFull) { 
    $content = $excerpt;
}



            
?>

<article id="post-<?php the_ID(); ?>" <?php /*post_class(); */ ?> role="article">
    <header>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <p class="excerpt <?php if ($isFull) { echo "excerpt-full"; } ?>">
        <?php echo $content; ?>
    </p>
    <?php if (!$isFull) { ?>
    <p>
        <a href="<?php the_permalink(); ?>" title="Read the rest of '<?php the_title_attribute(); ?>'">
            &gt; READ THE REST&hellip;
        </a>
    </p>
    <?php } ?>
    
    <footer>
           <?php n5_post_time(); ?>           		      		  
    </footer>
    <div class="break"></div>
</article>      