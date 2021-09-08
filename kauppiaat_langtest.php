<?php
/*
Template Name: langtesti
*/
?>
<?php get_header(lang); ?>

<div id="content" class="thumbcontent">
  <div id="blog">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="post">
      <h1 class="entry-title">
        <?php the_title(); ?>
      </h1>
      <div class="entry">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  
  <ul class="kauppiaslista">
    <?php echo recentPosts(); ?>
  </ul>
  
  <!--end id=content --></div>
<?php get_footer(); ?>
