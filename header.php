<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body <?php body_class();?>);">
 <?php wp_body_open(); ?>
    <header class="header">
        <div class="logo">
            <?php   
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
                if ( has_custom_logo() ) {
                    echo '<a class="homeLogo" href="/"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
        </div>
        <div class="search">
            <?php get_search_form(); ?>
        </div>
                <?php
wp_nav_menu( array( 
    'theme_location' => 'header_menu', 
    'container'       => 'nav',
    'container_class' => 'headerMenu' ) ); 
    ?>

    </header>
    <div class="wrapper">