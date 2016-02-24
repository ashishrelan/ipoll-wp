<div id="sidebar">
<div style = "background-color:#E6E7EA; max-width: 200px; border-top: #0099C2 4px solid; margin: 0 0 2.5em 0; border-bottom: #0099C2 4px solid;">
       <p style = "text-align: center;font-weight: 900;font-size: larger; font-family: 'Comfortaa', cursive;">We Like the Way You Think!</p>
       <p style = "text-align: center; line-height: 1.7em;">Get paid to tell us what you think about the products and services you use every day<br/><br/><strong><a href = "https://www.ipoll.com/registration_step1.php" style = "font-family: 'Comfortaa', cursive;">Click Here to Get Started</a></strong></p>

    </div>
  <div id='shareLogos'>
    
    <p>Like and Follow us to stay up to date with iPoll’s latest news</p>
    <a href="https://twitter.com/ipollmobile" target="_blank" class="twitterShare"><img src="https://www.ipoll.com/blog/wp-content/uploads/2013/08/ipoll_tw.jpg" /><a/> <a href="http://www.facebook.com/ipollmobile" target="_blank" class="fbSahre"><img src="https://www.ipoll.com/blog/wp-content/uploads/2013/08/ipoll_fb.jpg" /><a/><br>
    <a href="https://www.ipoll.com/?mode=login">Click to login to iPoll</a> </div>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
  <div id="pages">
    <h3>Pages</h3>
    <ul>
      <?php wp_list_pages('title_li='); ?>
    </ul>
  </div>
  <h3>Search</h3>
  <p class="searchinfo">search site archives</p>
  <div id="search">
    <div id="search_area">
      <form id="searchform" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div>
          <input class="searchfield" type="text" name="s" id="s" value="" title="Enter keyword to search" />
          <input class="submit" type="submit" value="search" title="Click to search archives" />
        </div>
      </form>
    </div>
  </div>
  <h3>Blogroll</h3>
  <ul>
    <?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
  </ul>
  <h3>Archives</h3>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
  <h3>Categories</h3>
  <ul>
    <?php wp_list_cats(); ?>
  </ul>
  <h3>Meta</h3>
  <ul>
    <li>
      <?php // wp_register(); ?>
    </li>
    <li>
      <?php wp_loginout(); ?>
    </li>
    <li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">Site Feed</a></li>
    <li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>">Comments Feed</a></li>
    <li><a href="#content" title="back to top">Back to top</a></li>
    <?php wp_meta(); ?>
  </ul>
  <?php endif; ?>
  <?php if (function_exists('wp_theme_switcher')) { ?>
  <h3>Themes</h3>
  <div class="themes">
    <?php wp_theme_switcher(); ?>
  </div>
  <?php } ?>
</div>