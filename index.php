<?php get_header(); ?>
<div id="main">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="post">
<ul>
<h1 font-weight="700"><?php echo get_the_title( $post_id ); ?></h1>
<div id ="underline">
<img src="http://tonypallone.com/wp-content/uploads/2017/02/tEpk4Eq-1024x6_waifu2x_art_noise1_scale_tta_1-1024x6.png" alt="Underline unselectable" />
</div>
<p><?php the_content(__('(more...)')); ?></p>
</ul>
</div>
 <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
