<?php
/*
Template Name: Front
*/

wp_head();

wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu-class' ) );

if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}


?>

<div class="front-background" style="background-image: url(' <?php background_image(); ?> ')">;


<?php

  $content = get_page_content();

  foreach($content as $row) {

    $image = $image = wp_get_attachment_url( get_post_thumbnail_id($row->ID));
    //$image = $image = wp_get_attachment_url( get_background_image());
    $output .= '<div class="front-content" style="background-image: url(' .$image. ')">';
    $output .= '<h1 class="front-title">' .$row->post_title. '</h1>';
    $output .= '<p class="front-text">' .$row->post_content. '</p></div>';

  }

  echo $output;


get_footer();

?>

</div>
