<?php
query_posts(array(
'post_type'=>'slider',  /* aikhane register post type je name label deya hoiche sei name bose not labels name  */
'posts_per_page'=>'3', /* koyta post dekhate cai set bole dite hobe 3 mane 3 ta post dekhate cai  */


));?>


<?php  while  (have_posts()): the_post(); ?>

/* Maje ar sob kichu dynamic korte hobe post type diye
example  */
<?php  the_post_thumbnail('image id bosbe');?>

<?php endwhile;?>

/* other Options */


<?php
global $post;

$args = array('posts_per_page'=>3,'post_type'=>'slider');
$myposts = get_posts($args);

foreach($myposts as $post): setup_datapost($post); ?>

<?php $slider_icon = get_post_meta($post->ID ,'slider_icon' true);?>






<?php endforeach; ?>