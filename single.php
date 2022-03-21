<?php
get_header();
the_post();
?>
<h1>
<?php 
 the_title(); 
?>
</h1>
<?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
?>
<img src="<?php echo $imagepath[0] ?>" alt="unable to load image" width="100%"/>
<?php echo get_the_date(); ?>
<p>By:-- <?php the_author(); ?></p>
 <?php the_content(); ?>
 <?php comment_form(); ?>
<?php

get_footer();
?>