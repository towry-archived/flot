<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package flot
 */

?>

<div id="secondary" class="widget-area" role="complementary">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="sidebar-one" class="widgets-container"> 
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php endif ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="sidebar-two" class="widgets-container">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
<?php endif ?>

<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="sidebar-three" class="widgets-container">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>
<?php endif ?>
</div><!-- #secondary -->
