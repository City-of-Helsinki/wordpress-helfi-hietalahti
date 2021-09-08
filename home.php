<?php get_header(); ?>


<div id="content">
<img class="rotator" src="<?php bloginfo('template_directory'); ?>/img/header1_keltainen.jpg" width="940" height="348" alt="header" />
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
  
  <div class="col1">
  <h2>Löydä perille</h2>
  <p>Kauppahalli on avoinna 11.2. alkaen seuraavasti:</p>
  <p>ma-pe 8-18 <br />
    la 8-16<br />
    su suljettu</p>
  <p><strong>Lauantaina 16.2. halli on poikkeuksellisesti auki klo 12-18.</strong></p>
  <!--end class=col1 --></div>
<div class="col1">
  <h2>Tule muuttamaan kanssamme!</h2>
  <p>Juhlistamme Hietalahteen muuttoa kulkueella, joka lähtee lauantaina 16.2. Vanhalta Kauppahallilta klo 11 ja päättyy Hietalahden torille.<br /></p>
  <p>Matkan jälkeen voi nauttia kahvit uusitussa Hietalahden kauppahallissa, tehdä ostoksia ja katsoa, mihin tutut luottokauppiaat ovat sijoittuneet. Lämpimästi tervetuloa ja lämmintä päälle!</p>
<!--end class=col1 --></div>
 
  <div class="col1r">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FHietalahdenkauppahalli%3Ffref%3Dts&amp;width=300&amp;height=395&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color=%23ededed&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:395px;" allowTransparency="true"></iframe>
  <!--end class=col1r --></div>  



<!--end id=content --></div>




<?php get_footer(); ?>