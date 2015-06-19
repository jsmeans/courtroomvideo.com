<?php 
/*

Template Name: Thanks

*/
?>


<?php
get_header();?>

<?php 

$args = array(
  'post_type' => 'contactsub'
);

$the_query = new WP_Query( $args );

?>

<?php if ( have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="col-lg-10 thanks">
  <h3>
  <?php the_field( 'thanks'); ?>
  </h3>
  <br>
  

<?php endwhile; else: ?>

<p>Nothing</p>

<?php endif; ?>


<div class="button">
<a href="../index.php">Return to Main Page</a></div>







<?php
get_footer();?>