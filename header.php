<?php
/**
 * Estatein Header
 *
 * @package Estatein
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!-- =====================================================
     Announcement Bar
===================================================== -->

<div class="announcement-bar" id="announcement-bar" >
    <div class="announcement-bar__content">
        <span class="announcement-bar__sparkle" aria-hidden="true">
            ✨
        </span>
        <span class="announcement-bar__text">
            Discover Your Dream Property with Estatein
        </span>
        <a
            href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"
            class="announcement-bar__link"
        >
            Learn More
        </a>
    </div>

    <button
        type="button"
        class="announcement-bar__close"
        aria-label="Close announcement"
        aria-controls="announcement-bar"
    >
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<!-- =====================================================
     Site Header
===================================================== -->

<header class="site-header" id="site-header" >
    <div class="container site-header__inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?>" >

            <?php $logo_path = get_template_directory() . '/assets/images/Logo.png'; ?>
            <?php if ( file_exists( $logo_path ) ) : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" >
            <?php else : ?>
                <span class="site-logo__mark" aria-hidden="true"></span>
                <span class="site-logo__text">
                    Estatein
                </span>
            <?php endif; ?>
        </a>

        <!-- Desktop Navigation -->

        <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'estatein' ); ?>">

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'primary-menu',
                    'menu_id'        => 'primary-menu',
                    'fallback_cb'    => false,
                    'depth'          => 2,
                )
            );
            ?>

        </nav>

        <!-- Desktop Contact -->

        <div class="header-actions">
            <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="nav-link header-button <?php echo is_page( 'contact-us' ) ? 'is-active' : ''; ?>" >
                Contact Us
            </a>
        </div>

        <!-- Mobile Burger -->
        <button type="button" class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Open menu" aria-controls="mobile-menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>


    <!-- =================================================
        Mobile Menu
    ================================================= -->

    <nav class="mobile-menu" id="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'estatein' ); ?>">
        <div class="mobile-menu__inner">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'mobile-primary-menu',
                    'menu_id'        => 'mobile-primary-menu',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                )
            );
            ?>

            <!-- Contact Us -->
            <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="mobile-menu__contact">
                Contact Us
            </a>
        </div>
    </nav>

</header>