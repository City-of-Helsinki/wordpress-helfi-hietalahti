<?php
/*
Template Name: Etusivu
*/
?>
<?php get_header(); ?>
<style type="text/css">
h1.entry-title {
	display: none;
}
</style>



<div id="content"> <div id="rotator">Loading images...</div>
<div class="rotator_caption"></div>
<style type="text/css">
	#rotator {
		float: left;
		border: 0px solid #000000;
		width: 940px;
		margin-bottom: 25px;
		height: 350px;
	}
	div.rotator_caption {
		position: absolute;
		margin-top: 175px;
		margin-left: -75px;
		width: 150px;
		text-align: center;
		left: 50%;
		padding: 5px 10px;
		background: black;
		color: white;
		font-family: sans-serif;
		border-radius: 10px;
		display: none;
		z-index: 2;
	}
</style>
<noscript>
	<div id="rotator_nojs">
		<img id="cimy_img_id" src="http://www.hietalahdenkauppahalli.fi/wp/wp-content/Cimy_Header_Images/0/header1_keltainen.jpg" alt="" />
	</div>
</noscript>
  <div class="col2">
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
    
    <!--end class=col2 --></div>

<div class="col1">
<!--   <?php echo __("<!--:fi--><h2>Löydä perille</h2>  <p>
     ma-ti 8-18<br />
      ke-la 8-22<br />
      <br /><br />
      <!--su 10-16<br />
    </p><!--:-->-->

<!-- <!--:sv--><h2>Hitta fram</h2>  
     <p>mån–tis 8–18<br />
      ons-lör 8–22<br />
      <br /><br />
      <!--sön 10-16<br />
    </p><!--:-->
	
<!--:en--><h2>Getting there</h2>  
    <p>Mon–Tue 8–18<br />
      Wed-Sat 8–22<br />
      <br /><br />
      <!--Sun 10-16<br />
    </p><!--:-->"); ?>-->


 

<!-- <p><?php echo __("<!--:fi--><b>Halli on auki jouluna:</b><br/>
ma-ti 22.—23.12. klo 8–20<br/>
aattona 24.12. klo 8–12<br/>
ke 31.12. 8–18<br/>
ti 6.1. suljettu<!--:--><!--:sv-->
<b>Öppettider under julen</b><br/>
mån-tis 22.—23.12 kl. 8—20<br/>
ons. 24.12 kl. 8—12<br/>
ons. 31.12 kl. 8–18
<!--:--><!--:en-->
<b>Christmas opening hours</b><br/>
Mon-Tue 22—23 Dec from 8 to 20<br/>
Wed 24 Dec from 8 to 12<br/>
Wed 31 Dec from 8 to 18
<!--:-->"); ?><br/>-->


<!--<?php echo __("<!--:fi-->Katso paras reitti Hietalahteen<!--:--><!--:sv-->Hitta den bästa rutten till Sandviken i <!--:--><!--:en-->Check the best route to Hietalahti from the <!--:-->"); ?> <a href="http://www.reittiopas.fi/?to_in=L%C3%B6nnrotinkatu+34"><?php echo __("<!--:fi--> Reittioppaasta<!--:--><!--:sv-->Reseplaneraren<!--:--><!--:en-->Journey Planner<!--:-->"); ?></a><br />-->
<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fi&amp;geocode=&amp;q=L%C3%B6nnrotinkatu+34,+00180&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=71.474778,153.984375&amp;ie=UTF8&amp;hq=&amp;hnear=L%C3%B6nnrotinkatu+34,+Helsinki,+Suomi&amp;t=m&amp;ll=60.164273,24.938021&amp;spn=0.014946,0.054932&amp;z=14&amp;output=embed&amp;iwloc=near" height="185" width="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></p>

   <!--end class=col1 --></div>

<div class="col1">

 
    <!--end class=col1 --></div>
 
  <div class="col1r">
    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FHietalahdenkauppahalli%3Ffref%3Dts&amp;width=300&amp;height=480&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color=%23ededed&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:482px;" allowTransparency="true"></iframe>
    <!--end class=col1r --></div>
  
  <!--end id=content --></div>
<?php get_footer(); ?>