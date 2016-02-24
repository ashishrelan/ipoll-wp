<?php get_header(); ?>

<div id="content" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
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
<div style="background-color:#E6E7EA; max-width: 80%; border-top: #0099C2 4px solid; margin: 0 auto 2em auto; border-bottom: #0099C2 4px solid;">
       <p style="text-align: center;font-weight: 900;font-size: larger; font-family: 'Comfortaa', cursive;">We Like the Way You Think!</p>
       <p style="text-align: left; line-height: 1.7em; margin-left: 1em;">Get paid to tell us what you think about the products and services you use every day. By carefully providing answers to market research surveys, you are personally helping to shape the business strategies of executives around the world. In exchange for providing your opinion, iPoll will pay you a cash reward.</p><p style = "text-align: center;"><strong><a href="https://www.ipoll.com/registration_step1.php"><span style = "background-color:#0099C2; color: #fff; padding: .75em; font-family: 'Comfortaa', cursive;">Click Here to Get Started</span></a></strong></p>

    </div>
<div class="navigation group">
    <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
    <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
<div class="clear"></div>
</div>

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

</div> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>
