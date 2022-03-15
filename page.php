<?php
get_header();
// it was used in older versions
the_post();
?>

<div class="about-page" style="border:2px solid red ; height:auto; width:100%;" >
<h1><?php the_title(); ?> :</h1>
<?php the_post_thumbnail(array('300,300')); ?>
<?php the_content(); ?>




</div>


<?php
get_footer();
?>