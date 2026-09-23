<?php
/**
 * Estatein Contact Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main contact-page">

    <!-- =====================================================
         CONTACT HERO
    ====================================================== -->

    <section class="contact-intro">

        <div class="container">

            <div class="contact-intro__content">

                <h1>Get in Touch with Estatein</h1>

                <p>
                    Welcome to Estatein's Contact Us page. We're here to assist
                    you with any inquiries, requests, or feedback you may have.
                    Whether you're looking to buy or sell a property, explore
                    investment opportunities, or simply want to connect, we're
                    just a message away. Reach out to us and let's start a
                    conversation.
                </p>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CONTACT INFORMATION
    ====================================================== -->

    <!-- Contact Information -->
    <section class="contact-features">

        <!-- Email -->
        <article class="contact-feature-card">

            <a
                href="mailto:info@estatein.com"
                class="contact-feature-card__arrow"
                aria-label="Email Estatein"
            >
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/arrow-up-right.png'
                    ); ?>"
                    alt=""
                >
            </a>

            <div class="contact-feature-card__icon">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/mail-icon.png'
                    ); ?>"
                    alt=""
                >
            </div>

            <a
                href="mailto:info@estatein.com"
                class="contact-feature-card__link"
            >
                info@estatein.com
            </a>

        </article>


        <!-- Phone -->
        <article class="contact-feature-card">

            <a
                href="tel:+11234567890"
                class="contact-feature-card__arrow"
                aria-label="Call Estatein"
            >
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/arrow-up-right.png'
                    ); ?>"
                    alt=""
                >
            </a>

            <div class="contact-feature-card__icon">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/phone-icon.png'
                    ); ?>"
                    alt=""
                >
            </div>

            <a
                href="tel:+11234567890"
                class="contact-feature-card__link"
            >
                +1 (123) 456-7890
            </a>

        </article>


        <!-- Location -->
        <article class="contact-feature-card">

            <a
                href="#offices"
                class="contact-feature-card__arrow"
                aria-label="View Main Headquarters"
            >
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/arrow-up-right.png'
                    ); ?>"
                    alt=""
                >
            </a>

            <div class="contact-feature-card__icon">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/location-icon.png'
                    ); ?>"
                    alt=""
                >
            </div>

            <a
                href="#offices"
                class="contact-feature-card__link"
            >
                Main Headquarters
            </a>

        </article>


        <!-- Social -->
        <article class="contact-feature-card">

            <a
                href="#"
                class="contact-feature-card__arrow"
                aria-label="View social media"
            >
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/arrow-up-right.png'
                    ); ?>"
                    alt=""
                >
            </a>

            <div class="contact-feature-card__icon">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() . '/assets/images/social-icon.png'
                    ); ?>"
                    alt=""
                >
            </div>

            <div class="contact-feature-card__social">

                <a href="#" aria-label="Instagram">
                    Instagram
                </a>

                <a href="#" aria-label="LinkedIn">
                    LinkedIn
                </a>

                <a href="#" aria-label="Facebook">
                    Facebook
                </a>

            </div>

        </article>

    </section>


    <!-- =====================================================
         CONTACT FORM
    ====================================================== -->

    <section class="contact-form-section">

        <div class="container">

            <div class="section-heading contact-section-heading">

                <div class="section-decoration">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Let's Connect</h2>

                <p>
                    Estatein is here to assist with your real estate needs.
                    Feel free to reach out to us with your questions and
                    inquiries. We're committed to providing you with the
                    support you need.
                </p>

            </div>


            <form
                class="contact-form"
                action="#"
                method="post"
            >

                <div class="contact-form__grid">

                    <!-- First Name -->

                    <div class="form-field">

                        <label for="first-name">
                            First Name
                        </label>

                        <input
                            type="text"
                            id="first-name"
                            name="first_name"
                            placeholder="Enter First Name"
                        >

                    </div>


                    <!-- Last Name -->

                    <div class="form-field">

                        <label for="last-name">
                            Last Name
                        </label>

                        <input
                            type="text"
                            id="last-name"
                            name="last_name"
                            placeholder="Enter Last Name"
                        >

                    </div>


                    <!-- Email -->

                    <div class="form-field">

                        <label for="contact-email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="contact-email"
                            name="email"
                            placeholder="Enter your Email"
                        >

                    </div>


                    <!-- Phone -->

                    <div class="form-field">

                        <label for="phone">
                            Phone
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Enter Phone Number"
                        >

                    </div>


                    <!-- Inquiry Type -->

                    <div class="form-field">

                        <label for="inquiry-type">
                            Inquiry Type
                        </label>

                        <select
                            id="inquiry-type"
                            name="inquiry_type"
                        >

                            <option value="">
                                Select Inquiry Type
                            </option>

                            <option value="buying">
                                Buying a Property
                            </option>

                            <option value="selling">
                                Selling a Property
                            </option>

                            <option value="investment">
                                Investment
                            </option>

                            <option value="general">
                                General Inquiry
                            </option>

                        </select>

                    </div>


                    <!-- How Did You Hear -->

                    <div class="form-field">

                        <label for="heard-about">
                            How Did You Hear About Us?
                        </label>

                        <select
                            id="heard-about"
                            name="heard_about"
                        >

                            <option value="">
                                Select
                            </option>

                            <option value="google">
                                Google
                            </option>

                            <option value="social">
                                Social Media
                            </option>

                            <option value="referral">
                                Referral
                            </option>

                            <option value="other">
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- Message -->

                    <div class="form-field form-field--full">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Enter your Message here"
                        ></textarea>

                    </div>

                </div>


                <div class="contact-form__footer">

                    <label class="contact-form__agreement">

                        <input
                            type="checkbox"
                            name="agreement"
                        >

                        <span>
                            I agree with
                            <a href="#">Terms of Use</a>
                            and
                            <a href="#">Privacy Policy</a>
                        </span>

                    </label>


                    <button
                        type="submit"
                        class="button button--primary"
                    >
                        Send Your Message
                    </button>

                </div>

            </form>

        </div>

    </section>


    <!-- =====================================================
         OFFICE LOCATIONS
    ====================================================== -->

    <section class="office-section" id="offices">

        <div class="container">

            <div class="section-heading office-heading">

                <div class="section-decoration">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Discover Our Office Locations</h2>

                <p>
                    Whether you're looking to meet our team, discuss real estate
                    opportunities, or simply drop by for a chat, we have offices
                    conveniently located to serve your needs.
                </p>

            </div>


            <div class="office-filters">

                <button
                    type="button"
                    class="office-filter is-active"
                    data-office-filter="all"
                >
                    All
                </button>

                <button
                    type="button"
                    class="office-filter"
                    data-office-filter="regional"
                >
                    Regional
                </button>

                <button
                    type="button"
                    class="office-filter"
                    data-office-filter="international"
                >
                    International
                </button>

            </div>


            <div class="office-grid">

                <!-- Main Headquarters -->

                <article
                    class="office-card"
                    data-office-type="regional"
                >

                    <span class="office-card__type">
                        Main Headquarters
                    </span>

                    <h3>
                        123 Estatein Plaza, City Center, Metropolis
                    </h3>

                    <p>
                        Our main headquarters serves as the heart of Estatein.
                        Located in the bustling city center, this is where our
                        team of experts operates.
                    </p>


                    <div class="office-card__details">

                        <span>
                            <i class="fa-regular fa-envelope"
                               aria-hidden="true"></i>
                            info@estatein.com
                        </span>

                        <span>
                            <i class="fa-solid fa-phone"
                               aria-hidden="true"></i>
                            +1 (123) 456-7890
                        </span>

                        <span>
                            <i class="fa-solid fa-location-dot"
                               aria-hidden="true"></i>
                            Metropolis
                        </span>

                    </div>


                    <a
                        href="#"
                        class="button button--primary"
                    >
                        Get Direction
                    </a>

                </article>


                <!-- Regional Office -->

                <article
                    class="office-card"
                    data-office-type="regional"
                >

                    <span class="office-card__type">
                        Regional Offices
                    </span>

                    <h3>
                        456 Urban Avenue, Downtown District, Metropolis
                    </h3>

                    <p>
                        Estatein provides services to multiple regions, each
                        with its own dynamic real estate landscape. Discover
                        our regional offices staffed by local experts.
                    </p>


                    <div class="office-card__details">

                        <span>
                            <i class="fa-regular fa-envelope"
                               aria-hidden="true"></i>
                            info@estatein.com
                        </span>

                        <span>
                            <i class="fa-solid fa-phone"
                               aria-hidden="true"></i>
                            +1 (123) 456-7890
                        </span>

                        <span>
                            <i class="fa-solid fa-location-dot"
                               aria-hidden="true"></i>
                            Metropolis
                        </span>

                    </div>


                    <a
                        href="#"
                        class="button button--primary"
                    >
                        Get Direction
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================================
         EXPLORE ESTATEIN
    ====================================================== -->

    <!-- Explore Estatein's World -->
<section class="explore-section">

    <div class="container">
        <div class="explore-section__inner">

            <!-- Gallery -->
            <div class="explore-gallery">

                <div class="explore-gallery__item explore-gallery__item--office">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/explore-office.png'
                        ); ?>"
                        alt="Estatein office"
                    >
                </div>

                <div class="explore-gallery__item explore-gallery__item--team">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/explore-team.png'
                        ); ?>"
                        alt="Estatein team"
                    >
                </div>

                <div class="explore-gallery__item explore-gallery__item--meeting">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/explore-meeting.png'
                        ); ?>"
                        alt="Estatein team meeting"
                    >
                </div>

                <div class="explore-gallery__item explore-gallery__item--team-2">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/explore-team-2.png'
                        ); ?>"
                        alt="Estatein team"
                    >
                </div>

                <div class="explore-gallery__item explore-gallery__item--team-3">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/explore-team-3.png'
                        ); ?>"
                        alt="Estatein team"
                    >
                </div>

                <div class="explore-gallery__item explore-gallery__item--handshake">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/explore-handshake.png'
                        ); ?>"
                        alt="Estatein client meeting"
                    >
                </div>

            </div>


            <!-- Content -->
            <div class="explore-content">

                <div class="section-decoration">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Explore Estatein's World</h2>

                <p>
                    Step inside the world of Estatein, where professionalism meets
                    warmth, and expertise meets passion. Our gallery offers a glimpse
                    into our team and workspaces, giving you a taste of what sets us apart.
                </p>

            </div>

        </div>
    </div>

</section>

</main>

<?php get_footer(); ?>