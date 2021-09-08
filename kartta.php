<?php
/*
Template Name: Kauppiaskartta
*/
?>

<?php get_header('kartta'); ?>


<div id="content" class="thumbcontent">

<div class="col2">


  <div id="blog">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="post">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry">
     <div class="map_image" style="background-image: url('http://www.hietalahdenkauppahalli.fi/wp/wp-content/uploads/2013/02/kartta.gif');">
	
	<a class="map_link" id="map_link_1" title="Fafa's" href="https://www.hietalahdenkauppahalli.fi/fafas/">Fafa's</a>
	<a class="map_link" id="map_link_2" title="Say Cheese" href="http://www.hietalahdenkauppahalli.fi/say-cheese/">Say Cheese</a>
	<a class="map_link" id="map_link_3" title="Kimchi Wagon" href="http://www.hietalahdenkauppahalli.fi/kimchi-wagon/">Kimchi Wagon</a>
	<a class="map_link" id="map_link_4" title="Mama’s Deli" href="http://www.hietalahdenkauppahalli.fi/mamas-deli/">Mama’s Deli</a>    
	<a class="map_link" id="map_link_5" title="Tokyo Street" href="http://www.hietalahdenkauppahalli.fi/mr-onigiri/">Tokyo Street</a>
	<a class="map_link" id="map_link_6" title="Super Bowl" href="">Super Bowl</a>
	<a class="map_link" id="map_link_7" title="Leikkikulma" href="">Leikkikulma</a>
	<a class="map_link" id="map_link_8" title="Lihakauppa Roslund" href="http://www.hietalahdenkauppahalli.fi/lihakauppa-roslund">Lihakauppa Roslund</a>
    <a class="map_link" id="map_link_9" title="Street Gastro" href="http://www.hietalahdenkauppahalli.fi/street-gastro/">Street Gasto</a>
        <a class="map_link" id="map_link_10" title="Petiscaria" href="https://www.hietalahdenkauppahalli.fi/petiscaria/">Petiscaria</a>
	<a class="map_link" id="map_link_11" title="Robert's Coffee" href="http://www.hietalahdenkauppahalli.fi/roberts-coffee-2/">Robert's Coffee</a>
	<a class="map_link" id="map_link_12" title="Trattoria Corretto" href="http://www.hietalahdenkauppahalli.fi/trattoria-corretto/">Trattoria Corretto</a>
	<a class="map_link" id="map_link_13" title="Trattoria Corretto" href="http://www.hietalahdenkauppahalli.fi/trattoria-corretto/">Trattoria Corretto</a>
	<a class="map_link" id="map_link_14" title="Soppakeittiö" href="http://www.hietalahdenkauppahalli.fi/soppakeittio/">Soppakeittiö</a>
	<a class="map_link" id="map_link_15" title="Fat Ramen" href="http://www.hietalahdenkauppahalli.fi/fat-ramen/">Fat Ramen</a>
	<a class="map_link" id="map_link_16" title="Le Marché" href="http://www.hietalahdenkauppahalli.fi/le-marche/">Le Marché</a>
	<a class="map_link" id="map_link_17" title="Mama's Pho" href="https://www.hietalahdenkauppahalli.fi/mamaspho/">Mama's Pho</a>
	<a class="map_link" id="map_link_18" title="Riian Silli" href="http://www.hietalahdenkauppahalli.fi/benkun-marjatalo/">Riian Silli</a>
    <a class="map_link" id="map_link_19" title="Trattoria Corretto" href="http://www.hietalahdenkauppahalli.fi/trattoria-corretto/">Trattoria Corretto</a>
	<a class="map_link" id="map_link_20" title="Pieni Astiakauppa" href="http://www.hietalahdenkauppahalli.fi/pieni-astiakauppa/">Pieni Astiakauppa</a>
	<a class="map_link" id="map_link_21" title="Tukkutorin asiakaspalvelu - suljettu" href="http://www.heltu.fi">Tukkutorin asiakaspalvelu - suljettu</a>
	<a class="map_link" id="map_link_22" title="Anna Koo" href="http://www.hietalahdenkauppahalli.fi/anna-koo/">Anna Koo</a>
        <a class="map_link" id="map_link_23" title="Kitty’s Milkshake Bar" href="http://www.hietalahdenkauppahalli.fi/kittys-diner/">Kitty’s Milkshake Bar</a>
</div> 
      
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