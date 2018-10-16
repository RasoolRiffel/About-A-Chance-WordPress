
 <footer>
 	<div class="container">
      <div class="row footer">
        <div class="col-md-6">
          <h2 class="ftr-cta"><?php the_field('call_to_action_text'); ?></h2>
          <h2 class="ftr-cta"><?php the_field('call_to_action_text_2'); ?></h2>
        </div>
        <div class="col-md-6 col-xs-12 ftr-col text-center">
          <a href="<?php the_field('volunteer_button_link'); ?>">
            <button class="ftr-btn">
              <?php the_field('volunteer_button_text'); ?>              
            </button>
          </a>
          <span class="ftr-p">
            OR
          </span>
          <a href="<?php the_field('donate_button_link'); ?>">
            <button class="ftr-btn">
              <?php the_field('donate_button_text'); ?>                
              </button>
            </a>
        </div>
      </div>
    </div>

    <div class="team-home">
      <div class="container">
        <div class="row ftr-nav">
          <div class="col-md-4 col-sm-6 col-xs-12 ftr-bar">
          <!-- Begin Mailchimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="https://bquest.us19.list-manage.com/subscribe/post?u=9f35c6b2151fe8273d1925ca0&amp;id=31ab9738db" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                  <h2 class="ftr-txt-head">SUBSCRIBE</h2>
                <div class="mc-field-group ftr-bar">
                  <input type="text" value="" placeholder="Full Name" name="FNAME" class="" id="mce-FNAME">
                </div>
                <div class="mc-field-group ftr-bar">
                  <input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="clear ftr-bar"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button ftr-btn">SUBSCRIBE</button> </div>
              </div>
            </form>
          </div>
          <!--End mc_embed_signup-->
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
                <div class="col-md-3 col-md-offset-3  col-sm-6 col-xs-6">
                  <a href="#" onclick="toggle_visibility('foo');"><i class="fas fa-search ftr-icons"></i></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <a href="<?php the_field('social_media_links_-_facebook'); ?>"><i class="fab fa-facebook-square ftr-icons"></i></a>
                </div>                
              </div>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="container ftr-info">
        <p class="left text-center">Copyright 2018 <i class="far fa-copyright"></i><strong> About A Chance</strong></p>
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