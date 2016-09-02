<?php
/**
 * Template Name: task
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			
			<html>
<head><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/my.css" type="text/css" /></head>
			<body>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--<script type="text/javascript" src="/js/myscript.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/myscript.js"></script>



	<!--<?php echo do_shortcode('[wpb_childpages]'); ?>-->
<?php	

$post; 

if ( is_page() && $post->post_parent )

	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {
$count =1;
if($count == 1 )
{

$string = '<div id="tabs-container"><ul class="tabs-menu"><li class="current">' . $childpages . '</li></ul></div>';

}
else
{
$string = '<div id="tabs-container"><ul class="tabs-menu"><li>' . $childpages . '</li></ul></div>';
}
	$count++;
	}

	

echo "$string";

    	echo '<div id="tab-'.$count.'" class="tab-content">'; 
 		echo '</div>';
 		$count++;
    


?>

</body>

</html>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
 
