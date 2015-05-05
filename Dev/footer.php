    <!-- Footer -->
    <div id="Foot" class="group">
      <div class="foot-top">
        <div class="foot-page-links">
          <ul>
            <li><a href="index.php">Home</a></li>  
            <li><a href="work.php">Work</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="info.php">Info</a></li>
          </ul>
        </div>
        <div class="foot-email">
          <form>
            <field>your@email.com</field>
            <button>Sign Up</button>
          </form>
        </div>
      </div>
      <div class="foot-bottom">
        <div class="foot-social">
          <ul>
            <li><a target="_blank" href="https://github.com/colorcraft">GitHub</a></li>
            <li><a target="_blank" href="http://www.linkedin.com/pub/joseph-taylor/53/165/673/ ">LinkdIn</a></li>
            <li><a target="_blank"  href="http://instagram.com/c0lorcraft">Instagram</a></li>
          </ul>
          <p><a href=""></a></p>
        </div>
        <div class="foot-rights">
          <h4 class="foot-copyright">C. 2014 Black-Moods.com</h4>
          <ul>
            <li><a href="privacy.php">Privacy</a></li>
            <li><a href="privacy.php">Terms &amp; Conditions</a></li>
            <li><a href="">Wholesale</a></li>
          </ul>
        </div>
      </div>
    </div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
        var fActive = '';
 
        function filterGroup(group){
          if(fActive != group){
            $('.feedFilter').filter('.'+group).slideDown();
            $('.feedFilter').filter(':not(.'+group+')').slideUp();
            fActive = group;
          }
        }

        $('.f-group-1').click(function(){ 
            filterGroup('group-1'); 
        });
        $('.f-group-2').click(function(){ 
            filterGroup('group-2'); 
        });
        $('.f-group-3').click(function(){ 
            filterGroup('group-3'); 
        });
        $('.all-Butn').click(function(){
          $('.feedFilter').slideDown();
          fActive = 'all';
        });
</script>
</body>
</html>