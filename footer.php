<?php
/**
 * The footer for Estatein.
 *
 * @package Estatein
 */
?>
<!-- =====================================================
        CTA
====================================================== -->

<section class="cta-section">

    <div class="cta-background" aria-hidden="true">
        <span class="cta-background__left"></span>
        <span class="cta-background__right"></span>
    </div>

    <div class="container">
        <div class="cta-content">
            <div class="cta-copy">
                <h2> Start Your Real Estate Journey Today</h2>

                <p>
                    Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way.
                </p>
            </div>

            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="button button--primary">
                Explore Properties
            </a>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Estatein home">
                    <?php
                    $logo_path = get_template_directory() . '/assets/images/Logo.png';

                    if ( file_exists( $logo_path ) ) :
                    ?>
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Logo.png' ); ?>"
                            alt="Estatein"
                        >
                    <?php else : ?>
                        <span class="site-logo__fallback">
                            <span class="site-logo__mark" aria-hidden="true"></span>
                            <span>Estatein</span>
                        </span>
                    <?php endif; ?>
                </a>

                <form class="footer-email-form" action="#" method="post">
                    <div class="footer-email-input">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/email-icon.svg' ); ?>" alt="" >

                        <input type="email" name="email" placeholder="Enter Your Email" aria-label="Email address">

                        <button type="submit" aria-label="Subscribe">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/send-icon.svg' ); ?>" alt="">
                        </button>
                    </div>
                </form>
            </div>

            <div class="footer-column">
                <h3>Home</h3>
                <a href="#">Hero Section</a>
                <a href="#">Properties</a>
                <a href="#">Testimonials</a>
                <a href="#">FAQs</a>
            </div>

            <div class="footer-column">
                <h3>About Us</h3>
                <a href="#">Our Story</a>
                <a href="#">Our Works</a>
                <a href="#">How It Works</a>
                <a href="#">Our Team</a>
                <a href="#">Our Clients</a>
            </div>

            <div class="footer-column">
                <h3>Properties</h3>
                <a href="#">Portfolio</a>
                <a href="#">Categories</a>
            </div>

            <div class="footer-column">
                <h3>Services</h3>
                <a href="#">Valuation Mastery</a>
                <a href="#">Strategic Marketing</a>
                <a href="#">Negotiation Wizardry</a>
                <a href="#">Closing Success</a>
                <a href="#">Property Management</a>
            </div>

            <div class="footer-column">
                <h3>Contact Us</h3>
                <a href="#">Contact Form</a>
                <a href="#">Our Offices</a>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Estatein. All Rights Reserved.</p>
                <a href="#">Terms &amp; Conditions</a>

                <div class="footer-socials">
                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                    </a>

                    <a href="#" aria-label="Twitter">
                        <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="#" aria-label="YouTube">
                        <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
