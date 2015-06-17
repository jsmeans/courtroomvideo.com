
<?php 

/*

Template Name: Services

*/

?>

<div id='services' class="wrapper">
      <div class="title portfolio">SERVICES</div>
        
<?php 

$args = array(
  'post_type' => 'services',
  'orderby' => 'menu_order',
  'order' => 'asc'
);

$the_query = new WP_Query( $args );

?>

<?php if ( have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	<div class="services">
	  <h3><?php the_title();?></h3>
	  <img src="<?php the_field('image'); ?>">
	  <p><?php the_field( 'services'); ?></p>
	  <br>
	</div>

  
  

<?php endwhile; else: ?>

<p>Nothing</p>

<?php endif; ?>




        
          
          
      </div>