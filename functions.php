<?php


function custom_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 80 );

function new_excerpt_more( $more ) {
	return '&#8230;';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* http://css-tricks.com/snippets/wordpress/ */
/* http://css-tricks.com/snippets/wordpress/disable-automatic-formatting-using-a-shortcode/ */

/* http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/ */
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/* 

http://css-tricks.com/snippets/wordpress/insert-images-with-figurefigcaption/

function html5_insert_image($html, $id, $caption, $title, $align, $url) {
  $html5 = "<figure id='post-$id media-$id' class='align-$align'>";
  $html5 .= "<img src='$url' alt='$title' />";
  if ($caption) {
    $html5 .= "<figcaption>$caption</figcaption>";
  }
  $html5 .= "</figure>";
  return $html5;
}
add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );

http://css-tricks.com/snippets/wordpress/add-class-to-links-generated-by-next_posts_link-and-previous_posts_link/

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="styled-button"';
}
*/

add_theme_support( 'post-formats', array(
		'aside', 'image', 'video',  'link', 'audio'	) ); /* 'quote', 'gallery', 'status','chat' */

	
//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );

	
function getHeaderClass() {
	if ( is_home() ) { 
		return "index-header "; 
	} else { 
		return "post-header ";
	}	
}
function echoIfIndex($string) {
    if (is_home()) {
        echo $string;
    }
}
function echoIfNotIndex($string) {
    if (!is_home()) {
        echo $string;
    }
}
function echoIfSingle($string) {
    if (is_single()) {
        echo $string;
    }
}

function is_excerpt_full($excerpt, $content) {
	return str_word_count($excerpt) >= str_word_count($content);
}

function echoIfItalic($output, $content) {
    if (strpos("<em", $content) === false) {
        //return "";
    } else {
        echo $content;
    }
}


function code_shortcode($atts, $content = '')
{
    return '<code>' . str_replace(';', ',', $content) . '</code>';
}

function pre_process_shortcode($content) {
    global $shortcode_tags;
 
    // Backup current registered shortcodes and clear them all out
    $orig_shortcode_tags = $shortcode_tags;
    $shortcode_tags = array();
 
    add_shortcode('code', 'code_shortcode');
 
    // Do the shortcode (only the one above is registered)
    $content = do_shortcode($content);
 
    // Put the original shortcodes back
    $shortcode_tags = $orig_shortcode_tags;
 
    return $content;
}
 
add_filter('the_content', 'pre_process_shortcode', 7);




/*  <?php
    echo get_the_time('l'); ?>  */
    
function n5_post_time() {
?>
<time datetime="<?php echo get_the_time('Y-m-d'); ?>">
    <a href="<?php echo get_month_link( get_the_time("Y"), get_the_time("m") ); ?>"><?php echo get_the_time('F jS,'); ?></a> <a href="<?php echo get_year_link( get_the_time("Y") ); ?>"><?php echo get_the_time('Y.'); ?></a></time> <?php
}



function current_paged( $var = '' ) {
    if( empty( $var ) ) {
        global $wp_query;
        if( !isset( $wp_query->max_num_pages ) )
            return;
        $pages = $wp_query->max_num_pages;
    }
    else {
        global $$var;
            if( !is_a( $$var, 'WP_Query' ) )
                return;
        if( !isset( $$var->max_num_pages ) || !isset( $$var ) )
            return;
        $pages = absint( $$var->max_num_pages );
    }
    if( $pages < 1 )
        return;
    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    echo 'page ' . $page . '<!-- of ' . $pages.'-->';
}


	
?>