
 <footer>
 	<div class="container">
      <div class="row footer">
        <div class="col-md-6">
          <h2 class="ftr-cta"><?php the_field('call_to_action_text'); ?></h2>
          <h2 class="ftr-cta"><?php the_field('call_to_action_text_2'); ?></h2>
        </div>
        <div class="col-md-6 col-xs-12 ftr-col text-center">
          <button class="ftr-btn">VOLUNTEER</button><span class="ftr-p">OR</span><button class="ftr-btn">DONATE</button>
        </div>
      </div>
    </div>

    <div class="team-home">
      <div class="container">
        <div class="row ftr-nav">
          <div class="col-md-4 col-sm-6 col-xs-12 ftr-bar">
            <h2 class="ftr-txt-head">SUBSCRIBE</h2>
            <input type="" placeholder="Name">
            <input type="" placeholder="Email"><br>
            <button class="ftr-btn">SUBSCRIBE</button>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 ftr-bar">
            <h2 class="ftr-txt-head">QUICK LINKS</h2>
            <nav class="footer-nav nav-col-btm">

              <?php 

              $args = array(
                'theme_location' => 'Secondary',
                'menu_class' => 'menu_ftr',
              )

              ?>

              <?php wp_nav_menu( $args );?>
            </nav>
          </div>
          <div class="col-md-4 col-xs-12 ftr-bar">
            <h2 class="ftr-txt-head">CONTACT</h2>
            <span class="quick-links">
              <p><strong>EMAIL:</strong> <?php the_field('email_address') ?></p>
              <p><strong>PHONE:</strong> <?php the_field('phone_number'); ?></p>

              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <a href="#"><i class="fas fa-search ftr-icons"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <a href="#"><i class="fab fa-instagram ftr-icons"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <a href="#"><i class="fab fa-twitter-square ftr-icons"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <a href="#"><i class="fab fa-facebook-square ftr-icons"></i></a>
                </div>                
              </div>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="container ftr-info">
        <p class="left text-center">Copyright 2018 <i class="far fa-copyright"></i> About A Chance</p>
        <p class="right text-center">Website design and development by <strong>BLUEPRINT</strong></p>
      </div>
</footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->



<?php wp_footer();?>
</body>
</html>