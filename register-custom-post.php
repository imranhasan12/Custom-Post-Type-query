<?php








// Most Importance Custom Post Type function

function slider_custom_post_type(){
	register_post_type('slider',array(
	  'public'=>true,
	   'label'=>'slider',
	     'labels'=>array(
		 'name'=>'sliders',
		  'singular_name'=>'slider',
		  'add_new'=>'Add New Sliders',
		 ),
	    'supports'=>array('title','editor','thumbnail','excerpt','custom-fields')
	
	
	));
}
add_action('init','slider_custom_post_type');
