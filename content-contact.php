
<div id='contact' class="wrapper">
	<div class="title portfolio">CONTACT</div>
		<div class='container'>
			<div class="col-lg-10 contactform">
				<?php 

				$args = array(
				  'post_type' => 'contactinfo'
				);

				$the_query = new WP_Query( $args );

				?>

				<?php if ( have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				  
				  <h4><center><?php the_field( 'contact_info'); ?></center></h4>
				  
				  

				<?php endwhile; else: ?>

				<p>Nothing</p>

				<?php endif; ?>

			</div>
				 

			<div class="col-lg-8 contactform">

				<?php

				$args = array(

				  'post_type' => 'contact'

				);

				$the_query = new WP_Query( $args );

				?>

				<?php if ( have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<?php the_field( 'contactform'); ?>			  

				<?php endwhile; else: ?>

				<p>Nothing</p>

				<?php endif; ?>
			</div>
			  
	</div>
</div>