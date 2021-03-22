<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ){ ?>
	<link rel="shortcut icon" href="<?php echo esc_url($site_favicon);?>" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url($site_favicon);?>" type="image/x-icon">
<?php } ?>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?php bloginfo('name') ?></title>

<?php wp_head(); ?>
</head>
<body id="bg" <?php body_class(); ?> >
	<?php 
	if(is_front_page()){
		get_template_part('template-parts/header/header-1');
	}



	wp_body_open(); 

	?>
	


