<?php get_header(); ?>
			
<main class="post error" role="main">				
	<article id="post-not-found">
        <header>
        	<h2>404 - Content Not Found</h2>
        </header>
        <section class="post_content">
        	<p>Sorry, couldn't find what you were looking for. Try <a href="/" title="the-inbetween.com">the homepage</a> for the latest updates or use the search field below.</p>
        	
        	<?php get_search_form(); ?>
        	
        	<figure>
        	    <iframe width="100%" height="300" src="http://youtube.com/embed/crPl0ITIkS0?autoplay=0&loop=1&hd=1&controls=0&showinfo=0&modestbranding=1&iv_load_policy=3&rel=0&playlist=crPl0ITIkS0" frameborder="0" allowfullscreen></iframe>
        	</figure>
        	
        </section>
        <footer>		
    		<div class="break"></div>			
    		
                <nav>
                    <a href="/" title="the-inbetween.com">the-inbetween</a>
                </nav>				
        </footer>		
    </article>
</main>
<?php /*

			<section class="entries" id="content">
										
					<article id="post-not-found" class="post">
						
						<header>
							
							<h1><span>404 - Article Not Found</span></h1>
						
						</header> <!-- end article header -->
					
						<div class="post_content">
							
							<p>We couldn't find what you were looking for.</p>
							<p>Go to <a href="/">the-inbetween.com</a> for the latest updates.</p>

							<div class="divider"></div>

							<iframe width="640" height="480" src="http://www.youtube.com/embed/TgJPmcS2mMc?rel=0" frameborder="0" allowfullscreen></iframe>
					
						</div> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
				
			</section>
*/ ?>
<?php get_footer(); ?>