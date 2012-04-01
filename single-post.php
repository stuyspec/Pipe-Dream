<?php get_header(); ?>
	<div class="row" id="content">
		<div class="span17">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- Check if the article is part of the archives -->
			<?php $archive = pd_is_archived(get_the_ID(), null); // print_r($archive); ?>
			
			<article id="post-<?php the_ID(); ?>">
				
				<p class="published">
					<time datetime="<?php the_time('Y-m-j\TH:i:sT'); ?>" title="Published on <?php the_time('F j, Y \a\t g:i A T'); ?>">
						<?php the_time('F j, Y'); ?>
					</time>
				</p>
				
				<h2><?php the_title(); ?></h2>
				
				<div id="meta">
					<div id="social">
						<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
					</div>
					<?php if(function_exists('coauthors_posts_links')): ?>
						<?php if(is_coauthor_for_post('Staff Reports')): ?>
							<p class="byline">Staff Reports</p>
						<?php elseif(is_coauthor_for_post('editorial')): ?>
							<p class="byline">The Editorial Board</p>
						<?php elseif(is_coauthor_for_post('archives')): ?>
							<p class="byline"><?php echo $archive['_author']; ?></p>
						<?php else: ?>
							<p class="byline"><?php coauthors_posts_links(); //coauthors(); ?></p>
						<?php endif;?>
					<?php endif;?>
						
				</div>
				
				<section> <!-- article text and images -->
				
					<!-- Grab all of the photos associated with article. -->
					<?php $attachments = get_photos(get_the_ID(), '-1'); ?>
					
					
					<?php // echo "<pre>"; print_r($attachments); echo "</pre>"; ?>
						
					<!-- 
					// Check if a feature photo exists. If there is a feature photo,
					// display it and set $paragraphAfter to display any inline photo
					// after the third paragraph. This ensures that there is enough 
					// vertical-space between both images.
					-->
					<?php if(isset($attachments['display']['feature'])): ?>
						
						<?php $photo = $attachments['photos'][$attachments['display']['feature']]; ?>
																										
						<figure id="single-feature">
							<a href="<?php echo $photo['src']['large']; ?>" title="<?php echo $photo['caption']; ?> (<?php echo $photo['credit']; ?>)" class="gallery" rel="gallery"><img src="<?php echo $photo['src']['medium']; ?>" /></a>
							<figcaption>
								<p class="credit"><?php echo $photo['credit']; ?></p>
								<p><?php echo $photo['caption']; ?></p>
							</figcaption>
						</figure>
						
						<!-- 
						// When there is are feature and inline photos,
						// display the inline photo a little further down.
						-->
						<?php $paragraphAfter = 3; ?>

					<?php endif; ?>


					<!-- Check if an inline photo exists. -->
					<?php if(isset($attachments['display']['inline']) || isset($archive['_image1'])): ?>

						<?php
							if(isset($attachments['display']['inline'])) {
								$photo = $attachments['photos'][$attachments['display']['inline']];
							} else {
								$photo = $archive['_image1'];
							}
						?>

						<?php
							if(!isset($paragraphAfter)) $paragraphAfter = 1; 
							$content = apply_filters('the_content', get_the_content());
							$content = explode("</p>", $content);
							for ($i = 0; $i < count($content); $i++ ) {
							if ($i == $paragraphAfter) { ?>

								<?php // ensures that vertical photos 
									$subject = $photo['src']['single-inline'];
									$pattern = '/\d{3}x\d{3}/';
									preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
									if(isset($matches[0][0]) && $matches[0][0]) $max_width = substr($matches[0][0], 0, 3)."px";
									else $max_width = "425px";
								?>

								<!-- Display the inline photo -->
								<figure id="single-inline" class="thumb-right" style="max-width: <?php if($max_width) echo $max_width; ?>;">
									<?php if(in_category('opinion')): ?>
										<img src="<?php echo $photo['src']['single-inline']; ?>" class="headshot" />
									<?php else: ?>										
										<a href="<?php echo $photo['src']['large']; ?>" <?php if($photo['credit']): ?>title="<?php echo $photo['caption']; ?> <?php echo "(".$photo['credit'].")"; ?>" <?php endif; ?> class="gallery" rel="gallery">
											<img src="<?php echo $photo['src']['single-inline']; ?>" />
											<?php if(isset($attachments['photos']) && count($attachments['photos']) > '2'): ?>
												<p class="more-photos">
													<img src="<?php echo get_template_directory_uri(); ?>/img/slideshow.png">Slide Show</img>
												</p>
											<?php endif; ?>
										</a>
									<?php endif; ?>
									
									<figcaption>
										<p class="credit"><?php echo $photo['credit']; ?></p>
										<p><?php echo $photo['caption']; ?></p>
									</figcaption>
								</figure>

							<?php }
							echo $content[$i] . "</p>";
						} ?>
						<!-- Display the extra images in a slideshow  -->
						
						<?php if(isset($attachments['display']['gallery'])): ?>
						<?php foreach($attachments['display']['gallery'] as $image): ?>
							<a href="<?php echo $attachments['photos'][$image]['src']['large']; ?>" title="<?php echo $attachments['photos'][$image]['caption']; ?> (<?php echo $attachments['photos'][$image]['credit']; ?>)" class="gallery" rel="gallery"><img src="<?php echo $attachments['photos'][$image]['src']['single-inline']; ?>" style="display:none;" /></a>
						<?php endforeach; ?>
						<?php endif; ?>					
					
					<?php else: ?> <!-- There is a feature photo, but no inline photo -->

						<?php the_content(); ?>

					<?php endif; ?>

				</section>
			</article>
						
			<?php endwhile; ?>
			
			<section id="comments">
				<div id="disqus_thread"></div>
				<script type="text/javascript">
				    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				    var disqus_shortname = 'pipedream'; // required: replace example with your forum shortname

				    /* * * DON'T EDIT BELOW THIS LINE * * */
				    (function() {
				        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
				        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</section>			
			
			<?php else : ?>

			<article id="post-not-found">
			    <header>
			    	<h1>Not Found</h1>
			    </header>
			    <section class="post_content">
			    	<p>Sorry, but the requested resource was not found on this site.</p>
			    </section>
			    <footer>
			    </footer>
			</article>
			
			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>