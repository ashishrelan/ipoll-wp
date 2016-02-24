<?php get_header(); ?>
    <!-- IPOLL BANNER -->
    <div class="adContainer">
        <div class="mainAd imgA">
            <a class="btnIpoll ir" href="http://www.ipoll.com" target="_blank" onclick="_gaq.push(['_trackEvent', 'iPoll', 'Member Header iPoll Banner']);">iPoll</a>
            <a class="btnApple ir" href="http://itunes.apple.com/us/app/ipoll/id422370120?mt=8" target="_blank" onclick="_gaq.push(['_trackEvent', 'iPoll', 'Member Header iPoll Banner iOS']);">App Store</a>
            <a class="btnGoogle ir" href="https://play.google.com/store/apps/details?id=com.usamp.mobile&hl=en" target="_blank" onclick="_gaq.push(['_trackEvent', 'iPoll', 'Member Header iPoll Banner Android']);">Google Play</a>
        </div>
    </div>
<div id="content" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="commentbox"><p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('Post','1','%'); ?></a></div>
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<div class="main">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>

<div class="meta group">
<div class="signature">
    <p>Written by <?php the_author() ?> <span class="edit"><?php edit_post_link('Edit'); ?></span></p>
    <p><?php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); ?></p>
</div>	
<div class="tags">
    <p>Posted in <?php the_category(',') ?></p>
    <?php if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>
</div>
<div class="clear"></div>
</div>

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

<div class="navigation group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="clear"></div>
</div>

</div> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>