 <footer id="contact" class="row featurette">
        <div class='container' id="footer">    
       <p class="footerstyle">© <?php echo date( 'Y' ); ?> Courtroom Video</p>
        </div>

        <div id="studio42" class="container grid_4 omega">
        <a href="http://www.studio-42.com">Site Design and Development by Studio 42</a>
      </div>
      </footer> <!-- END FOOTER -->

    </div> <!-- END CONTENT -->

  </div>

  <script type="text/javascript" src="wp-content/themes/courtroom/js/skrollr.min.js"></script>
    <script type="text/javascript">
    var s = skrollr.init();
    </script>

    
  <!-- Bootstrap & Plugins core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- ### IMPORTANT ### stickUp javascript file -->
    <!-- ######################################### --> 
    <script src="js/stickUp.min.js"></script>
    <!-- ######################################### -->

    <!-- ### IMPORTANT ### stickUp options in use -->
    <!-- ######################################## -->
    <script type="text/javascript">
      jQuery(function($) {
        $(document).ready( function() {
          $('.navbar-wrapper').stickUp({
                        parts: {
                          0:'home',
                          1:'work',
                          2: 'services',
                          3: 'about',
                          4: 'contact',
                         
                        },
                        itemClass: 'menuItem',
                        itemHover: 'active',
                        topMargin: 'auto'
                      });
        });
      });
    </script>
    <!-- ######################################## -->
<?php wp_footer (); ?>
</body>
</html>
