<?php
get_header();?>

<div class="navbar-wrapper">
      
      <div class="navwrapper">
        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="menuItem active"><a href="#home"><span>Home</span></a></li>
                <li class="menuItem"><a href="#work">Work</a></li>
                <li class="menuItem"><a href="#services">Services</a></li>
                <li class="menuItem"><a href="#about">About Us</a></li>
                <li class="menuItem"><a href="#contact">Contact</a></li>    
              </ul>
              <div class='navback'></div>
            </div>
          </div>
        </div> 
      </div><!-- End Navbar -->
      
      
    </div>

    	<!-- START ABOUT -->
<?php get_template_part('content', 'about'); ?>


<!-- START SERVICES -->
<?php get_template_part('content', 'services'); ?>



<!-- START STAFF -->
<?php get_template_part('content', 'staff'); ?>



<!-- START THE CONTACT -->
<?php get_template_part('content', 'contact'); ?>
     

<?php
get_footer();?>