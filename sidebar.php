
<?php if ( has_post_thumbnail( $post_id ) ) {
    the_post_thumbnail( 'sidebar_post_thumbnail' );
} else {

} ?>
        
<?php echo sharing_display(); ?>


