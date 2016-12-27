<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/

	require get_template_directory() . '/functions/cleanup.php';
	require get_template_directory() . '/functions/setup.php';
	require get_template_directory() . '/functions/enqueues.php';
	require get_template_directory() . '/functions/navbar.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search-widget.php';
	require get_template_directory() . '/functions/index-pagination.php';
	require get_template_directory() . '/functions/split-post-pagination.php';
	require get_template_directory() . '/functions/feedback.php';

  $args = array(
      'flex-width'    => true,
      'width'         => 80,
      'flex-height'   => true,
      'height'        => 80,
      'default-image' => get_template_directory_uri() . '/theme/images/lh_logo_large.png',
  );
  add_theme_support( 'custom-header', $args );
