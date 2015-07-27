  <footer id="footer" class="clearfix">
    <p class="alignleft">© 2015, JosephTaylor All Rights Reserved</p>
    <p class="alignright">Greater Boston Area <span class="padding">|</span> 617&nbsp;978.4057 <span class="padding">|</span> <a href="mailto:jt@colorwheelweb.com" title="Write Email">JT@ColorWheelWeb.com</a> </p>
  </footer>
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-easing-1.3.min.js" type="text/javascript"></script>
    <script src="js/retina.min.js" type="text/javascript"></script>
    <script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope2.min.js" type="text/javascript"></script>
    <script src="js/jquery.ba-bbq.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.load.js" type="text/javascript"></script>
    <script src="js/main2.min.js" type="text/javascript"></script>
    <script src="js/jquery.sliphover.min.js"></script>
    <script>
        jQuery.noConflict;
        
        jQuery(window).load(function() { 
        "use strict";
                    jQuery("#status").fadeOut(350); // will first fade out the loading animation
                    jQuery("#preloader").delay(350).fadeOut(200); // will fade out the white DIV that covers the website.
        });	
        
        jQuery(document).ready(function() {
            jQuery(".folioLink").click(function() {
                jQuery("html, body").animate({ scrollTop: 0 }, 0);     
            });
        });
        
//        jQuery(document).ready(function() {
//            jQuery(".back-button").
//        });
    </script>
  </body>
</html>