<?php get_header(); ?>
			
	<div id="page-contact" class="content row">
		<nav id="page-navigation">
			<ul>
				<li><a href="<? bloginfo('wpurl'); ?>/about/" title="About Pipe Dream">About</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/advertise/" title="Advertise in Pipe Dream">Advertise</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/donate/" title="Donate to Pipe Dream">Donate</a></li> -->
				<li><a href="<? bloginfo('wpurl'); ?>/join/" title="Join Pipe Dream">Join</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/staff/" title="Faces behind Pipe Dream">Staff</a></li> -->
				<li class="active"><a href="<? bloginfo('wpurl'); ?>/contact/" title="Contact Pipe Dream">Contact</a></li>
			</ul>
		</nav>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="row post">
			<div class="span16">
				<?php the_content(); ?>
			</div>
			<div class="span8 last">
				<dl id="contact-list">
					<dt>Letters to the Editor:</dt>
						<dl><a href="mailto:letters@stuyspectator.com">letters@stuyspectator.com</a></dl>
					<dt>Corrections & General Comments:</dt>
						<dl><a href="mailto:comments@stuyspectator.com" title="Submit a correction">comments@stuyspectator.com</a></dl>
					<dt>Archival Comments:</dt>
						<dl><a href="mailto:specbusiness@gmail.om">specbusiness@gmail.om</a></dl>
					<dt>Advertising:</dt>
						<dl><a href="http://stuyspec.com/advertise/">See our Advertising Page!</a></dl>
				</dl>
			</div>
			<br><br>
			<br><br>
			Stuyvesant High School <br>
			Attn: The Stuyvesant Spectator<br>
			345 Chambers Street<br>
			New York, NY 10282<br>
			(212) 312-4800 ext. 2601<br>
			
		</section>
	</div>
	<?php get_footer(); ?>