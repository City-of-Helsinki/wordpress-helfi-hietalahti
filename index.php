<?php get_header(); ?>
 <div class="col1">
    <div id="blog">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        <div class="post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
         
            <div class="entry">   
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
	
 
            </div>
        </div>
<?php endwhile; ?>
     
         
        <?php endif; ?>
    </div>
      <!--end of .col1 --></div>
<?php get_sidebar(); ?>   
<?php get_footer(); ?>