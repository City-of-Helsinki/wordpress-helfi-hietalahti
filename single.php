<?php get_header(); ?>
<div id="content">
<div class="col2">


  <div id="blog">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="post">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry">
      <div style="text-align:center;">
<?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>
</div>
        <?php the_content(); ?>
      
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>

  <!--end class=col2 --></div>


  <div class="col1">
   <h2><?php echo __("<!--:fi-->Aukioloajat<!--:--><!--:sv-->Öppettider<!--:--><!--:en-->Opening Hours<!--:-->"); ?></h2>
    <pre><?php echo get_post_meta($post->ID, 'Aukiolo', true); ?></pre>
   <!--end class=col1 --></div>
   
  <div class="col1">
    <h2><?php echo __("<!--:fi-->Yhteystiedot<!--:--><!--:sv-->Kontaktuppgifter<!--:--><!--:en-->Contact Information<!--:-->"); ?></h2>
       <p> <?php echo get_post_meta($post->ID, 'Puhelin', true); ?><br />
           <a href="http://<?php echo get_post_meta($post->ID, 'www', true); ?>"><?php echo get_post_meta($post->ID, 'www', true); ?></a><br />
		   <?php echo get_post_meta($post->ID, 'Sähköpostiosoite', true); ?></p>
    <!--end class=col1 --></div>
  
  <div class="col1r">
  <?php get_sidebar(); ?>
    <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> ', 'hietalahti' ) ); ?></span>
  <span class="nav-next"><?php next_post_link( '%link', __( ' <span class="meta-nav">&rarr;</span>', 'hietalahti' ) ); ?></span>

   <!--end class=col1r --></div>
  
  <!--end id=content --></div>
<?php get_footer(); ?>
