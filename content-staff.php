
<?php 
/*

Template Name: Staff

*/
?>

<div id='about' class='wrapper'>  

    <div class="row featurette container marketing">
        <div class="title other">ABOUT US</div>
        <div class='container'>
          <div class="col-lg-offset-1 col-lg-10 spacer">



<?php 

$args = array(
  'post_type' => 'about',
  'orderby' => 'menu_order',
  'order' => 'asc'
);

$the_query = new WP_Query( $args );

?>

<?php if ( have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<?php the_field( 'about'); ?>
        <br>

<?php endwhile; else: ?>

<p>Nothing</p>

<?php endif; ?>

			</div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
</div>


