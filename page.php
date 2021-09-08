<?php get_header(); ?>


<div id="content">

<div class="col2">


  <div id="blog">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="post">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry">
        <?php the_content(); ?>
      
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>

  <!--end class=col2 --></div>
  
   <div class="col1r">
  <?php get_sidebar(); ?>

   <!--end class=col1r --></div>


<!--end id=content --></div>




<?php get_footer(); ?>