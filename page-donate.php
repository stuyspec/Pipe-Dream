<?php get_header(); ?>

	<div id="page-donate" class="content row">
		<nav id="page-navigation">
			<ul>
				<li><a href="<? bloginfo('wpurl'); ?>/about/" title="About Pipe Dream">About</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/advertise/" title="Advertise in Pipe Dream">Advertise</a></li>
				<li class="active"><a href="<? bloginfo('wpurl'); ?>/donate/" title="Donate to Pipe Dream">Donate</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/join/" title="Join Pipe Dream">Join</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/staff/" title="Faces behind Pipe Dream">Staff</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/contact/" title="Contact Pipe Dream">Contact</a></li>
			</ul>
		</nav>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="post">
		<?php the_content(); ?>

		<br>


		<!--Bitcoin Donations-->
		<script src="http://coinwidget.com/widget/coin.js"></script>
		<script>
		CoinWidgetCom.go({
			wallet_address: "18KULfsgimwbQ5naTeKJgUY83nHrhNKsGW"
			, currency: "bitcoin"
			, counter: "count"
			, alignment: "bl"
			, qrcode: true
			, auto_show: false
			, lbl_button: "Donate Bitcoins"
			, lbl_address: "The Spectator's Bitcoin Address:"
			, lbl_count: "Donations"
			, lbl_amount: "BTC Donated"
		});
		</script>


		<!--Litecoin Donations-->
		<script src="http://coinwidget.com/widget/coin.js"></script>
		<script>
		CoinWidgetCom.go({
			wallet_address: "LbJ8wcKHtCZJHc1CynuLVz8s2iaVEwCCaR"
			, currency: "litecoin"
			, counter: "count"
			, alignment: "bl"
			, qrcode: true
			, auto_show: false
			, lbl_button: "Donate Litecoins"
			, lbl_address: "The Spectator's Litecoin Address:"
			, lbl_count: "Donations"			
			, lbl_amount: "LTC Donated"
		});
		</script>


		<!--Dogecoin Donations-->
		<script src="http://cdn.bitmindo.com/dogecoin.min.js"></script>
		<script>
		CoinWidgetCom.go({
			wallet_address: "D8qsvWFrawNz3omfaFMM4mXC4oq2GZRivf"
   			, currency: "dogecoin"
    			, counter: "count"
    			, alignment: "bl"
    			, qrcode: true
			, auto_show: false
			, lbl_button: "Donate Dogecoins"
		 	, lbl_address: "The Spectator's Dogecoin Address:"
	                , lbl_amount: "DOGE Donated"
		});
		</script>


		<br>


		</section>
	
	Testing, testing, 1,2,3.

	</div>
	<?php get_footer(); ?>



