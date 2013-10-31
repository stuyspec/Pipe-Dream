<?php get_header(); ?>
			
	<div id="page-about" class="content row">
		<nav id="page-navigation">
			<ul>
				<li class="active"><a href="<? bloginfo('wpurl'); ?>/about/" title="About Pipe Dream">About</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/advertise/" title="Advertise in Pipe Dream">Advertise</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/donate/" title="Donate to Pipe Dream">Donate</a></li> -->
				<li><a href="<? bloginfo('wpurl'); ?>/join/" title="Join Pipe Dream">Join</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/staff/" title="Faces behind Pipe Dream">Staff</a></li> -->
				<li><a href="<? bloginfo('wpurl'); ?>/contact/" title="Contact Pipe Dream">Contact</a></li>
			</ul>
		</nav>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="row post">
			<div data-column="left-column" class="span15">
				<?php the_content(); ?>
			</div>

			<div class="sidebar span9 last">
				<section id="masthead">
					<ul>
						<li>
							<span class="board">Editors-in-Chief</span>
							<ul>
								<li>David Cahn, '14</li>
								<li>Edric Huang, '14</li>
							</ul>
						</li>
						<!--li>
							<span class="board">Managing Editor</span>
							<ul>
								<li><i>Not Currently Filled</i></li>
							</ul>
						</li> </!-->
						<li>
							<span class="board">Business</span>
							<ul>
								<li>Andrew Fischer, '15, <em>Business Manager</em></li>
								<li>Deanna Taylor, '15, <em>Business Manager</em></li>
							</ul>
						</li>
						<li>
							<span class="board">News</span>
							<ul>
								<li>Lindsay Bu, '14, <em>News Editor</em></li>
								<li>Noah Rosenberg, '14, <em>News Editor</em></li>
								<li>Eugenia Sanch&eacute;z, '14, <em>News Editor</em></li>
								<li>Coby Goldberg, '15, <em>News Editor In Training</em></li>
								<li>Andrew Wallace, '15, <em>News Editor In Training</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Sports</span>
							<ul>
								<li>Timothy Diep, '14, <em>Sports Editor</em></li>
								<li>Luke Morales, '14, <em>Sports Editor</em></li>
								<li>Lev Akabas, '15, <em>Sports Editor</em></li>
								<li>Annique Wong, '15, <em>Sports Editor</em></li>

							</ul>
						</li>
						<li>
							<span class="board">Photo</span>
							<ul>
								<li>Min "Danny" Kim, '14, <em>Photo Editor</em></li>
								<li>Sam Kim, '14, <em>Photo Editor</em></li>
								<li>Justin Strauss, '15, <em>Photo Editor</em></li>
								<li>Anne Duncan, '15, <em>Photo Editor In Training</em></li>

							</ul>
						</li>
						<li>
							<span class="board">Opinions</span>
							<ul>
								<li>Benjamin Attal, '14, <em>Opinion Editor</em></li>
								<li>Risham Dhillon, '14, <em>Opinion Editor</em></li>
								<li>Severyn Kozak, '14, <em>Opinion Editor</em></li>

							</ul>
						</li>
						<li>
							<span class="board">Humor</span>
							<ul>
								<li>Jeremy Karson, '14, <em>Humor Editor</em></li>
								<li>robert Melamed, '14, <em>Humor Editor</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Arts &amp; Entertainment</span>
							<ul>
								<li>Jane Argodale, '14, <em>A&amp;E Editor</em></li>
								<li>Joyce Kolitsko, '14, <em>A&amp;E Editor</em></li>
								<li>Emre Tetik, '14, <em>A&amp;E Editor</em></li>
								<li>Emma McIntosh, '15, <em>A&amp;E Editor In Training</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Layout</span>
							<ul>
								<li>Mark Perlmuter, '14, <em>Layout Editor</em></li>
								<li>Daye Shin, '15, <em>Layout Editor</em></li>
								<li>Anne Tan, '14, <em>Layout Editor</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Copy</span>
							<ul>
								<li>Thomas Bajko, '14, <em>Copy Editor</em></li>
								<li>Stephanie Yan, '14, <em>Copy Editor</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Features</span>
							<ul>
								<li>Teresa Chen, '15, <em>Features Editor</em></li>
								<li>Robert He, '14, <em>Features Editor</em></li>
								<li>Alvin Wei, '14, <em>Features Editor</em></li>
								<li>Emma Loh, '15, <em>Features Editor</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Art</span>
							<ul>
								<li>Laura Eng, '14, <em>Editorial Artist</em></li>
								<li>Michele Lin, 14, <em>Editorial Artist</em></li>
								<li>Michelle Lin,'14, <em>Editorial Artist</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Web</span>
							<ul>
								<li>Shaan Sheikh, '14, <em>Lead Web Developer</em></li>
								<li>Eric Stringman, '16, <em>Web Media</em></li>
								<li>Eugene Lee, '14, <em>Server Administrator</em></li>
								<li>Youbin Kim, '14, <em>Mentor</em></li>
								<li>Waqarul Islam, '14, <em>Mentor</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Faculty</span>
							<ul>
								<li>Kerry Garfinkel, <em>Faculty Advisor</em></li>
							</ul>
						</li>
					</ul>
				</section>
			</div>
		</section>
	</div>
	<?php get_footer(); ?>