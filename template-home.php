<?php 
// Template Name:Home
get_header();
 
?>
<div class="blogs">
<?php
$wplunch=array(
  'post_type'=>'lunch',
  'post_status'=>'publish'
);
$lunchtime=new Wp_Query($wplunch);
while($lunchtime->have_posts())  {
  $lunchtime->the_post();
  $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
?>

    
  <div class="item">
    <img src="<?php echo $imagepath[0] ?>"/>
    <h1><?php the_title() ?></h1>
  </div>  
  <?php } ?>
    </div>
<?php 
$lunch=get_terms(
  ['taxonomy'=>'lunch','hide_empty'=>false,'orderby'=>'name','order'=>'DESC']
  );
 
foreach ($lunch as $lunchData){
  $meta_image = get_wp_term_image($lunchData->term_id);
?>
<div class="icondigi">
  <?php if($meta_image!="") { ?>
  <img src="<?php print_r($meta_image); ?>"/>
  <?php } ?><a href="#"><h3><?php echo $lunchData->name; ?></h3></a>

</div>
<?php } ?>


<?php get_footer() ?>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>