<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="help">
    	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  	</div>
  <?php
    return;
  }
?>

<aside class="comments" id="feedback">	
  						              
    <header class="comments-header">
        <h3><a href="#feedback">Comments</a></h3>
    </header>
    
    <?php if ($comments) : 
        foreach ($comments as $comment) : ?>
	
    <section class="comment" id="comment-<?php comment_ID() ?>">
    	<header class="comment-header">
        	<strong><?php comment_author_link(); ?> wrote</strong> on <span class="comment-date"><a href="#comment-<?php comment_ID() ?>"><?php comment_date('F jS, Y \a\t H:m') ?></a></span>: 
        </header>
        <div class="comment-text">
            <?php comment_text(); ?>
        </div>
    </section>

   	<?php endforeach; /* end for each comment */ ?>
	
	<div class="divider"></div>
	
	<?php endif; ?>


    

<?php if ('open' == $post->comment_status) : ?>
									

						<?php /* <form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
							<div>

			<?php if ( $user_ID ) : ?>

								<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

			<?php else : ?>
								<label for="author">Name:</label>

								<input type="text" id="author" name="author" class="textfield" />

								<label for="email">Email:</label>
								<input type="text" id="email" name="email" class="textfield" />

								<label for="url">URL:</label>
								<input type="text" id="url" name="url" class="textfield" />
				
			<?php endif; ?>

								<label for="comment">Comments:</label>

								<textarea name="comment" id="comment" rows="6" cols="35"></textarea>

								<input name="submit" type="submit" class="submitbutton" tabindex="5" value="POST" />
								<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

							</div>
			<?php do_action('comment_form', $post->ID); ?>

						</form>


						<span class="commentNote">All fields are optional. Email will <em>never</em> be revealed. Posts by new commenters are moderated so they might not show up until I get to them.<br /><br />
						</span>

*/ ?>
 <?php else : // comments are closed ?>
					<h4>New comments are disabled for this post.</h4>
					
					
<?php endif; ?>

</aside>

	