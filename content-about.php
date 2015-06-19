


<div id='work' class='wrapper'>  

    <div class="row featurette container marketing">
        
		<div class='container'>
			<div class="col-lg-offset-1 col-lg-10 spacer">


			<?php 

			$args = array(
			  'post_type' => 'work'
			);

			$the_query = new WP_Query( $args );

			?>

			<?php if ( have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			  
			  <?php the_field( 'call_to_action'); ?>
			  <br>
			  

			<?php endwhile; else: ?>

			<p>Nothing</p>

			<?php endif; ?>

			</div>
		</div>
	</div>
</div>