<?php
/**
 * Estatein Front Page
 *
 * @package Estatein
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero -->
    <?php
    $home_banner = get_field( 'home_banner' );
    $hero_stats  = get_field( 'hero_stats' );
    ?>

    <section class="hero">
        <div class="hero__left">
            <div class="hero__content">

                <?php if ( ! empty( $home_banner['hero_title'] ) ) : ?>
                    <h1>
                        <?php echo esc_html( $home_banner['hero_title'] ); ?>
                    </h1>
                <?php endif; ?>


                <?php if ( ! empty( $home_banner['hero_description'] ) ) : ?>
                    <p class="hero__description">
                        <?php echo esc_html( $home_banner['hero_description'] ); ?>
                    </p>
                <?php endif; ?>


                <div class="hero__actions">

                    <?php if ( ! empty( $home_banner['hero_secondary_button_text'] ) && ! empty( $home_banner['hero_secondary_button_url'] ) ) : ?>

                        <a
                            href="<?php echo esc_html( $home_banner['hero_secondary_button_url'] ); ?>"
                            class="button button--secondary"
                        >
                            <?php echo esc_html( $home_banner['hero_secondary_button_text'] ); ?>
                        </a>

                    <?php endif; ?>


                    <?php if ( ! empty( $home_banner['hero_primary_button_text'] ) && ! empty( $home_banner['hero_primary_button_url'] ) ) : ?>

                        <a
                            href="<?php echo esc_html( $home_banner['hero_primary_button_url'] ); ?>"
                            class="button button--primary"
                        >
                            <?php echo esc_html( $home_banner['hero_primary_button_text'] ); ?>
                        </a>

                    <?php endif; ?>

                </div>


                <!-- Hero Stats -->
                <div class="hero__stats">

                    <div class="hero__stat">
                        <strong>
                            <?php echo esc_html( $hero_stats['hero_stat_1_number'] ?? '' ); ?>
                        </strong>

                        <span>
                            <?php echo esc_html( $hero_stats['hero_stat_1_label'] ?? '' ); ?>
                        </span>
                    </div>


                    <div class="hero__stat">
                        <strong>
                            <?php echo esc_html( $hero_stats['hero_stat_2_number'] ?? '' ); ?>
                        </strong>

                        <span>
                            <?php echo esc_html( $hero_stats['hero_stat_2_label'] ?? '' ); ?>
                        </span>
                    </div>


                    <div class="hero__stat">
                        <strong>
                            <?php echo esc_html( $hero_stats['hero_stat_3_number'] ?? '' ); ?>
                        </strong>

                        <span>
                            <?php echo esc_html( $hero_stats['hero_stat_3_label'] ?? '' ); ?>
                        </span>
                    </div>

                </div>

            </div>
        </div>


        <div class="hero__right">

            <?php if ( ! empty( $home_banner['hero_image'] ) ) : ?>

                <img
                    src="<?php echo esc_url( $home_banner['hero_image']['url'] ); ?>"
                    alt="<?php echo esc_attr( $home_banner['hero_image']['alt'] ?: $home_banner['hero_title'] ); ?>"
                >

            <?php endif; ?>


            <?php if ( ! empty( $home_banner['hero_circle_image'] ) ) : ?>

                <div class="hero__circle">

                    <img
                        src="<?php echo esc_url( $home_banner['hero_circle_image']['url'] ); ?>"
                        alt=""
                    >

                </div>

            <?php endif; ?>

        </div>

    </section>

    <!-- Features -->
    <?php
    $feature_items = array(
        'feature_1',
        'feature_2',
        'feature_3',
        'feature_4',
    );
    ?>

    <section class="features">

        <?php foreach ( $feature_items as $feature_key ) : ?>

            <?php
            $feature = get_field( $feature_key );

            if ( empty( $feature ) ) {
                continue;
            }

            $feature_title = $feature['title'] ?? '';
            $feature_link  = $feature['link'] ?? '';
            $feature_icon  = $feature['icon'] ?? '';
            ?>

            <?php if ( $feature_title ) : ?>

                <article class="feature-card">

                    <?php if ( $feature_link ) : ?>
                        <a
                            href="<?php echo esc_url( $feature_link ); ?>"
                            class="feature-card__arrow"
                            aria-label="<?php echo esc_attr( $feature_title ); ?>"
                        >
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-up-right.png' ); ?>"
                                alt=""
                            >
                        </a>
                    <?php endif; ?>


                    <?php
                    $icon_url = '';
                    $icon_alt = $feature_title;

                    if ( is_array( $feature_icon ) ) {

                        $icon_url = $feature_icon['url'] ?? '';

                        if ( ! empty( $feature_icon['alt'] ) ) {
                            $icon_alt = $feature_icon['alt'];
                        }

                    } elseif ( is_numeric( $feature_icon ) ) {

                        $icon_url = wp_get_attachment_image_url(
                            (int) $feature_icon,
                            'full'
                        );

                        $attachment_alt = get_post_meta(
                            (int) $feature_icon,
                            '_wp_attachment_image_alt',
                            true
                        );

                        if ( $attachment_alt ) {
                            $icon_alt = $attachment_alt;
                        }

                    } elseif ( is_string( $feature_icon ) ) {

                        $icon_url = $feature_icon;
                    }
                    ?>

                    <?php if ( $icon_url ) : ?>

                        <div class="feature-card__icon">

                            <img
                                src="<?php echo esc_url( $icon_url ); ?>"
                                alt="<?php echo esc_attr( $icon_alt ); ?>"
                            >

                        </div>

                    <?php endif; ?> 


                    <h3>
                        <?php echo esc_html( $feature_title ); ?>
                    </h3>

                </article>

            <?php endif; ?>

        <?php endforeach; ?>

    </section>

    <!-- Featured Properties -->
    <section class="section properties-section">
        <?php
        $featured_properties = get_field( 'featured_properties' );
        ?>
        <div class="container">
            <div class="properties-heading">

                <div class="section-heading">

                    <div class="section-decoration">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/abstract-design.png'
                            ); ?>"
                            alt=""
                        >
                    </div>

                    <?php if ( ! empty( $featured_properties['title'] ) ) : ?>
                        <h2>
                            <?php echo esc_html( $featured_properties['title'] ); ?>
                        </h2>
                    <?php endif; ?>


                    <?php if ( ! empty( $featured_properties['subtitle'] ) ) : ?>
                        <p>
                            <?php echo esc_html( $featured_properties['subtitle'] ); ?>
                        </p>
                    <?php endif; ?>

                </div>


                <?php if ( ! empty( $featured_properties['button_text'] ) && ! empty( $featured_properties['button_link'] ) ) : ?>

                    <a
                        href="<?php echo esc_url( $featured_properties['button_link'] ); ?>"
                        class="properties-view-all show-flex-d"
                    >
                        <?php echo esc_html( $featured_properties['button_text'] ); ?>
                    </a>

                <?php endif; ?>

            </div>


            <!-- Carousel -->
            <div class="property-carousel">
                <div class="property-carousel__viewport">
                    <div class="property-grid property-carousel__track">
                        <?php
                            $property_query = new WP_Query(
                                array(
                                    'post_type'      => 'property',
                                    'posts_per_page' => 10,
                                    'post_status'    => 'publish',
                                    'orderby'        => 'menu_order',
                                    'order'          => 'ASC',
                                )
                            );

                            $property_total = (int) $property_query->found_posts;
                            ?>

                            <?php if ( $property_query->have_posts() ) : ?>

                                <?php while ( $property_query->have_posts() ) : $property_query->the_post(); ?>

                                    <?php
                                    $property_image       = get_field( 'property_image' );
                                    $property_description = get_field( 'property_description' );
                                    $property_bedrooms    = get_field( 'property_bedrooms' );
                                    $property_bathrooms   = get_field( 'property_bathrooms' );
                                    $property_type        = get_field( 'property_type' );
                                    $property_price       = get_field( 'property_price' );
                                    $property_link        = get_field( 'property_link' );
                                    ?>

                                    <article class="property-card">

                                        <?php if ( $property_image ) : ?>

                                            <div class="property-card__image">

                                                <img
                                                    src="<?php echo esc_url( $property_image['url'] ); ?>"
                                                    alt="<?php echo esc_attr( $property_image['alt'] ?: get_the_title() ); ?>"
                                                >

                                            </div>

                                        <?php endif; ?>


                                        <div class="property-card__content">

                                            <h3>
                                                <?php the_title(); ?>
                                            </h3>


                                            <p>
                                                <?php echo esc_html( $property_description ); ?>
                                            </p>


                                            <div class="property-card__details">

                                                <?php if ( $property_bedrooms ) : ?>

                                                    <span>
                                                        <img
                                                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bed-icon.png' ); ?>"
                                                            alt=""
                                                        >
                                                        <?php echo esc_html( $property_bedrooms ); ?>-Bedroom
                                                    </span>

                                                <?php endif; ?>


                                                <?php if ( $property_bathrooms ) : ?>

                                                    <span>
                                                        <img
                                                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bathroom.png' ); ?>"
                                                            alt=""
                                                        >
                                                        <?php echo esc_html( $property_bathrooms ); ?>-Bathroom
                                                    </span>

                                                <?php endif; ?>


                                                <?php if ( $property_type ) : ?>

                                                    <span>
                                                        <img
                                                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/villa-icon.png' ); ?>"
                                                            alt=""
                                                        >
                                                        <?php echo esc_html( $property_type ); ?>
                                                    </span>

                                                <?php endif; ?>

                                            </div>


                                            <div class="property-card__bottom">

                                                <div class="property-price">

                                                    <small>Price</small>

                                                    <strong>
                                                        <?php echo esc_html( $property_price ); ?>
                                                    </strong>

                                                </div>


                                                <?php if ( $property_link ) : ?>

                                                    <a
                                                        href="<?php echo esc_url( $property_link ); ?>"
                                                        class="button button--primary"
                                                    >
                                                        View Property Details
                                                    </a>

                                                <?php else : ?>

                                                    <a
                                                        href="<?php the_permalink(); ?>"
                                                        class="button button--primary"
                                                    >
                                                        View Property Details
                                                    </a>

                                                <?php endif; ?>

                                            </div>

                                        </div>

                                    </article>

                                <?php endwhile; ?>

                            <?php endif; ?>

                            <?php wp_reset_postdata(); ?>

                    </div>

                </div>


                <!-- Pagination / Controls -->
                 <div class="properties-pagination show-flex-m">

                    <?php if ( ! empty( $featured_properties['button_text'] ) && ! empty( $featured_properties['button_link'] ) ) : ?>

                        <a
                            href="<?php echo esc_url( $featured_properties['button_link'] ); ?>"
                            class="properties-view-all"
                        >
                            <?php echo esc_html( $featured_properties['button_text'] ); ?>
                        </a>

                    <?php endif; ?>

                    <div class="properties-pagination__controls">
                        <div class="properties-arrows">

                            <button type="button" class="properties-prev" aria-label="Previous properties">
                                ←
                            </button>

                            <span class="properties-count">
                                <span class="properties-count">
                                    <span class="properties-current">01</span>
                                    of <?php echo esc_html( $property_total ); ?>
                                </span>
                            </span>

                            <button type="button" class="properties-next" aria-label="Next properties">
                                →
                            </button>
                        </div>
                    </div>
                </div>
                <div class="properties-pagination show-flex-d">
                    <span class="properties-count">
                        <span class="properties-count">
                            <span class="properties-current">01</span>
                            of <?php echo esc_html( $property_total ); ?>
                        </span>
                    </span>

                    <div class="properties-arrows">
                        <button type="button" class="properties-prev" aria-label="Previous properties">
                            ←
                        </button>

                        <button type="button" class="properties-next" aria-label="Next properties">
                            →
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <?php
        $testimonials_section = get_field( 'testimonials_section' );
        ?>                
        <div class="container">
            <div class="testimonials-heading">

                <div class="section-heading">

                    <div class="section-decoration">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/abstract-design.png'
                            ); ?>"
                            alt=""
                        >
                    </div>


                    <?php if ( ! empty( $testimonials_section['title'] ) ) : ?>
                        <h2>
                            <?php echo esc_html( $testimonials_section['title'] ); ?>
                        </h2>
                    <?php endif; ?>


                    <?php if ( ! empty( $testimonials_section['subtitle'] ) ) : ?>
                        <p>
                            <?php echo esc_html( $testimonials_section['subtitle'] ); ?>
                        </p>
                    <?php endif; ?>

                </div>


                <?php if ( ! empty( $testimonials_section['button_text'] ) && ! empty( $testimonials_section['button_link'] ) ) : ?>

                    <a
                        href="<?php echo esc_url( $testimonials_section['button_link'] ); ?>"
                        class="testimonials-view-all show-flex-d"
                    >
                        <?php echo esc_html( $testimonials_section['button_text'] ); ?>
                    </a>

                <?php endif; ?>

            </div>


            <!-- Testimonials Carousel -->

            <div class="testimonial-carousel">

                <div class="testimonial-carousel__viewport">

                    <div class="testimonials-grid testimonial-carousel__track">

                        <?php
                        $testimonial_query = new WP_Query(
                            array(
                                'post_type'      => 'testimonial',
                                'posts_per_page' => 10,
                                'post_status'    => 'publish',
                                'orderby'        => 'menu_order',
                                'order'          => 'ASC',
                            )
                        );

                        $testimonial_total = (int) $testimonial_query->found_posts;
                        ?>

                        <?php if ( $testimonial_query->have_posts() ) : ?>

                            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>

                                <?php
                                $testimonial_text = get_field( 'testimonial_text' );
                                $client_name      = get_field( 'client_name' );
                                $client_location  = get_field( 'client_location' );
                                $client_photo     = get_field( 'client_photo' );
                                $rating           = get_field( 'rating' );

                                if ( ! $rating ) {
                                    $rating = 5;
                                }
                                ?>

                                <article class="testimonial-card">

                                    <div class="testimonial-stars">

                                        <?php for ( $i = 0; $i < (int) $rating; $i++ ) : ?>

                                            <img
                                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/star.png' ); ?>"
                                                alt=""
                                            >

                                        <?php endfor; ?>

                                    </div>


                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>


                                    <p class="testimonial-text">
                                        <?php echo esc_html( $testimonial_text ); ?>
                                    </p>


                                    <div class="testimonial-author">

                                        <?php if ( $client_photo ) : ?>

                                            <img
                                                src="<?php echo esc_url( $client_photo['url'] ); ?>"
                                                alt="<?php echo esc_attr( $client_name ); ?>"
                                            >

                                        <?php endif; ?>


                                        <div>

                                            <strong>
                                                <?php echo esc_html( $client_name ); ?>
                                            </strong>

                                            <span>
                                                <?php echo esc_html( $client_location ); ?>
                                            </span>

                                        </div>

                                    </div>

                                </article>

                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

                </div>


                <!-- Your existing mobile pagination stays here -->

                <div class="testimonials-pagination show-flex-m">
                    <?php if ( ! empty( $testimonials_section['button_text'] ) && ! empty( $testimonials_section['button_link'] ) ) : ?>

                        <a
                            href="<?php echo esc_url( $testimonials_section['button_link'] ); ?>"
                            class="testimonials-view-all"
                        >
                            <?php echo esc_html( $testimonials_section['button_text'] ); ?>
                        </a>

                    <?php endif; ?>
                    <div class="testimonials-pagination__controls">
                        <div class="testimonials-arrows">
                            <button type="button" class="testimonials-prev" aria-label="Previous testimonials" >
                                ←
                            </button>

                            <span class="testimonials-count">
                                <span class="testimonials-current">01</span>
                                of <?php echo esc_html( $testimonial_total ); ?>
                            </span>

                            <button type="button" class="testimonials-next" aria-label="Next testimonials" >
                                →
                            </button>

                        </div>
                    </div>
                </div>


                <!-- Your existing desktop pagination -->

                <div class="testimonials-pagination show-flex-d">

                    <span>
                        <span class="testimonials-current">01</span>
                        of <?php echo esc_html( $testimonial_total ); ?>
                    </span>

                    <div class="testimonials-arrows">

                        <button type="button" class="testimonials-prev" aria-label="Previous testimonials" >
                            ←
                        </button>

                        <button type="button" class="testimonials-next" aria-label="Next testimonials" >
                            →
                        </button>

                    </div>
                </div>
            </div>

    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <?php
        $faq_section = get_field( 'faq_section' );
        ?>                   
        <div class="container">

            <div class="faq-heading">

                <div class="section-heading">

                    <div class="section-decoration">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/abstract-design.png'
                            ); ?>"
                            alt=""
                        >
                    </div>


                    <?php if ( ! empty( $faq_section['title'] ) ) : ?>
                        <h2>
                            <?php echo esc_html( $faq_section['title'] ); ?>
                        </h2>
                    <?php endif; ?>


                    <?php if ( ! empty( $faq_section['subtitle'] ) ) : ?>
                        <p>
                            <?php echo esc_html( $faq_section['subtitle'] ); ?>
                        </p>
                    <?php endif; ?>

                </div>


                <?php if ( ! empty( $faq_section['button_text'] ) && ! empty( $faq_section['button_link'] ) ) : ?>

                    <a
                        href="<?php echo esc_url( $faq_section['button_link'] ); ?>"
                        class="faq-view-all"
                    >
                        <?php echo esc_html( $faq_section['button_text'] ); ?>
                    </a>

                <?php endif; ?>

            </div>


            <?php
            $faq_query = new WP_Query(
                array(
                    'post_type'      => 'faq',
                    'posts_per_page' => 10,
                    'post_status'    => 'publish',
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                )
            );

            $faq_total = (int) $faq_query->found_posts;
            ?>

            <div class="faq-carousel">

                <div class="faq-carousel__viewport">

                    <div class="faq-carousel__track">

                        <?php if ( $faq_query->have_posts() ) : ?>

                            <?php while ( $faq_query->have_posts() ) : $faq_query->the_post(); ?>

                                <article class="faq-card">

                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>

                                    <?php
                                    $faq_answer = get_post_meta( get_the_ID(), 'faq_answer', true );?>
                                    <p>
                                    <?php if ( ! empty( $faq_answer ) ) {
                                        echo wp_kses_post( $faq_answer );
                                    } else {
                                        echo 'FAQ answer is empty.';
                                    }
                                    ?>
                                    </p>

                                    <a
                                        href="#"
                                        class="faq-read-more"
                                        aria-label="<?php echo esc_attr( 'Read more about ' . get_the_title() ); ?>"
                                    >
                                        Read More
                                    </a>

                                </article>

                            <?php endwhile; ?>

                        <?php else : ?>

                            <article class="faq-card faq-card--empty">
                                <h3>No FAQs available</h3>
                            </article>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

                </div>


                <div class="faq-pagination show-flex-d">

                    <span>
                        <span class="faq-current">01</span>
                        of
                        <?php echo esc_html( $faq_total ); ?>
                    </span>

                    <div class="faq-arrows">

                        <button
                            type="button"
                            class="faq-prev"
                            aria-label="Previous FAQs"
                        >
                            ←
                        </button>

                        <button
                            type="button"
                            class="faq-next"
                            aria-label="Next FAQs"
                        >
                            →
                        </button>

                    </div>

                </div>

                <!-- Your existing mobile pagination stays here -->

                <div class="faq-pagination show-flex-m">
                    <?php if ( ! empty( $faq_section['button_text'] ) && ! empty( $faq_section['button_link'] ) ) : ?>

                        <a
                            href="<?php echo esc_url( $faq_section['button_link'] ); ?>"
                            class="testimonials-view-all"
                        >
                            <?php echo esc_html( $faq_section['button_text'] ); ?>
                        </a>

                    <?php endif; ?>
                    <div class="testimonials-pagination__controls">
                        <div class="testimonials-arrows">
                            <button type="button" class="testimonials-prev" aria-label="Previous testimonials" >
                                ←
                            </button>

                            <span class="testimonials-count">
                                <span class="testimonials-current">01</span>
                                of <?php echo esc_html( $faq_total ); ?>
                            </span>

                            <button type="button" class="testimonials-next" aria-label="Next testimonials" >
                                →
                            </button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

<?php
get_footer();